<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Services\Store\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function addToCart(Request $request)
    {
        $productId = $request->product_id;
        $quantity = (int) ($request->quantity ?? 1);
        $attributeValueIds = $request->attribute_value_ids ?? [];

        $product = Product::with('thumbnail')->findOrFail($productId);

        $variant = null;
        if ($product->product_type == 'simple') {
            $variant = $product->variants()->where('is_primary', 1)->first();
        } else {
            $variant = $this->matchVariant($productId, $attributeValueIds);
        }

        if (! $variant) {
            return response()->json([
                'message' => 'Selected variant is not available.',
            ], 422);
        }

        $attributePairs = [];
        foreach ($attributeValueIds as $attributeValueId) {
            $attributeValue = \App\Models\AttributeValue::with('attribute')->find($attributeValueId);
            if ($attributeValue && $attributeValue->attribute) {
                $attributePairs[$attributeValue->attribute->id] = $attributeValue->id;
            }
        }

        $cart = Session::get('cart', []);

        $attributeValueIdsSorted = collect($attributeValueIds)->sort()->values()->implode('_');
        $key = "cart_{$productId}_{$attributeValueIdsSorted}";

        if (isset($cart[$key])) {
            $cart[$key]['quantity'] += $quantity;
        } else {
            $cart[$key] = [
                'product_id' => $product->id,
                'variant_id' => $variant->id,
                'variant_name' => $variant->name ?? $product->translation->name,
                'price' => $variant->converted_discount_price ?? $variant->converted_price,
                'quantity' => $quantity,
                'image' => optional($variant->images->first() ?? $product->thumbnail)->image_url,
                'attributes' => $attributePairs,
            ];
        }

        Session::put('cart', $cart);
        Session::put('cart_count', array_sum(array_column($cart, 'quantity')));

        return response()->json([
            'message' => __('store.product_detail.cart_success'),
            'cart' => $cart,
            'cart_count' => Session::get('cart_count'),
        ]);
    }

    private function matchVariant($productId, array $attributeValueIds)
    {
        if (empty($attributeValueIds)) {
            return ProductVariant::where('product_id', $productId)->where('is_primary', true)->first();
        }

        $variants = ProductVariant::with('attributeValues')
            ->where('product_id', $productId)
            ->get();

        foreach ($variants as $variant) {
            $variantAttrIds = $variant->attributeValues->pluck('id')->sort()->values();
            if ($variantAttrIds->toArray() === collect($attributeValueIds)->sort()->values()->toArray()) {
                return $variant;
            }
        }

        return null;
    }

    public function updateCart(Request $request)
    {
        $cart = Session::get('cart', []);

        foreach ($request->cart as $item) {
            if (isset($cart[$item['product_id']])) {
                $cart[$item['product_id']]['quantity'] = max(1, intval($item['quantity']));
            }
        }

        Session::put('cart', $cart);
        Session::put('cart_count', array_sum(array_column($cart, 'quantity')));

        return response()->json([
            'success' => true,
            'message' => 'Cart updated successfully!',
            'cart' => $cart,
        ]);
    }

    public function viewCart()
    {
        $cart = Session::get('cart', []);

        return view('themes.xylo.cart', compact('cart'));
    }

    public function removeFromCart(Request $request)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$request->product_id])) {
            unset($cart[$request->product_id]);
            Session::put('cart', $cart);
        }

        if (empty($cart)) {
            session()->forget('cart_coupon');
        }

        return response()->json(['message' => __('store.cart.product_removed'), 'cart' => $cart]);
    }

    public function applyCoupon(Request $request)
    {
        $request->validate(['code' => 'required|string']);

        $result = $this->cartService->applyCoupon($request->code);

        return response()->json($result);
    }

    public function removeCoupon()
    {
        $this->cartService->removeCoupon();

        return response()->json(['success' => true, 'message' => 'Coupon removed successfully!']);
    }
}

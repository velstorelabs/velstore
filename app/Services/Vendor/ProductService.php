<?php

namespace App\Services\Vendor;

use App\Models\Product;
use App\Models\ProductTranslation;
use App\Repositories\Vendor\Product\ProductRepository;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProductsForDataTable($request)
    {
        $vendorId = auth()->guard('vendor')->id();

        $products = Product::with([
            'translations',
            'primaryVariant' => function ($q) {
                $q->where('is_primary', 1);
            },
        ])
            ->where('vendor_id', '=', $vendorId)
            ->whereHas('variants', function ($query) {
                $query->where('is_primary', 1);
            });

        return DataTables::of($products)
            ->addColumn('name', function ($product) {
                $translation = $product->translations->firstWhere('language_code', 'en');

                return $translation ? $translation->name : 'No name available';
            })
            ->addColumn('price', function ($product) {
                $primaryVariant = $product->variants->firstWhere('is_primary', true);

                return $primaryVariant ? '$' . number_format($primaryVariant->price, 2) : 'No price';
            })
            ->addColumn('status', function ($product) {
                return $product->status;
            })
            ->addColumn('action', function ($product) {
                return '
                    <a href="' . route('vendor.products.edit', $product->id) . '" class="btn btn-primary btn-sm">Edit</a>
                    <form action="' . route('vendor.products.destroy', $product->id) . '" method="POST" class="d-inline" onsubmit="return confirm(\'Are you sure you want to delete this product?\');">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(array $translations, array $data)
    {
        $data = Arr::add($data, 'slug', $this->createSlug($data['name']));
        $product = $this->productRepository->store($data);

        foreach ($translations as $languageCode => $translation) {
            ProductTranslation::create([
                'product_id' => $product->id,
                'locale' => $languageCode,
                'language_code' => $languageCode,
                'name' => $translation['name'],
                'description' => $translation['description'] ?? null,
            ]);
        }

        return $product;
    }

    public function update($id, array $data, array $translations)
    {
        try {
            $updatedProduct = $this->productRepository->update($id, $data);

            foreach ($translations as $languageCode => $translation) {
                ProductTranslation::updateOrCreate(
                    ['product_id' => $updatedProduct->id, 'language_code' => $languageCode],
                    [
                        'name' => $translation['name'],
                        'description' => $translation['description'] ?? null,
                    ]
                );
            }

            return $updatedProduct;
        } catch (\Exception $e) {
            return ['error' => 'Error updating product: ' . $e->getMessage()];
        }
    }

    public function destroy($id)
    {
        try {
            return $this->productRepository->destroy($id);
        } catch (\Exception $e) {
            \Log::error("Error deleting product with ID {$id}: " . $e->getMessage());

            return false;
        }
    }

    private function createSlug($slug)
    {
        $slugBase = Str::slug($slug);
        $slug = $slugBase;
        $counter = 1;

        while (Product::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}

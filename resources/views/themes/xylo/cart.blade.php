@extends('themes.xylo.layouts.master')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> 
@endsection
@section('content')
    @php $currency = activeCurrency(); @endphp
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumbs" aria-label="breadcrumb">
                <a href="{{ url('/') }}">{{ __('store.cart.breadcrumb_home') }}</a>
                <i class="fa fa-angle-right"></i>
                <span>{{ __('store.cart.breadcrumb_cart') }}</span>
            </div>
        </div>
    </section>
    @php $total = 0; @endphp
    <div class="cart-page pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @if(empty($cart))
                    <p class="alert alert-warning">{{ __('store.cart.empty_cart') }}</p>
                @else
                <div class="table-responsive">
                    <table class="w-100 table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>{{ __('store.cart.product') }}</th>
                                <th>{{ __('store.cart.price') }}</th>
                                <th>{{ __('store.cart.quantity') }}</th>
                                <th>{{ __('store.cart.subtotal') }}</th>
                            </tr>
                        </thead>
                        
                      
                        <tbody>
    @foreach ($cart as $key => $item)
        @php
            $product = \App\Models\Product::with(['translations', 'thumbnail'])->find($item['product_id']);
            $variant = isset($item['variant_id'])
                        ? \App\Models\ProductVariant::with('images')->find($item['variant_id'])
                        : \App\Models\ProductVariant::where('product_id', $item['product_id'])->where('is_primary', true)->first();

            $subtotal = $item['price'] * $item['quantity'];
        @endphp
        <tr>
            <td>
                <button class="btn btn-link p-0 bnlink remove-from-cart" data-id="{{ $key }}">
                    <i class="fa-regular fa-circle-xmark"></i>
                </button>
            </td>
            <td>
                <div class="pr-imghead">
                    <img src="{{ Storage::url(optional($variant->images->first() ?? $product->thumbnail)->image_url ?? 'default.jpg') }}" 
                         alt="{{ $variant->name ?? $product->translation->name }}">
                    <p>{{ $variant->name ?? $product->translation->name }}</p>
                </div>
                
                <div id="size-color-wrapper">
                    @php
                        $sizes = [];
                        $colors = [];
                    @endphp

                    @if (!empty($item['attributes']))
                        @foreach ($item['attributes'] as $attributeValueId)
                            @php
                                $attributeValue = \App\Models\AttributeValue::with('attribute')->find($attributeValueId);
                            @endphp
                            @if ($attributeValue && $attributeValue->attribute)
                                @php
                                    $attributeName = strtolower($attributeValue->attribute->name);
                                    if ($attributeName === 'size') {
                                        $sizes[] = $attributeValue->translated_value;
                                    } elseif ($attributeName === 'color') {
                                        $colors[] = $attributeValue->translated_value;
                                    }
                                @endphp
                            @endif
                        @endforeach
                    @endif

                    @if (!empty($sizes))
                        <span id="product-size">
                            @foreach ($sizes as $size)
                                <span class="size-box">{{ $size }}</span>
                            @endforeach
                        </span>
                    @endif

                    @if (!empty($colors))
                        <span id="product-color">
                            @foreach ($colors as $color)
                                <span class="color-circle {{ strtolower($color) }}" ></span>
                            @endforeach
                        </span>
                    @endif
                </div>
            </td>
            <td>
                <strong>{{ $currency->symbol }}{{ number_format($item['price'], 2) }}</strong>
            </td>
            <td>
                <input type="number" value="{{ $item['quantity'] }}" min="1" data-id="{{ $key }}">
            </td>
            <td>
                <strong>{{ $currency->symbol }}{{ number_format($subtotal, 2) }}</strong>
            </td>
        </tr>
        @php $total += $subtotal; @endphp
    @endforeach
</tbody>


                    </table>
                </div>
                @endif
                <div class="btn-group mt-4">
                    <a href="{{ route('xylo.home') }}" class="btn-light">{{ __('store.cart.continue_shopping') }}</a>
                    <a href="#" class="read-more update-cart">{{ __('store.cart.update_cart') }}</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="cart-box">
                    <h3 class="cart-heading">{{ __('store.cart.cart_totals') }}</h3>

                    <div class="row border-bottom pb-2 mb-2 mt-4">
                        <div class="col-6 col-md-4">{{ __('store.cart.subtotal_label') }}</div>
                        <div class="col-6 col-md-8 text-end">{{ $currency->symbol }}{{ number_format($total, 2) }}</div>
                    </div>

                    @php
                        $coupon = session('cart_coupon');
                        $discountAmount = 0;
                        if ($coupon) {
                            if ($coupon['type'] === 'percentage') {
                                $discountAmount = $total * ($coupon['discount'] / 100);
                            } else {
                                $discountAmount = $coupon['discount'];
                            }
                        }
                        $finalTotal = max(0, $total - $discountAmount);
                    @endphp

                    @if($coupon)
                        <div class="row border-bottom pb-2 mb-2 d-flex align-items-center">
                            <div class="col-8 d-flex align-items-center">Discount ({{ $coupon['code'] }})</div>
                            <div class="col-4 d-flex justify-content-end align-items-center">
                                    -{{ $currency->symbol }}{{ number_format($discountAmount, 2) }}
                                <form id="removeCouponForm" class="ms-2">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm p-1 remove-coupon"
                                        style="border-radius: 50%; width: 25px; height: 25px; display: flex; align-items: center; justify-content: center;">
                                        x
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif

                    <div class="row border-bottom pb-2 mb-2">
                        <div class="col-6 col-md-4">{{ __('store.cart.total_label') }}</div>
                        <div class="col-6 col-md-8 text-end"><span>{{ $currency->symbol }}{{ number_format($finalTotal, 2) }}</span></div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('checkout.index') }}" class="proceed-to-checkout d-block text-center">{{ __('store.cart.proceed_to_checkout') }}</a>
                    </div>
                </div>

                <div class="coupon-box mt-4">
                    <h3 class="cart-heading mb-4">{{ __('store.cart.coupon_heading') }}</h3>

                    <form id="applyCouponForm">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="code" id="coupon_code" placeholder="{{ __('store.cart.coupon_placeholder') }}" class="form-control">
                        </div>
                        <button type="submit" class="btn-light d-block text-center w-100">{{ __('store.cart.apply_coupon') }}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        $('.update-cart').click(function(e) {
            e.preventDefault();

            let cartData = [];

            $('tbody tr').each(function() {
                let productId = $(this).find('input[type="number"]').data('id');
                let quantity = $(this).find('input[type="number"]').val();

                cartData.push({
                    product_id: productId,
                    quantity: quantity
                });
            });

            $.ajax({
                url: "{{ route('cart.update') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    cart: cartData
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    }
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.remove-from-cart').forEach(button => {
            button.addEventListener('click', function() {
                let productId = this.dataset.id;

                fetch("{{ route('cart.remove') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ product_id: productId })
                })
                .then(response => response.json())
                .then(data => {
                    toastr.success("{{ session('success') }}", data.message, {
                        closeButton: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        timeOut: 5000
                    });
                    location.reload();
                });
            });
        });
    });
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("applyCouponForm")?.addEventListener("submit", function(e) {
        e.preventDefault();
        let code = document.getElementById("coupon_code").value;
        fetch("{{ route('cart.applyCoupon') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
            },
            body: JSON.stringify({ code: code })
        })
        .then(response => response.json())
        .then(data => {
            toastr.success(data.message, "Applied", {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-right",
                timeOut: 5000
            });
            setTimeout(() => {
                if (data.success) location.reload();
            }, 1000);
        });
    });

    document.getElementById("removeCouponForm")?.addEventListener("submit", function(e) {
        e.preventDefault();
        fetch("{{ route('cart.removeCoupon') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
            }
        })
        .then(response => response.json())
        .then(data => {
            toastr.success(data.message, "Removed", {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-right",
                timeOut: 5000
            });
            
            setTimeout(() => {
                if (data.success) location.reload();
            }, 1000);

        });
    });
});
</script>

@endsection
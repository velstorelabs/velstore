@extends('themes.xylo.layouts.master')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> 
@endsection
@section('content')
    @php $currency = activeCurrency(); @endphp
    <section class="banner-area inner-banner pt-5 animate__animated animate__fadeIn productinnerbanner">
        <div class="container h-100">
            <div class="row">
                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <a href="#">Home Page</a> <i class="fa fa-angle-right"></i> <a href="#">Headphone</a> <i
                            class="fa fa-angle-right"></i> Espresso decaffeinato
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php $total = 0; @endphp
    <div class="cart-page pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @if(empty($cart))
                    <p class="alert alert-warning">Your cart is empty.</p>
                @else
                <div class="table-responsive">
                    <table class="w-100 table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $productId => $item)
                                @php
                                    $product = \App\Models\Product::with(['translation', 'thumbnail'])->find($productId);
                                    $subtotal = $product->converted_price * $item['quantity'];
                                @endphp
                                <tr>
                                    <td>
                                        <button class="btn btn-link p-0 bnlink remove-from-cart" data-id="{{ $productId }}">
                                            <i class="fa-regular fa-circle-xmark"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <div class="pr-imghead">
                                            <img src="{{ Storage::url(optional($product->thumbnail)->image_url ?? 'default.jpg') }}" 
                                                alt="{{ $product->translation->name }}">
                                            <p>{{ $product->translation->name }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <strong>{{ $currency->symbol }}{{ $product->converted_price }}</strong>
                                    </td>
                                    <td>
                                        <input type="number" value="{{ $item['quantity'] }}" min="1" data-id="{{ $productId }}">
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
                    <a href="#" class="btn-light">Continue Shopping</a>
                    <a href="#" class="read-more update-cart">Update cart</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="cart-box">
                    <h3 class="cart-heading">Cart totals</h3>

                    <div class="row border-bottom pb-2 mb-2 mt-4">
                        <div class="col-6 col-md-4">Subtotal</div>
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
                        <div class="col-6 col-md-4">Total</div>
                        <div class="col-6 col-md-8 text-end"><span>{{ $currency->symbol }}{{ number_format($finalTotal, 2) }}</span></div>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="proceed-to-checkout d-block text-center">Proceed to checkout</a>
                    </div>
                </div>

                <div class="coupon-box mt-4">
                    <h3 class="cart-heading mb-4">Coupon</h3>

                    <form id="applyCouponForm">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="code" id="coupon_code" placeholder="Coupon code" class="form-control">
                        </div>
                        <button type="submit" class="btn-light d-block text-center w-100">Apply Coupon</button>
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
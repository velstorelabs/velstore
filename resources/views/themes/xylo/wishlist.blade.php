@extends('themes.xylo.layouts.master')

@section('content')
@php $currency = activeCurrency(); @endphp

<div class="container py-5">
    <h1 class="sec-heading mb-5">{{ __('store.wishlist.title') }}</h1>

    @if($products->isEmpty())
        <div class="alert alert-info">{{ __('store.wishlist.empty') }}</div>
    @else
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="product-card">

                        <div class="product-img position-relative">
                            <img src="{{ Storage::url(optional($product->thumbnail)->image_url ?? 'default.jpg') }}"
                                 alt="{{ $product->translation->name }}" style="object-fit: contain; width: 100%; height: 250px;">

                            <!-- Same wishlist heart like homepage -->
                            <button class="wishlist-btn border-0 bg-transparent"
                                    data-product-id="{{ $product->id }}">
                                <i class="fa-solid fa-heart text-danger"></i>
                            </button>
                        </div>

                        <div class="product-info mt-4">
                            <div class="top-info">
                                <div class="reviews">
                                    <i class="fa-solid fa-star"></i> ({{ $product->reviews_count }} {{ __('store.wishlist.reviews') }})
                                </div>
                            </div>

                            <div class="bottom-info">
                                <div class="left">
                                    <h3>
                                        <a href="{{ route('product.show', $product->slug) }}" class="product-title">
                                            {{ $product->translation->name }}
                                        </a>
                                    </h3>

                                    <p class="price">
                                        <span class="original {{ optional($product->primaryVariant)->converted_discount_price ? 'has-discount' : '' }}">
                                            {{ $currency->symbol }}{{ optional($product->primaryVariant)->converted_price ?? 'N/A' }}
                                        </span>

                                        @if(optional($product->primaryVariant)->converted_discount_price)
                                            <span class="discount"> 
                                                {{ $currency->symbol }}{{ $product->primaryVariant->converted_discount_price }}
                                            </span>
                                        @endif
                                    </p>
                                </div>

                                <!--  Same Add to Cart button -->
                                <button class="cart-btn" onclick="addToCart({{ $product->id }})">
                                    <i class="fa fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

@section('js')
<script>
$(document).on('click', '.wishlist-btn', function () {
    let button = $(this);
    let productId = button.data('product-id');

    $.post('{{ route("customer.wishlist.toggle") }}', {
        _token: '{{ csrf_token() }}',
        product_id: productId
    }, function(res) {
        if (res.status === 'removed') {
            button.closest('.col-md-3').fadeOut();
        }
    });
});
//  Add to Cart
function addToCart(productId) {
    $.ajax({
        url: "{{ route('cart.add') }}",
        method: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            product_id: productId,
            quantity: 1
        },
        success: function(res) {
            if (res.status === 'success') {
                toastr.success(res.message);
            } else {
                toastr.success(res.message);
            }
        },
        error: function() {
            toastr.error("Error adding to cart");
        }
    });
}
</script>
@endsection

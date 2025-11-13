@extends('themes.xylo.layouts.master')
@section('content')
    @php $currency = activeCurrency(); @endphp
    {{-- Banner Section Start --}}
    <section class="banner-area py-5 animate__animated animate__fadeIn">
        <div class="container h-100 banner-slider">
            @foreach ($banners as $banner)
            <div>
                <div class="row h-100 align-items-center">
                    <div class="col-md-6">
                        <h1 class="mt-5"><span>{{ $banner->translation ? $banner->translation->title : $banner->title }}</span>
                        </h1>
                        <p class="mt-3 mb-4">{{ __('store.home.banner_text') }}</p>
                       <a href="{{ route('shop.index') }}" class="btn btn-primary">{{ __('store.home.shop_now') }}</a>

                        <div class="mt-5">
                            <img src="assets/images/slide-smallimages.png" alt="" style="width: 200px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rightimg-banner rightimg-banner1">
                            <img src="{{ Storage::url(optional($banner->translation)->image_url ?? 'default.jpg') }}" class="img-fluid shoes-img" alt="{{ $banner->translation ? $banner->translation->title : $banner->title }}">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    {{-- Banner Section End --}}
    <section class="cat-slider animate-on-scroll">
        <div class="container">
            <h2 class="text-start pb-5 sec-heading">{{ __('store.home.explore_popular_categories') }}</h2>
            <div class="category-slider">
                @foreach($categories as $category)
                <div>
                    <div class="cat-card">
                        <a href="{{ route('category.show', $category->slug) }}">
                            <h3>{{ $category->translation->name ?? 'No Translation' }}</h3>
                            <div class="catcard-img">
                                <img src="{{ Storage::url(optional($category->translation)->image_url ?? 'default.jpg') }}" alt="{{ $category->translation->name ?? 'No Translation' }}">
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="trending-products animate-on-scroll">
        <div class="container position-relative">
            <h1 class="text-start pb-5 sec-heading">{{ __('store.home.trending_products') }}</h1>

            <div class="product-slider">
                @foreach ($products as $product)
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ Storage::url(optional($product->thumbnail)->image_url ?? 'default.jpg') }}" 
                                alt="{{ $product->translation->name ?? 'Product Name Not Available' }}">
                                <button class="wishlist-btn" data-product-id="{{ $product->id }}">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                        </div>
                        <div class="product-info mt-4">
                            <div class="top-info">
                                <div class="reviews">
                                    <i class="fa-solid fa-star"></i> ({{ $product->reviews_count }} {{ __('store.home.reviews') }})
                                </div>
                            </div>
                            <div class="bottom-info">
                                <div class="left">
                                    <h3>
                                        <a href="{{ route('product.show', $product->slug) }}" class="product-title">
                                            {{ $product->translation->name ?? 'Product Name Not Available' }}
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
                                <button class="cart-btn" onclick="addToCart({{ $product->id }})">
                                    <i class="fa fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Custom Arrows -->
            <div class="custom-arrows">
                <button class="prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>


    <section class="sale-banner pt-5 pb-5 animate-on-scroll">
        <img src="assets/images/homesale-banner.png" alt="">
    </section>

    <section class="products-home py-5 animate-on-scroll">
        <div class="container">
            <h1 class="sec-heading mb-5">{{ __('store.home.featured_products') }}</h1>
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ Storage::url(optional($product->thumbnail)->image_url ?? 'default.jpg') }}" alt="{{ $product->translation->name ?? 'Product Name Not Available' }}">
                            <button class="wishlist-btn"><i class="fa-solid fa-heart"></i></button>
                        </div>
                        <div class="product-info mt-4">
                            <div class="top-info">
                                <div class="reviews"><i class="fa-solid fa-star"></i>({{ $product->reviews_count }} {{ __('store.home.reviews') }})</div>
                            </div>
                            <div class="bottom-info">
                                <div class="left">
                                    <h3>
                                        <a href="{{ route('product.show', $product->slug) }}" class="product-title">
                                            {{ $product->translation->name ?? 'Product Name Not Available' }}
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
                                <button class="cart-btn" onclick="addToCart({{ $product->id }})">
                                    <i class="fa fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="view-button text-center mt-4">
                <a href="{{ route('shop.index') }}" class="read-more pe-4 ps-4">{{ __('store.home.view_all') }}</a>
            </div>

        </div>
    </section>

    <section class="why-choose-us py-5 animate-on-scroll">
        <div class="container">
            <h1 class="sec-heading text-start mb-5">{{ __('store.home.why_choose_us') }}</h1>
            <div class="row">
                <!-- Feature Box 1 -->
                <div class="col-md-3">
                    <div class="feature-box text-start">
                        <div class="feature-icon">
                            <img src="https://i.ibb.co/WNQXhLnP/choose-icon1.png" alt="">
                        </div>
                        <h3>{{ __('store.home.fast_delivery_title') }}</h3>
                        <p>{{ __('store.home.fast_delivery_text') }}</p>
                    </div>
                </div>
                <!-- Feature Box 2 -->
                <div class="col-md-3">
                    <div class="feature-box text-start">
                        <div class="feature-icon">
                            <img src="https://i.ibb.co/FkmgGPrr/choose-icon2.png" alt="">
                        </div>
                        <h3>{{ __('store.home.customer_support_title') }}</h3>
                        <p>{{ __('store.home.customer_support_text') }}</p>
                    </div>
                </div>
                <!-- Feature Box 3 -->
                <div class="col-md-3">
                    <div class="feature-box text-start">
                        <div class="feature-icon">
                            <img src="https://i.ibb.co/CffNqX9/choose-icon3.png" alt="">
                        </div>
                        <h3>{{ __('store.home.trusted_worldwide_title') }}</h3>
                        <p>{{ __('store.home.trusted_worldwide_text') }}</p>
                    </div>
                </div>
                <!-- Feature Box 4 -->
                <div class="col-md-3">
                    <div class="feature-box text-start">
                        <div class="feature-icon">
                            <img src="https://i.ibb.co/XPvjQGG/choose-icon4.png" alt="">
                        </div>
                        <h3>{{ __('store.home.ten_years_services_title') }}</h3>
                        <p>{{ __('store.home.ten_years_services_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
        function addToCart(productId) {

            fetch("{{ route('cart.add') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: 1
                })
            })
            .then(response => response.json())
            .then(data => {
                toastr.success("{{ session('success') }}", data.message, {
                    closeButton: true,
                    progressBar: true,
                    positionClass: "toast-top-right",
                    timeOut: 5000
                });
                updateCartCount(data.cart);
            })
            .catch(error => console.error("Error:", error));
        }

        function updateCartCount(cart) {
            let totalCount = Object.values(cart).reduce((sum, item) => sum + item.quantity, 0);
            document.getElementById("cart-count").textContent = totalCount;
        }
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.wishlist-btn').forEach(button => {
        button.addEventListener('click', function () {
            const productId = this.getAttribute('data-product-id');

            fetch('/customer/wishlist', {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Accept": "application/json",
                },
                body: JSON.stringify({ product_id: productId })
            })
            .then(response => {
                if (response.status === 401) {
                    // Not logged in
                    window.location.href = '/customer/login';
                } else if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Something went wrong');
                }
            })
            .then(data => {
                if (data?.message) {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
});
</script>
@endsection
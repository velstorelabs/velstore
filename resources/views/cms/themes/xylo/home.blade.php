@extends('cms.themes.xylo.layouts.master')

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
                        <p class="mt-3 mb-4">Explore the biggest variety of sneakers, shoes, and streetwear trends.</p>
                        <button class="btn btn-primary">Shop Now</button>

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
            <h2 class="text-start pb-5 sec-heading">Explore Popular Categories</h2>
            <div class="category-slider">
                @foreach($categories as $category)
                <div>
                    <div class="cat-card">
                        <a href="#">
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

    {{-- About Section Start --}}
    <section class="fashion-section animate-on-scroll">
        <div class="container">
            <div class="fashion-content">
                <div class="fashion-image">
                    <img src="assets/images/fashionarea-img.png" alt="Fashion Models">
                </div>
                <div class="fashion-text">
                    <div class="about-tag">ABOUT US</div>
                    <h2>Exclusive Fashion Offers Await</h2>
                    <p>
                        Diam integer turpis tristique integer cursusw dignissim. Euismod libero
                        pellentesq suspendisseit an amet, consectetur adipiscing elitmperdiet
                        nisvunc imperdras eliten ameoemusa dummy text.
                    </p>
                    <a href="#" class="read-more">READ MORE</a>
                </div>
            </div>
        </div>
    </section>
    {{-- About Section End --}}

    <section class="trending-products animate-on-scroll">
        <div class="container position-relative">
            <h1 class="text-start pb-5 sec-heading">Trending Products</h1>

            <div class="product-slider">
                @foreach ($products as $product)
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ Storage::url(optional($product->thumbnail)->image_url ?? 'default.jpg') }}" alt="{{ $product->translation->name ?? 'Product Name Not Available' }}">
                            <button class="wishlist-btn"><i class="fa-solid fa-heart"></i></button>
                        </div>
                        <div class="product-info mt-4">
                            <div class="top-info">
                                <div class="reviews"><i class="fa-solid fa-star"></i> ({{ $product->reviews_count }} Reviews)</div>
                            </div>
                            <div class="bottom-info">
                                <div class="left">
                                    <h3><a href="{{ route('product.show', $product->slug) }}" class="product-title">{{ $product->translation->name ?? 'Product Name Not Available' }}</a></h3>
                                    <p class="price">{{ $currency->symbol }}{{ $product->converted_price ?? 'N/A' }} <span class="sold-out">Sold Out 85%</span></p>
                                </div>
                                <button class="cart-btn" onclick="addToCart({{ $product->id }})"><i class="fa fa-shopping-bag"></i></button>
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
            <h1 class="sec-heading mb-5">Featured Products</h1>
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
                                <div class="reviews"><i class="fa-solid fa-star"></i> (11.6k Reviews)</div>
                            </div>
                            <div class="bottom-info">
                                <div class="left">
                                    <h3>{{ $product->translation->name ?? 'Product Name Not Available' }}</h3>
                                    <p class="price">{{ $product->price ?? 'N/A' }} <span class="sold-out">Sold Out 85%</span></p>
                                </div>
                                <button class="cart-btn" onclick="addToCart({{ $product->id }})"><i class="fa fa-shopping-bag"></i></button>
                            </div>
                        </div>
                    </div>
                </div>>
                @endforeach
            </div>

            <div class="view-button text-center mt-4">
                <a href="#" class="read-more pe-4 ps-4">VIEW ALL</a>
            </div>

        </div>
    </section>

    <section class="products-home py-5 animate-on-scroll">
        <div class="container">
            <h1 class="sec-heading mb-5">Featured Products</h1>
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
                                <div class="reviews"><i class="fa-solid fa-star"></i> (11.6k Reviews)</div>
                            </div>
                            <div class="bottom-info">
                                <div class="left">
                                    <h3>{{ $product->translation->name ?? 'Product Name Not Available' }}</h3>
                                    <p class="price">{{ $product->price ?? 'N/A' }} <span class="sold-out">Sold Out 85%</span></p>
                                </div>
                                <button class="cart-btn"><img src="assets/images/carts-icon.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="view-button text-center mt-4">
                <a href="#" class="read-more pe-4 ps-4">VIEW ALL</a>
            </div>

        </div>
    </section>

    <section class="why-choose-us py-5 animate-on-scroll">
        <div class="container">
            <h1 class="sec-heading text-white text-start mb-5">Why Choose Us</h1>
            <div class="row">
                <!-- Feature Box 1 -->
                <div class="col-md-3">
                    <div class="feature-box text-start">
                        <div class="feature-icon">
                            <img src="assets/images/choose-icon1.png" alt="">
                        </div>
                        <h3>Fast Delivery</h3>
                        <p>Diam integer turpis tristique integer cursusw dignissim. Euismod libero pellentesq
                            suspendisseit</p>
                    </div>
                </div>
                <!-- Feature Box 2 -->
                <div class="col-md-3">
                    <div class="feature-box text-start">
                        <div class="feature-icon">
                            <img src="assets/images/choose-icon2.png" alt="">
                        </div>
                        <h3>24/7 Online Support</h3>
                        <p>Diam integer turpis tristique integer cursusw dignissim. Euismod libero pellentesq
                            suspendisseit</p>
                    </div>
                </div>
                <!-- Feature Box 3 -->
                <div class="col-md-3">
                    <div class="feature-box text-start">
                        <div class="feature-icon">
                            <img src="assets/images/choose-icon3.png" alt="">
                        </div>
                        <h3>4.9 Ratings</h3>
                        <p>Diam integer turpis tristique integer cursusw dignissim. Euismod libero pellentesq
                            suspendisseit</p>
                    </div>
                </div>
                <!-- Feature Box 4 -->
                <div class="col-md-3">
                    <div class="feature-box text-start">
                        <div class="feature-icon">
                            <img src="assets/images/choose-icon4.png" alt="">
                        </div>
                        <h3>10 Years Services</h3>
                        <p>Diam integer turpis tristique integer cursusw dignissim. Euismod libero pellentesq
                            suspendisseit</p>
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
@endsection
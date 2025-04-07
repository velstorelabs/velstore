@extends('themes.xylo.layouts.master')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> 
@endsection
@section('content')
    @php $currency = activeCurrency(); 
    @endphp
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
    <div class="main-detail pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 position-relative">
                    <div class="slider-for">
                        <div><img src="assets/images/prodict-detailimg.png" alt=""></div>
                        <div><img src="assets/images/prodict-detailimg.png" alt=""></div>
                        <div><img src="assets/images/prodict-detailimg.png" alt=""></div>

                    </div>


                    <div class="slider-nav imgnav">
                        <div><img src="assets/images/prodict-detailthumb.png" alt=""></div>
                        <div><img src="assets/images/prodict-detailthumb.png" alt=""></div>
                        <div><img src="assets/images/prodict-detailthumb.png" alt=""></div>

                    </div>







                </div>
                <div class="col-md-6 pro-textarea">
                    @if ($product->stock > 0)
                        <div class="mb-2 mt-3 btnss">IN STOCK</div>
                    @else
                        <div class="mb-2 mt-3 btnss text-danger">OUT OF STOCK</div>
                    @endif
                    @php
                        $averageRating = round($product->reviews_avg_rating, 1);
                    @endphp
                    <div class="stars">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= floor($averageRating))
                                <i class="fa-solid fa-star text-warning"></i>
                            @elseif ($i - 0.5 == $averageRating)
                                <i class="fa-solid fa-star-half-alt text-warning"></i>
                            @else
                                <i class="fa-regular fa-star text-muted"></i>
                            @endif
                        @endfor
                        <span class="spanstar"> ({{ $product->reviews_count }} customer reviews)</span>
                    </div>
                    <h1 class="sec-heading">{{ $product->translation->name }}</h1>
                    <h2>{{ $currency->symbol }}{{ $product->converted_price ?? 'N/A' }}</h2>
                    <p>{{ $product->translation->short_description }}</p>

                    <div class="product-options">
                        <div class="color-options">
                            <h3>Color</h3>
                            <div class="color-wrapper">
                                <input type="radio" name="color" id="color-black" checked>
                                <label for="color-black" class="color-circle black"></label>

                                <input type="radio" name="color" id="color-blue">
                                <label for="color-blue" class="color-circle blue"></label>

                                <input type="radio" name="color" id="color-gray">
                                <label for="color-gray" class="color-circle gray"></label>

                                <input type="radio" name="color" id="color-pink">
                                <label for="color-pink" class="color-circle pink"></label>

                                <input type="radio" name="color" id="color-red">
                                <label for="color-red" class="color-circle red"></label>

                                <input type="radio" name="color" id="color-yellow">
                                <label for="color-yellow" class="color-circle yellow"></label>

                                <input type="radio" name="color" id="color-teal">
                                <label for="color-teal" class="color-circle teal"></label>

                                <input type="radio" name="color" id="color-white">
                                <label for="color-white" class="color-circle white"></label>
                            </div>
                        </div>

                        <div class="size-options mt-3">
                            <h3>Size</h3>
                            <div class="size-wrapper">
                                <input type="radio" name="size" id="size-m">
                                <label for="size-m" class="size-box">M</label>

                                <input type="radio" name="size" id="size-l">
                                <label for="size-l" class="size-box">L</label>

                                <input type="radio" name="size" id="size-xl">
                                <label for="size-xl" class="size-box">XL</label>

                                <input type="radio" name="size" id="size-x">
                                <label for="size-x" class="size-box">X</label>
                            </div>
                        </div>
                    </div>


                    <!-- Quantity Selector and Cart Button -->
                    <div class="cart-actions mt-3 d-flex">
                        <div class="quantity me-4">
                            <button onclick="changeQty(-1)">-</button>
                            <input type="text" id="qty" value="1">
                            <button onclick="changeQty(1)">+</button>
                        </div>
                        <button class="add-to-cart read-more" onclick="addToCart({{ $product->id }})">Add to Cart</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="reviewbox">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Reviews(5)</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">{!! $product->translation->description !!}</div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            @if ($product->reviews->count() > 0)
                                <h3>Customer Reviews</h3>
                                @foreach ($product->reviews as $review)
                                    <div class="review">
                                        <strong>Rating: {{ $review->rating }}/5</strong>
                                        <p>{{ $review->review }}</p>
                                        <small>Reviewed on {{ $review->created_at->format('M d, Y') }}</small>
                                    </div>
                                @endforeach
                            @else
                                <p>No reviews yet.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @php /*
            <div class="column">
                <div class="col-md-7">
                    <div class="randomt">{!! $product->translation->description !!}</div>
                 </div>
            </div> */
            @endphp
        </div>
    </div>

    <section class="trending-products animate-on-scroll">
        <div class="container position-relative">
            <h1 class="text-start pb-5 sec-heading">Trending Products</h1>

            <div class="product-slider">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/images/prodict-img1.png" alt="Product">
                        <button class="wishlist-btn"><i class="fa-solid fa-heart"></i></button>
                    </div>
                    <div class="product-info mt-4">
                        <div class="top-info">
                            <div class="reviews"><i class="fa-solid fa-star"></i> (11.6k Reviews)</div>
                        </div>
                        <div class="bottom-info">
                            <div class="left">
                                <h3>Product Heading Here</h3>
                                <p class="price">$349 <span class="sold-out">Sold Out 85%</span></p>
                            </div>
                            <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/images/prodict-img1.png" alt="Product">
                        <button class="wishlist-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <div class="product-info mt-4">
                        <div class="top-info">
                            <div class="reviews"><i class="fa-solid fa-star"></i> (11.6k Reviews)</div>
                        </div>
                        <div class="bottom-info">
                            <div class="left">
                                <h3>Product Heading Here</h3>
                                <p class="price">$349 <span class="sold-out">Sold Out 85%</span></p>
                            </div>
                            <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/images/prodict-img1.png" alt="Product">
                        <button class="wishlist-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <div class="product-info mt-4">
                        <div class="top-info">
                            <div class="reviews"><i class="fa-solid fa-star"></i> (11.6k Reviews)</div>
                        </div>
                        <div class="bottom-info">
                            <div class="left">
                                <h3>Product Heading Here</h3>
                                <p class="price">$349 <span class="sold-out">Sold Out 85%</span></p>
                            </div>
                            <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/images/prodict-img1.png" alt="Product">
                        <button class="wishlist-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <div class="product-info mt-4">
                        <div class="top-info">
                            <div class="reviews"><i class="fa-solid fa-star"></i> (11.6k Reviews)</div>
                        </div>
                        <div class="bottom-info">
                            <div class="left">
                                <h3>Product Heading Here</h3>
                                <p class="price">$349 <span class="sold-out">Sold Out 85%</span></p>
                            </div>
                            <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/images/prodict-img1.png" alt="Product">
                        <button class="wishlist-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                    <div class="product-info mt-4">
                        <div class="top-info">
                            <div class="reviews"><i class="fa-solid fa-star"></i> (11.6k Reviews)</div>
                        </div>
                        <div class="bottom-info">
                            <div class="left">
                                <h3>Product Heading Here</h3>
                                <p class="price">$349 <span class="sold-out">Sold Out 85%</span></p>
                            </div>
                            <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Custom Arrows -->
            <div class="custom-arrows">
                <button class="prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        function changeQty(amount) {
            let qtyInput = document.getElementById("qty");
            let currentQty = parseInt(qtyInput.value);
            let newQty = currentQty + amount;

            if (newQty < 1) newQty = 1; // Prevent going below 1
            qtyInput.value = newQty;
        }
        function addToCart(productId) {
            let quantity = document.getElementById("qty").value;

            fetch("{{ route('cart.add') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: quantity
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
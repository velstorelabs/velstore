@extends('themes.xylo.layouts.master')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
@endsection
@section('content')
@php $currency = activeCurrency(); @endphp
<section class="breadcrumb-section">
    <div class="container">
        <div class="breadcrumbs" aria-label="breadcrumb">
            <a href="{{ url('/') }}">{{ __('store.product_detail.home') }}</a>
            <i class="fa fa-angle-right"></i>
            @foreach($breadcrumbs as $category)
                <a href="{{ url('category/' . $category->slug) }}">
                    {{ $category->translation->name ?? $category->slug }}
                </a>
                <i class="fa fa-angle-right"></i>
            @endforeach
            <span>{{ $product->translation->name }}</span>
        </div>
    </div>
</section>
<div class="main-detail pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 position-relative">
                <div class="product-slider">
                    @foreach ($product->images as $image)
                        <div>
                            <img src="{{ Storage::url($image['image_url']) }}" alt="{{ $image['name'] }}" style="width: 100%; height: auto;" />
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-md-6 pro-textarea">
                @if ($inStock)
                    <div id="product-stock" class="mb-2 mt-3 btnss">{{ __('store.product_detail.in_stock') }}</div>
                @else
                    <div id="product-stock" class="mb-2 mt-3 btnss text-danger">OUT OF STOCK</div>
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
                    <span class="spanstar"> ({{ $product->reviews_count }} {{ __('store.product_detail.customer_reviews') }})</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                <h1 class="sec-heading mb-0 me-3">{{ $product->translation->name }}</h1>

                @auth('customer')
                @php
                    $isFavorite = auth('customer')->user()
                        ->wishlistProducts()
                        ->where('product_id', $product->id)
                        ->exists();
                @endphp
                @else
                    @php
                        $isFavorite = false; 
                    @endphp
                @endauth

                <button id="test-heart" class="border-0 bg-transparent">
                    <i class="{{ $isFavorite ? 'fa-solid fa-heart text-danger' : 'fa-regular fa-heart text-secondary' }} fs-4"></i>
                </button>

            </div>

                <h2><span id="currency-symbol">{{ $currency->symbol }}</span><span  id="variant-price" >{{ $product->primaryVariant->converted_price ?? 'N/A' }}</span></h2>
                <p>{{ $product->translation->short_description }}</p>




                <div id="product-attributes" class="product-options">
                    @php
                        $groupedAttributes = $product->attributeValues->groupBy(fn($item) => $item->attribute->id);
                    @endphp

                    @foreach ($groupedAttributes as $attributeId => $values)
                        <div class="attribute-options mt-3">
                            <h3>{{ __('store.product_detail.' . strtolower($values->first()->attribute->name)) }}</h3>
                            <div class="{{ strtolower($values->first()->attribute->name) }}-wrapper">
                                @foreach ($values as $index => $value)
                                    @php
                                        $inputId = strtolower($values->first()->attribute->name) . '-' . $index;
                                    @endphp
                                    <input 
                                        type="radio" 
                                        name="attribute_{{ $attributeId }}" 
                                        id="{{ $inputId }}"
                                        value="{{ $value->id }}"
                                        {{ $index === 0 ? 'checked' : '' }}
                                    >
                                   <label 
                                        for="{{ $inputId }}" 
                                        class="{{ strtolower($values->first()->attribute->name) === 'color' ? 'color-circle' : 'size-box' }}"
                                        style="{{ strtolower($values->first()->attribute->name) === 'color' ? 'background-color:' . strtolower($value->value) . ';' : '' }}"
                                    >
                                    @if(strtolower($values->first()->attribute->name) === 'size')
                                        {{ $value->translated_value }}
                                    @endif
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>




                <!-- Quantity Selector and Cart Button -->
                <div class="cart-actions mt-3 d-flex">
                    <div class="quantity me-4">
                        <button onclick="changeQty(-1)">-</button>
                        <input type="text" id="qty" value="1">
                        <button onclick="changeQty(1)">+</button>
                    </div>
                    <button class="add-to-cart read-more" onclick="addToCart({{ $product->id }}, '{{ $product->product_type }}')">{{ __('store.product_detail.add_to_cart') }}</button>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="reviewbox py-5">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description"
                    type="button" role="tab" aria-controls="description" aria-selected="true">{{ __('store.product_detail.description') }}</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                    type="button" role="tab" aria-controls="reviews" aria-selected="false">{{ __('store.product_detail.reviews') }} ({{ $product->reviews_count }})</button>
          </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content pt-3" id="myTabContent">
          <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            {!! $product->translation->description !!}
          </div>
          <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
           <div class="product-detail-customer-review">

               {{-- Review Form Always Visible Above Review List --}}
                @auth('customer')
                <div class="mt-4 mb-4">
                    <h5>{{ __('store.product_detail.submit_review_title') }}</h5>

                    <form action="{{ route('review.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="rating" id="rating-value" required>

                        {{-- Star Rating --}}
                        <div id="starWrapper" style="font-size: 1.5rem; line-height: 1; display: inline-block;">
                            <span class="star" data-value="1" style="color:#ccc; cursor:pointer;">★</span>
                            <span class="star" data-value="2" style="color:#ccc; cursor:pointer;">★</span>
                            <span class="star" data-value="3" style="color:#ccc; cursor:pointer;">★</span>
                            <span class="star" data-value="4" style="color:#ccc; cursor:pointer;">★</span>
                            <span class="star" data-value="5" style="color:#ccc; cursor:pointer;">★</span>
                        </div>

                        {{-- Optional Review Text --}}
                        <div class="mb-3 mt-3">
                            <label>{{ __('store.product_detail.review_optional') }}</label>
                            <textarea name="review" class="form-control" rows="3"></textarea>
                        </div>

                        <button class="btn btn-primary">{{ __('store.product_detail.submit_review_btn') }}</button>
                    </form>
                </div>

                {{-- JS for Star Rating --}}

                @else
                <p class="mt-3">{{ __('store.product_detail.please') }} <a href="{{ route('customer.login') }}">{{ __('store.product_detail.login') }}</a> {{ __('store.product_detail.submit') }}</p>
                @endauth

                {{-- Now Show Review List --}}
                @if($product->reviews->isEmpty())
                    <p>{{ __('store.product_detail.no_reviews_yet') }}</p>
                @else
                    <ul>
                        @foreach($product->reviews as $review)
                            @if($review->is_approved)
                                <li>
                                    <!-- Display Customer's Image -->
                                    <div class="review-customer-info">
                                        <img src="{{ $review->customer->profile_image
                                                ? asset('storage/' . $review->customer->profile_image)
                                                : 'https://ui-avatars.com/api/?name=' . urlencode($review->customer->name) . '&background=0D8ABC&color=fff&size=70' }}"
                                            alt="{{ $review->customer->name }}" 
                                            class="review-customer-avatar"
                                            style="width:45px; height:45px; border-radius:50%; object-fit:cover;"/>  
                                        <strong>{{ ucwords($review->customer->name) }}</strong>
                                    </div>

                                    <!-- Display Rating with Stars -->
                                   <div class="review-rating">
                                        @for($i = 1; $i <= 5; $i++)
                                            <span style="color: {{ $i <= $review->rating ? 'gold' : '#ccc' }}">&#9733;</span>
                                        @endfor
                                        <span class="review-time">
                                            @php
                                                $created_at = \Carbon\Carbon::parse($review->created_at);
                                                $diffInDays = $created_at->diffInDays(\Carbon\Carbon::now());
                                            @endphp
                                            ({{ $diffInDays }} {{ $diffInDays == 1 ? __('store.product_detail.day') : __('store.product_detail.days')  }} {{ __('store.product_detail.ago') }})
                                        </span>
                                    </div>

                                    <!-- Display Review Text -->
                                    @if($review->review)
                                        <p>{{ $review->review }}</p>
                                    @else
                                        <p>{{ __('store.product_detail.no_review_text') }}</p>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>

                        <!-- Display Average Rating -->
                        <div class="average-rating">
                            

                            <div class="review-rating">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= floor($product->reviews_avg_rating))
                                        <span style="color: gold">★</span>
                                    @elseif($i == ceil($product->reviews_avg_rating) && ($product->reviews_avg_rating - floor($product->reviews_avg_rating)) >= 0.5)
                                        <span style="color: gold">★</span>
                                    @else
                                        <span style="color: #ccc">★</span>
                                    @endif
                                @endfor
                                {{ number_format($product->reviews_avg_rating, 1) }} <span>{{ __('store.product_detail.average_rating') }}</span>
                            </div>
                        </div>
                @endif
                </div> <!-- End div.product-detail-customer-review -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


@endsection

@section('js')
    <script>
    $(document).ready(function() {
        $('#test-heart').on('click', function() {
            var button = $(this);          
            var icon = button.find('i');   
            var productId = {{ $product->id }}; 
            $.ajax({
                url: '{{ route("customer.wishlist.toggle") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId
                },
                success: function(response) {
                    if(response.status === 'added') {
                        icon.removeClass('fa-regular text-secondary')
                            .addClass('fa-solid text-danger');
                        toastr.success(response.message || 'Added to favorites ❤️');
                    } else if(response.status === 'removed') {
                        icon.removeClass('fa-solid text-danger')
                            .addClass('fa-regular text-secondary');
                        toastr.info(response.message || 'Removed from favorites 💔');
                    }
                },
                error: function(xhr) {
                    if(xhr.status === 401){
                        toastr.warning('{{ __('store.product_detail.login_to_wishlist') }}');
                    } else {
                        toastr.error('Something went wrong.');
                    }
                }
            });
        });
    });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('#starWrapper .star');
        const ratingInput = document.getElementById('rating-value');

        stars.forEach(star => {
            star.addEventListener('mouseover', function () {
                const val = parseInt(this.dataset.value);
                stars.forEach(s => {
                    s.style.color = (parseInt(s.dataset.value) <= val) ? 'gold' : '#ccc';
                });
            });

            star.addEventListener('mouseout', function () {
                const currentRating = parseInt(ratingInput.value) || 0;
                stars.forEach(s => {
                    s.style.color = (parseInt(s.dataset.value) <= currentRating) ? 'gold' : '#ccc';
                });
            });

            star.addEventListener('click', function () {
                const val = parseInt(this.dataset.value);
                ratingInput.value = val;
                stars.forEach(s => {
                    s.style.color = (parseInt(s.dataset.value) <= val) ? 'gold' : '#ccc';
                });
            });
        });
    });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>  
    <script>
    @if(Session::has('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if(Session::has('error'))
        toastr.error("{{ session('error') }}");
    @endif
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>  
    <script>
        $(document).ready(function() {
            $('.product-slider').slick({
                arrows: true,
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev">←</button>',
                nextArrow: '<button type="button" class="slick-next">→</button>',
            });
        });
    </script>

 
    <script>
        const variantMap = @json($variantMap);
    </script>
    <script>    

    $(document).ready(function () {
        const productId = {{ $product->id }};

        function getSelectedAttributeValueIds() {
            let selected = [];
            $('#product-attributes input[type="radio"]:checked').each(function () {
                selected.push(parseInt($(this).val()));
            });
            return selected.sort((a, b) => a - b);
        }

        function findMatchingVariantId(selectedAttrIds) {
            for (const variant of variantMap) {
                const variantAttrIds = variant.attributes.slice().sort((a, b) => a - b);
                if (JSON.stringify(variantAttrIds) === JSON.stringify(selectedAttrIds)) {
                    return variant.id;
                }
            }
            return null;
        }

        $('input[type="radio"]').on('change', function () {
            const selectedAttrIds = getSelectedAttributeValueIds();
            const variantId = findMatchingVariantId(selectedAttrIds);

            if (!variantId) {
                alert('Selected variant not available.');
                return;
            }

            $.ajax({
                url: '/get-variant-price',
                type: 'GET',
                data: {
                    variant_id: variantId,
                    product_id: productId
                },
                success: function (response) {
                    if (response.success) {
                        $('#variant-price').text(response.price);
                        $('#product-stock').text(response.stock);
                        $('#currency-symbol').text(response.currency_symbol);

                        if (response.is_out_of_stock) {
                            $('#product-stock').addClass('text-danger');
                        } else {
                            $('#product-stock').removeClass('text-danger');
                        }
                    } else {
                        console.log('Unable to fetch variant price.');
                    }
                },
                error: function () {
                    alert('Something went wrong. Please try again.');
                }
            });
        });

        // Trigger change on load to set default variant
        $('input[type="radio"]:checked').trigger('change');
    });

    </script>

    <script>
        function changeQty(amount) {
            let qtyInput = document.getElementById("qty");
            let currentQty = parseInt(qtyInput.value);
            let newQty = currentQty + amount;

            if (newQty < 1) newQty = 1;
            qtyInput.value = newQty;
        }

        function addToCart(productId, product_type) {
            const quantity = parseInt(document.getElementById("qty").value);
            const attributeInputs = document.querySelectorAll('#product-attributes input[type="radio"]:checked');

            let selectedAttributes = [];
            attributeInputs.forEach(input => {
                selectedAttributes.push(parseInt(input.value));
            });

            fetch("{{ route('cart.add') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: quantity,
                    attribute_value_ids: selectedAttributes,
                    product_type: product_type
                })
            })
            .then(response => response.json())
            .then(data => {
                toastr.success(data.message);
                updateCartCount(data.cart);
            })
            .catch(error => console.error("Error:", error));
        }


        function getSelectedVariantId(attributes) {
            // Custom logic to determine the variant ID based on selected attributes (size, color)
            // This is a simplified version. In practice, you'd likely query the backend to determine the exact variant ID
            // based on these attributes.
            return null; // For now, assuming no variant is selected directly
        }

        function updateCartCount(cart) {
            let totalCount = Object.values(cart).reduce((sum, item) => sum + item.quantity, 0);
            document.getElementById("cart-count").textContent = totalCount;
        }
    </script>
@endsection
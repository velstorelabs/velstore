@extends('themes.xylo.layouts.master')

@section('title', $category->translation->name)

@section('content')
<div class="container py-4">

    {{-- Breadcrumbs --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('xylo.home') }}">Home</a></li>
            @foreach($breadcrumbs as $crumb)
                <li class="breadcrumb-item">
                    <a href="{{ route('category.show', $crumb->slug) }}">{{ $crumb->translation->name }}</a>
                </li>
            @endforeach
        </ol>
    </nav>

    <h2 class="mb-3">{{ $category->translation->name }}</h2>

    {{-- Filters --}}
    <form method="GET" class="mb-4 d-flex gap-2">
        <input type="number" name="min_price" class="form-control" placeholder="Min Price" value="{{ request('min_price') }}">
        <input type="number" name="max_price" class="form-control" placeholder="Max Price" value="{{ request('max_price') }}">
        <select name="sort" class="form-select">
            <option value="">Sort By</option>
            <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest</option>
            <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price: Low to High</option>
            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price: High to Low</option>
            <option value="rating" {{ request('sort') == 'rating' ? 'selected' : '' }}>Top Rated</option>
        </select>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    {{-- Products --}}
    <div class="row">
        @forelse ($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <div class="product-img">
                        <a href="{{ route('product.show', $product->slug) }}">
                            <img src="{{ Storage::url(optional($product->thumbnail)->image_url ?? 'default.jpg') }}"
                                 alt="{{ $product->translation->name ?? 'Product Name' }}">
                        </a>
                        <button class="wishlist-btn" data-product-id="{{ $product->id }}">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                    </div>
                    <div class="product-info mt-4">
                        <div class="top-info">
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i> ({{ $product->reviews_count }} Reviews)
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
                                        {{ activeCurrency()->symbol }}{{ optional($product->primaryVariant)->converted_price ?? 'N/A' }}
                                    </span>

                                    @if(optional($product->primaryVariant)->converted_discount_price)
                                        <span class="discount">
                                            {{ activeCurrency()->symbol }}{{ $product->primaryVariant->converted_discount_price }}
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
        @empty
            <p>No products found in this category.</p>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection

@section('js')
<script>
    // Add to Cart
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
            toastr.success(data.message || "Added to cart successfully!");
            updateCartCount(data.cart);
        })
        .catch(error => console.error("Error:", error));
    }

    function updateCartCount(cart) {
        let totalCount = Object.values(cart).reduce((sum, item) => sum + item.quantity, 0);
        document.getElementById("cart-count").textContent = totalCount;
    }

    // Wishlist
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
                .catch(error => console.error('Error:', error));
            });
        });
    });
</script>
@endsection

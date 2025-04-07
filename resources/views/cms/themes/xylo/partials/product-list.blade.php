@foreach($products as $product)
<div class="col-6 col-md-4">
    <div class="product-card">
        <div class="product-img">
            <img src="{{ Storage::url(optional($product->thumbnail)->image_url ?? 'default.jpg') }}" 
                 alt="{{ $product->translation->title ?? 'Product Name Not Available' }}">
            <button class="wishlist-btn"><i class="fa-solid fa-heart"></i></button>
        </div>
        <div class="product-info mt-4">
            <div class="top-info">
                <div class="reviews"><i class="fa-solid fa-star"></i> (11.6k Reviews)</div>
            </div>
            <div class="bottom-info">
                <div class="left">
                    <h3><a href="{{ route('product.show', $product->slug) }}" 
                           class="product-title">{{ $product->translation->name ?? 'Product Name Not Available' }}</a></h3>
                    <p class="price">${{ $product->price }} <span class="sold-out">Sold Out 85%</span></p>
                </div>
                <button class="cart-btn" onclick="addToCart({{ $product->id }})"><i class="fa fa-shopping-bag"></i></button>
            </div>
        </div>
    </div>
</div>
@endforeach

@extends('themes.xylo.layouts.master')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> 
@endsection
@section('content')
    @php $currency = activeCurrency(); 
    @endphp
    <section class="products-home py-5 mb-5 main-shop">
    <div class="container">
        <div class="row">
            <aside class="col-md-3 d-none d-lg-inline">
                <div class="sidebar" id="filterSidebar">
                    <h5 class="mb-3">Brands</h5>
                    @foreach($brands as $brand)
                    <div class="form-check">
                        <input class="form-check-input filter-input" type="checkbox" name="brand[]" value="{{ $brand->id }}">
                        <label class="form-check-label">{{ $brand->translation->title ?? $brand->slug }}</label>
                    </div>
                    @endforeach

                    <h5 class="mb-3">Categories</h5>
                    @foreach($categories as $category)
                    <div class="form-check">
                        <input class="form-check-input filter-input" type="checkbox" name="category[]" value="{{ $category->id }}">
                        <label class="form-check-label">{{ $category->translation->title ?? $category->slug }}</label>
                    </div>
                    @endforeach

                    <h5 class="mt-4">Price</h5>
                    <div class="price-filter">
                        <p id="priceRange" class="text-center">$<span id="minPriceText">0</span> - $<span id="maxPriceText">1000</span></p>
                        <div class="range-slider">
                            <input type="range" name="price_min" id="minPrice" min="0" max="1000" value="0" step="10">
                            <input type="range" name="price_max" id="maxPrice" min="0" max="1000" value="1000" step="10">
                        </div>
                    </div>

                    <h5 class="mt-4">Color</h5>
                    @foreach(['Red', 'Black'] as $color)
                    <div class="form-check">
                        <input class="form-check-input filter-input" type="checkbox" name="color[]" value="{{ strtolower($color) }}">
                        <label class="form-check-label">{{ $color }}</label>
                    </div>
                    @endforeach
                    
                    <h5 class="mt-4">Size</h5>
                    @foreach(['M' => 'Medium', 'L' => 'Large'] as $key => $size)
                    <div class="form-check">
                        <input class="form-check-input filter-input" type="checkbox" name="size[]" value="{{ $key }}">
                        <label class="form-check-label">{{ $size }}</label>
                    </div>
                    @endforeach
                </div>
            </aside>
            <div class="col-md-9">
                <div class="row" id="productList">
                    @include('themes.xylo.partials.product-list')
                </div>
                <div class="paginations d-flex justify-content-center align-items-center mt-5">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
document.querySelectorAll('.filter-input').forEach(input => {
    input.addEventListener('change', function() {
        let url = new URL("{{ route('shop.index') }}", window.location.origin);
        let params = new URLSearchParams();

        document.querySelectorAll('.filter-input:checked').forEach(checked => {
            params.append(checked.name, checked.value);
        });

        url.search = params.toString();

        fetch(url, {
            method: 'GET',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById('productList').innerHTML = html;
        });
    });
});

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

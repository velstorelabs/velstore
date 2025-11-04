@extends('themes.xylo.layouts.master')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> 
@endsection
@section('content')
    @php $currency = activeCurrency(); @endphp
    <section class="products-home py-5 mb-5 main-shop">
    <div class="container">
        <div class="row">
            <aside class="col-md-3 d-none d-lg-inline">
                <div class="sidebar" id="filterSidebar">
                    <h5 class="mb-3">{{ __('store.shop.brands') }}</h5>
                    @foreach($brands as $brand)
                    <div class="form-check mb-3">
                        <input class="form-check-input filter-input" type="checkbox" name="brand[]" value="{{ $brand->id }}">
                        <label class="form-check-label">
                            {{ mb_convert_case($brand->translation->name ?? $brand->slug, MB_CASE_TITLE, "UTF-8") }}
                        </label>
                        <span class="text-muted">({{ $brand->products_count }})</span>
                    </div>
                    @endforeach

                    <h5 class="mb-3">{{ __('store.shop.categories') }}</h5>
                    @foreach($categories as $category)
                    <div class="form-check mb-3">
                        <input class="form-check-input filter-input" type="checkbox" name="category[]" value="{{ $category->id }}">
                        <label class="form-check-label">
                            {{ mb_convert_case($category->translation->name ?? $category->slug, MB_CASE_TITLE, "UTF-8") }}
                        </label>
                        <span class="text-muted">({{ $category->products_count }})</span>
                    </div>
                    @endforeach
                    
                    <h5>{{ __('store.shop.price') }}</h5>
                    <div class="price-filter mb-3">
                        <p id="priceRange" class="text-center">{{ $currency->symbol }}<span id="minPriceText">0</span> - {{ $currency->symbol }}<span id="maxPriceText">1000</span></p>
                        <div class="range-slider">
                            <input type="range" name="price_min" id="minPrice" min="0" max="1000" value="0" step="10">
                            <input type="range" name="price_max" id="maxPrice" min="0" max="1000" value="1000" step="10">
                        </div>
                    </div>

                    <h5 class="mb-3">{{ __('store.shop.colors') }}</h5>
                    @foreach(['red', 'black'] as $color)
                    <div class="form-check mb-3">
                        <input class="form-check-input filter-input" type="checkbox" name="color[]" value="{{ strtolower($color) }}">
                        <label class="form-check-label">{{ __('store.shop.' . strtolower($color)) }}</label>
                    </div>
                    @endforeach

                    <h5 class="mt-4">{{ __('store.shop.size') }}</h5>
                    @foreach(['M' => 'M', 'L' => 'L'] as $key => $size)
                    <div class="form-check">
                        <input class="form-check-input filter-input" type="checkbox" name="size[]" value="{{ $key }}">
                        <label class="form-check-label">{{ __('store.shop.' . $key) }}</label>
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
    const minSlider = document.getElementById('minPrice');
    const maxSlider = document.getElementById('maxPrice');
    const minPriceText = document.getElementById('minPriceText');
    const maxPriceText = document.getElementById('maxPriceText');

    function updatePriceDisplay() {
        let minVal = parseInt(minSlider.value);
        let maxVal = parseInt(maxSlider.value);

        if (minVal > maxVal) {
            [minVal, maxVal] = [maxVal, minVal];
        }

        minPriceText.textContent = minVal;
        maxPriceText.textContent = maxVal;

        // Trigger the filter request after price changes
        sendFilterRequest();
    }

    minSlider.addEventListener('input', updatePriceDisplay);
    maxSlider.addEventListener('input', updatePriceDisplay);

    // Function to send filters including price
    function sendFilterRequest() {
        let url = new URL("{{ route('shop.index') }}", window.location.origin);
        let params = new URLSearchParams();

        // Include all checked filter inputs
        document.querySelectorAll('.filter-input:checked').forEach(checked => {
            params.append(checked.name, checked.value);
        });

        // Include price range
        let minVal = parseInt(minSlider.value);
        let maxVal = parseInt(maxSlider.value);

        if (minVal > maxVal) {
            [minVal, maxVal] = [maxVal, minVal];
        }

        params.append('price_min', minVal);
        params.append('price_max', maxVal);

        url.search = params.toString();

        fetch(url, {
            method: 'GET',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById('productList').innerHTML = html;
        });
    }

    // Trigger filter when other inputs change
    document.querySelectorAll('.filter-input').forEach(input => {
        input.addEventListener('change', sendFilterRequest);
    });

    // Optional: Initial load
    updatePriceDisplay();
</script>


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

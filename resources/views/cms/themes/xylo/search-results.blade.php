@extends('themes.xylo.layouts.master')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> 
@endsection
@section('content')
    <div class="container">
        <h2>Search Results for "{{ $query }}"</h2>

        @if($products->count() > 0)
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ Storage::url(optional($product->thumbnail)->image_url ?? 'default-thumbnail.jpg') }}" class="card-img-top" alt="{{ $product->translations->first()->name ?? 'Product' }}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ url('/product/' . $product->slug) }}">
                                        {{ $product->translations->first()->name ?? 'No Name' }}
                                    </a>
                                </h5>
                                <p class="card-text">{{ Str::limit($product->translations->first()->description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $products->links() }} <!-- Pagination Links -->
        @else
            <p>No products found.</p>
        @endif
    </div>
@endsection
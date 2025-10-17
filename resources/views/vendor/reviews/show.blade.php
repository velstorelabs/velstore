@extends('vendor.layouts.master')

@section('content')
<div class="container">
    <div class="card mt-4 shadow-sm border-0">
        <div class="card-header card-header-bg text-white">
            <h6 class="mb-0">{{ __('cms.product_reviews.review_details') }}</h6>
        </div>
    </div>

    <div class="card mt-3 shadow-sm border-0">
        <div class="card-body">
            <p><strong>{{ __('cms.product_reviews.customer_name') }}:</strong> 
                {{ optional($review->customer)->name ?? 'Guest' }}
            </p>

            <p><strong>{{ __('cms.product_reviews.product_name') }}:</strong> 
                @php
                    $lang = app()->getLocale();
                    $translation = $review->product?->translations?->firstWhere('language_code', $lang);
                @endphp
                {{ $translation?->name ?? $review->product?->translations?->first()?->name ?? 'N/A' }}
            </p>

            <p><strong>{{ __('cms.product_reviews.rating') }}:</strong> {{ $review->rating }} / 5</p>

            <p><strong>{{ __('cms.product_reviews.review') }}:</strong> {{ $review->review ?? '—' }}</p>

            <p><strong>{{ __('cms.product_reviews.status') }}:</strong> 
                @if($review->status == 1)
                    <span class="badge bg-success">Approved</span>
                @else
                    <span class="badge bg-warning text-dark">Pending</span>
                @endif
            </p>

            <a href="{{ route('vendor.reviews.index') }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left me-1"></i> {{ __('cms.product_reviews.back_button') }}
            </a>
        </div>
    </div>
</div>
@endsection

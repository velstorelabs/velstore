@extends('vendor.layouts.master')

@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white">
            <h6>Review Details</h6>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <p><strong>Customer:</strong> {{ optional($review->customer)->first_name ?? 'Guest' }} {{ optional($review->customer)->last_name ?? '' }}</p>
            <p><strong>Product:</strong> {{ optional($review->product)->translations->firstWhere('language_code', app()->getLocale())->name ?? optional($review->product)->translations->first()->name ?? 'N/A' }}</p>
            <p><strong>Rating:</strong> {{ $review->rating }} / 5</p>
            <p><strong>Review:</strong> {{ $review->review }}</p>
            <p><strong>Status:</strong> 
                @if($review->status == 1)
                    <span class="badge bg-success">Approved</span>
                @else
                    <span class="badge bg-warning">Pending</span>
                @endif
            </p>

            <a href="{{ route('vendor.reviews.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection

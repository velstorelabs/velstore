@extends('cms.admin.layouts.admin')

@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white">
            <h6>Review Details</h6>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <p><strong>Customer:</strong> {{ $review->customer->first_name }} {{ $review->customer->last_name }}</p>
            <p><strong>Product:</strong> {{ $review->product->title }}</p>
            <p><strong>Rating:</strong> {{ $review->rating }} / 5</p>
            <p><strong>Review:</strong> {{ $review->review }}</p>
            <p><strong>Status:</strong> 
                @if($review->is_approved)
                    <span class="badge bg-success">Approved</span>
                @else
                    <span class="badge bg-warning">Pending</span>
                @endif
            </p>

            <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection

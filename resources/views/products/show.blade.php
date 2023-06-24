@extends('layouts.app')

@section('main')

<div class="row">
    <h5><i class="bi bi-journal-text"></i> Product Details</h5>

    <nav class="my-3">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">View Product</li>
        </ul>
    </nav>
    <hr>

    <div class="card py-2">
        <img src="/products/{{ $product->image }}" alt="Product" class="card-img-top" />

        <div class="card-body">
            <h5 class="card-title fw-bold">{{ $product->name }}</h5>

            <p class="card-text">
                {{ $product->description }}
            </p>

            <p class="fw-bold">M.R.P <small class="text-danger text-decoration-line-through">Rs.{{ $product->mrp
                    }}</small></p>
            <p class="fw-bold">Selling Price <small class="text-success">Rs.{{ $product->price }}</small></p>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')

<h2 class="mt-5 text-center">Latest Products</h2>

<!-- Krijimi i rreshtit të kartave dhe karouselit -->
<div class="row mt-2 g-4">
    <!-- Krijimi i kartave -->
    <div class="col-md-6">
        <div class="row row-cols-1 row-cols-md-2">
            @foreach ($latestProducts as $product)
                <div class="col mt-4">
                    <div class="card d-flex justify-content-between">
                        <img src="{{ asset('storage/products/'.$product->image) }}" class="card-img-top object-fit-contain" alt="{{ $product->image }}"  style="width:100%;">
                        <div class="card-body d-flex flex-column justify-content-between " style="height: 110px;">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Price: {{ $product->price }} $</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Krijimi i karouselit në mes -->
    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center border-start">
        <div class="mb-5 text-warning text-uppercase">
            <h2 class="display-4 fw-bold text-center">Cyber Week! Up to 50% Sales!</h2>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide w-75">
            <div class="carousel-indicators">
                @foreach ($latestProducts as $index => $product)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>

            <div class="carousel-inner">
                @foreach ($latestProducts as $index => $product)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/products/'.$product->image) }}" alt="{{ $product->image }}" style="max-height: 550px;" class="d-block w-100">
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="mt-5 text-info text-uppercase">
            <h2 class="display-4 fw-bold text-center">Big savings on the latest products!</h2>
        </div>
    </div>
</div>

<!-- Butoni për më shumë produkte -->
<div class="d-flex justify-content-center my-4">
    <a href="{{ route('shop') }}" class="btn btn-outline-primary btn-lg">More Products</a>
</div>

@endsection

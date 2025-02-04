@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
            <img src="{{ asset('storage/products/'.$product->image) }}" alt="Product Image" class="w-100">
            </div>
            <div class="col-md-7">
                <h2>{{ $product->name }}</h2>
                
                <p class="lead">Price: ${{ $product->price }}</p>
                <form method="POST" action="{{ route('cart.add', $product->id) }}">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="input-group mb-3 flex-1 gap-5 ">
                        <input type="number" name="qty" class="form-control rounded" value="1" min="1">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Add to Cart</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


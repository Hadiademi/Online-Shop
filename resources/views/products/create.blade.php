@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
<h1 class="mt-5 mb-2 mx-auto text-light">Create Product</h1>
<a href="{{route('products.index')}}" class="btn btn-sm btn-outline-primary">Back</a>
</div>
@if(Session::get('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
{{(Session::get('error'))}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-2 w-50 my-0 mx-auto">
    @csrf
        <div class="form-group">
            <label for="name" class="mb-1 text-light">Name</label>
            <input type="text" name="name" id ="name" class="form-control bg-dark border-black text-light shadow-lg"/>
        </div>

        <div class="form-group">
            <label for="qty" class="mb-1 text-light">Qty</label>
            <input type="number" name="qty" id ="qty" class="form-control bg-dark border-black text-light shadow-lg"/>
        </div>

        <div class="form-group">
            <label for="price" class="mb-1 text-light">Price</label>
            <input type="text" name="price" id ="price" class="form-control bg-dark border-black text-light shadow-lg"/>
        </div>
        <div class="form-group">
            <label for="image" class="mb-1 text-light">Name</label>
            <input type="file" name="image" id ="image" class="form-control bg-dark border-black text-light shadow-lg"/>
        </div>
      

        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-lg mt-3 btn-outline-secondary text-light w-auto" >Submit</button>
        </div>
    
</form>

@endsection

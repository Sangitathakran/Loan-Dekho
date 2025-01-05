@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="alert alert-secondary mx-4" role="alert">
    </div>
    
    <a href="{{ route('products.index') }}">
        <button class="btn btn-outline-primary btn-sm mb-0">Back</button>
    </a>

    <div class="row">
    <div class="col-lg-9 col-12 mx-auto">
        <div class="card card-body mt-4">
        <h6 class="mb-0">New Products</h6>
        <p class="text-sm mb-0">{{ isset($product) ? 'Edit' : 'Create' }} Products</p>
        <hr class="horizontal dark my-3">
        <form action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif
                
                @if($errors->any())
                    <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-text text-white">
                        {{$errors->first()}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                @endif
                @if(session('success'))
                    <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                        <span class="alert-text text-white">
                        {{ session('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                @endif

                <label for="ProductsName" class="form-label">Products Name</label>
                <input type="text" class="form-control" id="ProductsName" onfocus="focused(this)" onfocusout="defocused(this)" name="name" value="{{ old('name', $product->name ?? '') }}" required>
            
                <label for="brand" class="form-label">Brand Name</label>
                <input type="text" class="form-control" id="brand" onfocus="focused(this)" onfocusout="defocused(this)" name="brand" value="{{ old('brand', $product->brand ?? '') }}" required>
            
                <label for="model" class="form-label">Model Name</label>
                <input type="text" class="form-control" id="model" onfocus="focused(this)" onfocusout="defocused(this)" name="model" value="{{ old('model', $product->model ?? '') }}" required>
            
                <label class="mt-4">Products Description</label>
                <textarea class="form-control" name="description" rows="5" onfocus="focused(this)" onfocusout="defocused(this)" required>{{ old('description', $product->description ?? '') }}</textarea>

                <div class="row">
                    <div class="col-6">
                        <label class="form-label">Price</label>
                        <input class="form-control" type="number" name="price" value="{{ old('price', $product->price ?? '') }}" step="0.01" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Discount</label>
                        <input class="form-control" type="number" name="discount" value="{{ old('discount', $product->discount ?? '') }}" step="0.01" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>

                <label class="mt-4 form-label">Image</label>
                <div class="form-control dropzone dz-clickable">                
                <input type="file" class="form-control" name="image" id="image" onfocus="focused(this)" onfocusout="defocused(this)">
                @if(isset($product) && $product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="100">
                @endif
                </div>
                
                <label class="mt-4 form-label">Video Link:</label>
                <input class="form-control" type="url" name="video_link" value="{{ old('video_link', $product->video_link ?? '') }}">
                
                <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('products.index') }}">
                    <button type="button" name="button" class="btn btn-light m-0">Cancel</button>
                </a>
                    <button type="submit" name="button" class="btn btn-primary m-0 ms-2">{{ isset($product) ? 'Update' : 'Create' }}</button>
                </div>
                
            </form>
        </div>
    </div>
    </div>      
    
</div> 
 
@endsection

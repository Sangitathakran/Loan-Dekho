@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="alert alert-secondary mx-4" role="alert">
      
    </div>

    <div class="row">
    <div class="col-lg-9 col-12 mx-auto">
        <div class="card card-body mt-4">
        <h6 class="mb-0">New Products</h6>
        <p class="text-sm mb-0">Create new Products</p>
        <hr class="horizontal dark my-3">
            <form action="/user-profile" method="POST" role="form text-left">
                @csrf
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
                <input type="text" class="form-control" id="ProductsName" onfocus="focused(this)" onfocusout="defocused(this)">
            
                <label class="mt-4">Products Description</label>
                <p class="form-text text-muted text-xs ms-1">
                    This is how others will learn about the Products, so make it good!
                </p>
            
                <!-- Create the editor container -->
                <div class="ql-toolbar ql-snow" id="editor">
                    <p>Hello World!</p>
                    <p><br /></p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label class="form-label">Start Date</label>
                        <input class="form-control datetimepicker flatpickr-input" type="text" placeholder="Please select start date" data-input="" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                    <div class="col-6">
                        <label class="form-label">End Date</label>
                        <input class="form-control datetimepicker flatpickr-input" type="text" placeholder="Please select end date" data-input="" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>

                <label class="mt-4 form-label">Image</label>
                <div class="form-control dropzone dz-clickable">
                
                    <input type="file" class="form-control" name="image" id="image" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button type="button" name="button" class="btn btn-light m-0">Cancel</button>
                    <button type="submit" name="button" class="btn btn-primary m-0 ms-2">{{ 'Save' }}</button>
                </div>
                
            </form>
        </div>
    </div>
    </div>      
    
</div> 
 
@endsection

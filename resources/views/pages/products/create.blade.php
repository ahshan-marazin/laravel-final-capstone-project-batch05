@extends('layouts.layout')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Add Products</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="products.html">Product</a></li>
                        <li class="breadcrumb-item active">Add Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Product Information <span><a href="javascript:;"><i
                                                class="feather-more-vertical"></i></a></span></h5>
                            </div>

                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Product Name <span class="login-danger">*</span></label>
                                    <input class="form-control" name="name" type="text"
                                        placeholder="Enter Product Name">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Cost Price <span class="login-danger">*</span></label>
                                    <input class="form-control" name="cost_price" type="text"
                                        placeholder="Enter Cost Price">
                                    @error('cost_price')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Selling Price <span class="login-danger">*</span></label>
                                    <input class="form-control" name="selling_price" type="text"
                                        placeholder="Enter Selling Price">
                                    @error('selling_price')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Category <span class="login-danger">*</span></label>

                            
                                    <select class="form-control select" name="category_id">
                                        <option>Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                     @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Brand <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="brand_id">
                                        <option>Select Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                     @error('brand_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Description <span class="login-danger"></span></label>
                                    <input class="form-control" name="description" type="text"
                                        placeholder="Enter Description">
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-4">
                                <div class="form-group students-up-files">
                                    <label>Upload Product Photo (150px X 150px)</label>
                                    <div class="uplod">
                                        <label class="file-upload image-upbtn mb-0">
                                            Choose File <input type="file" name="image">
                                        </label>
                                        
                                        @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('layouts.layout')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Edit Customer</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="customers.html">Customer</a></li>
                        <li class="breadcrumb-item active">Edit Customer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Customer Information <span><a href="javascript:;"><i
                                                class="feather-more-vertical"></i></a></span></h5>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Name <span class="login-danger">*</span></label>
                                    <input class="form-control" name="name" type="text" placeholder="Enter Name" value="{{ old('name', $customer->name) }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Contact Email <span class="login-danger">*</span></label>
                                    <input class="form-control" name="contact_email" type="email" placeholder="Enter Contact Email" value="{{ old('contact_email', $customer->contact_email) }}">
                                    @error('contact_email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Contact Phone <span class="login-danger">*</span></label>
                                    <input class="form-control" name="contact_phone" type="text" placeholder="Enter Contact Phone" value="{{ old('contact_phone', $customer->contact_phone) }}">
                                    @error('contact_phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Address <span class="login-danger">*</span></label>
                                    <input class="form-control" name="address" type="text" placeholder="Enter Address" value="{{ old('address', $customer->address) }}">
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
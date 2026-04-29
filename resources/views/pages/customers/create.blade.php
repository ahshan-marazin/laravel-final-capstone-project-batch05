@extends('layouts.layout')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Add Customer</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="customers.html">Customer</a></li>
                        <li class="breadcrumb-item active">Add Customer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <form action="{{ route('customers.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Customer Information <span><a href="javascript:;"><i
                                                class="feather-more-vertical"></i></a></span></h5>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Name <span class="login-danger">*</span></label>
                                    <input class="form-control" name="name" type="text" placeholder="Enter Name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Contact Email <span class="login-danger">*</span></label>
                                    <input class="form-control" name="contact_email" type="email"
                                        placeholder="Enter Contact Email">
                                    @error('contact_email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Contact Phone <span class="login-danger">*</span></label>
                                    <input class="form-control" name="contact_phone" type="text"
                                        placeholder="Enter Contact Phone">
                                    @error('contact_phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Address <span class="login-danger">*</span></label>
                                    <input class="form-control" name="address" type="text"
                                        placeholder="Enter Address">
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
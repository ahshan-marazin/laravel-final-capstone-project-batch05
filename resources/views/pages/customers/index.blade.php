@extends('layouts.layout')

@section('content')

@if (session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif

<div class="content container-fluid">

  <div class="page-header">
    <div class="row">
      <div class="col">
        <h3 class="page-title">Data Tables</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('customers.create') }}">Customer</a></li>
          <li class="breadcrumb-item active">Data Tables</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-2">Default Datatable</h5>
            <a href="{{ route('customers.create') }}" class="btn btn-sm btn-primary float-right">Add Customer</a>
          </p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="datatable table table-stripped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Contact Email</th>
                  <th>Contact Phone</th>
                  <th>Address</th>
                  <th>Actions</th>
                </tr>
              </thead>

        
              <tbody>

             @foreach ($customers as $customer)
                <tr>
                  <td>{{ $customer->id }}</td>
                  <td>{{ $customer->name }}</td>
                  <td>{{ $customer->contact_email }}</td>
                  <td>{{ $customer->contact_phone }}</td>
                  <td>{{ $customer->address }}</td>
                  <td>
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display: inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
             
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
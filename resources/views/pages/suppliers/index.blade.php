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
          <li class="breadcrumb-item"><a href="{{ route('suppliers.create') }}">Supplier</a></li>
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
            <a href="{{ route('suppliers.create') }}" class="btn btn-sm btn-primary float-right">Add Supplier</a>
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

             @foreach ($suppliers as $supplier)
                <tr>
                  <td>{{ $supplier->id }}</td>
                  <td>{{ $supplier->name }}</td>
                  <td>{{ $supplier->contact_email }}</td>
                  <td>{{ $supplier->contact_phone }}</td>
                  <td>{{ $supplier->address }}</td>
                  <td>
                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" style="display: inline;">
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
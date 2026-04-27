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
          <li class="breadcrumb-item"><a href="{{ route('products.create') }}">Product</a></li>
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
            <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">Add Product</a>
          </p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="datatable table table-stripped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Image</th>
                  <th>SKU</th>
                  <th>Name</th>
                  <th>Cost Price</th>
                  <th>Selling Price</th>
                  <th>Category</th>
                  <th>Brand</th>
                  <th>Description</th>
                  <th>Actions</th>
                </tr>
              </thead>

        
              <tbody>

             @foreach ($products as $product)
                <tr>
                  <td>{{ $product->id }}</td>
                  <td>
                    <img
                      src="{{ $product->image ? asset('storage/' . $product->image) : asset('assets/img/no-product.svg') }}" alt="{{ $product->name }}"width="50">
                  </td>
                  <td>{{ $product->sku }}</td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->cost_price }}</td>
                  <td>{{ $product->selling_price }}</td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->category->name }}</td>
                  <td>{{ $product->brand->name }}</td>
                  <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
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
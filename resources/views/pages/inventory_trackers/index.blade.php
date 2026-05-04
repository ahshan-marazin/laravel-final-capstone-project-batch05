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
          <li class="breadcrumb-item active">Current Stock Levels</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-2">Current Stock Levels</h5>
          </p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="datatable table table-stripped">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Current Stock</th>
                </tr>
              </thead>

        
              <tbody>

             @foreach ($totalStockByProducts as $item)
                <tr>
                  <td>{{ $item->product->name }}</td>
                  <td>{{ $item->total_quantity }}</td>
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
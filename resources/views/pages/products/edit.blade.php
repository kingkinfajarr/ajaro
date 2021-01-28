@extends('layouts.admin')

@section('heading')
    <h1>Edit Products</h1>
@endsection

@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>    
    @endif

    <div class="card shadow">
      <div class="div card-body">
        <form action="{{ route('products.update', $item->id) }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $item->name }}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $item->description }}">
          </div>
          <div class="form-group">
            <label for="purchase_price">Purchase Price</label>
            <input type="text" class="form-control" name="purchase_price" placeholder="Purchase Price" value="{{ $item->purchase_price }}">
          </div>
          <div class="form-group">
            <label for="sale_price">Sale Price</label>
            <input type="text" class="form-control" name="sale_price" placeholder="Sale Price" value="{{ $item->sale_price }}">
          </div>
          <div class="form-group">
            <label for="stock">Stock</label>
            <input type="text" class="form-control" name="stock" placeholder="Stock" value="{{ $item->stock }}">
          </div>
          <div class="form-group">
            <label for="category_id">Category ID</label>
            <input type="text" class="form-control" name="category_id" placeholder="Category ID" value="{{ $item->category_id }}">
          </div>
          <button type="submit" class="btn btn-primary btn-block" method="post">
            Ubah
          </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
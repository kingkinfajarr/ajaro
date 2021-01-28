@extends('layouts.admin')

@section('heading')
    <h1>Products</h1>
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-left mb-4 ml-2">
        <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add Products
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" width="100%" callspacing="0">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Description</th>
                <th>Purchase Price</th>
                <th>Sale Price</th>
                <th>Stock</th>
                <th>Category_ID</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description}}</td>
                    <td>${{ $item->purchase_price}}</td>
                    <td>${{ $item->sale_price}}</td>
                    <td>{{ $item->stock }}</td>
                    <td>{{ $item->categories->id}}</td>
                    <td>
                        <a href="{{ route('products.edit', $item->id) }}" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                        </a>
                        
                        <form action="{{ route('products.destroy', $item->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                        </form>
                    </td>
                    </tr>
                @empty
                    <td>Data Kosong</td>
                @endforelse
            </tbody>
        </table>
        </div>
    </div>
    </div>
@endsection
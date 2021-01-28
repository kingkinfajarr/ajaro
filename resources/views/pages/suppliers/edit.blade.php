@extends('layouts.admin')

@section('heading')
    <h1>Edit Suppliers</h1>
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
        <form action="{{ route('suppliers.update', $item->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $item->name }}">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $item->email }}">
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $item->address }}">
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
@extends('layouts.admin')

@section('heading')
    <h1>Tambah Categories</h1>
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
        <form action="{{ route('categories.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
          </div>
          <button type="submit" class="btn btn-primary btn-block" method="post">
            Simpan
          </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
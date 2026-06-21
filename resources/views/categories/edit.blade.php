@extends('layouts.app')
@section('content')

<div class="card shadow-sm">
    <div class="card-body">
        <h3>
            <i class="fa fa-edit"></i>
            Edit Kategori
        </h3>
        <form action="/categories/{{$category->id}}" method="POST">
            @csrf
            @method('PUT')
            <label>Nama Kategori</label>
            <input class="form-control mb-3" name="name" value="{{$category->name}}">
            <button class="btn btn-success">Update</button>
            <a href="/categories" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection
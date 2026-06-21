@extends('layouts.app')
@section('content')

<div class="card shadow-sm">
    <div class="card-body">
        <h3>
            <i class="fa fa-edit"></i>
            Edit Supplier
        </h3>
        <form action="/suppliers/{{$supplier->id}}" method="POST">
            @csrf
            @method('PUT')
            <label>Nama Supplier</label>
            <input class="form-control mb-3" name="name" value="{{$supplier->name}}">
            <label>Nomor Telepon</label>
            <input class="form-control mb-3" name="phone" value="{{$supplier->phone}}">
            <label>Alamat</label>
            <textarea class="form-control mb-3" name="address">{{$supplier->address}}</textarea>
            <button class="btn btn-success">Update</button>
            <a href="/suppliers" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection
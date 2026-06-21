@extends('layouts.app')
@section('content')

<div class="card shadow-sm">
    <div class="card-body">
        <h3>Tambah Barang</h3>
        <form action="/products" method="POST">
            @csrf
            <label>Kode Barang</label>
            <input class="form-control mb-3" name="code">
            <label>Nama Barang</label>
            <input class="form-control mb-3" name="name">
            <label>Kategori</label>
            <select class="form-control mb-3" name="category_id">
                @foreach($categories as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
            <label>Supplier</label>
            <select class="form-control mb-3" name="supplier_id">
                @foreach($suppliers as $s)
                <option value="{{$s->id}}">
                    {{$s->name}}
                </option>
                @endforeach
            </select>
            <label>Harga</label>
            <input class="form-control mb-3" name="price">
            <label>Stock</label>
            <input class="form-control mb-3" name="stock">
            <label>Deskripsi</label>
            <textarea class="form-control mb-3" name="description"></textarea>
            <button class="btn btn-success">Simpan</button>
            <a href="/products" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection
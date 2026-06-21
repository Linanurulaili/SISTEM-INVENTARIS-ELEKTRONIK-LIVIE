@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between mb-4">
    <h3>
        <i class="fa fa-box"></i>
        Data Barang
    </h3>
    <a href="/products/create" class="btn btn-primary">
        + Tambah Barang
    </a>
</div>

<form action="/products" method="GET" class="d-flex mb-3">
    <input class="form-control me-2" name="search" value="{{request('search')}}" placeholder="Cari kode atau nama barang...">
    <button class="btn btn-primary">
        <i class="fa fa-search"></i>
        Cari
    </button>
</form>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Supplier</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $p)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$p->code}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->category->name}}</td>
                    <td>{{$p->supplier->name}}</td>
                    <td>Rp {{number_format($p->price)}}</td>
                    <td>
                        <span class="badge bg-success">{{$p->stock}}</span>
                    </td>
                    <td>
                        <a href="/products/{{$p->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/products/{{$p->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/products/{{$p->id}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
</div>

@endsection
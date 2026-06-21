@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between mb-4">
    <h3>
        <i class="fa fa-file"></i>
        Laporan Inventaris
    </h3>
    <button onclick="window.print()" class="btn btn-success">
        <i class="fa fa-print"></i>
        Cetak
    </button>
</div>

<form action="/reports" method="GET" class="d-flex mb-3">
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
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Supplier</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th>Dibuat</th>
                    <th>Diperbarui</th>
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
                    <td><span class="badge bg-success">{{$p->stock}}</span></td>
                    <td>{{$p->created_at->format('d-m-Y')}}</td>
                    <td>{{$p->updated_at->format('d-m-Y')}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@extends('layouts.app')
@section('content')

<div class="card shadow-sm">
    <div class="card-body">
        <h3>Detail Barang</h3>
        <p>
            Kode :
            <b>{{$product->code}}</b>
        </p>
        <p>
            Nama :
            <b>{{$product->name}}</b>
        </p>
        <p>
            Kategori :
            <b>{{$product->category->name}}</b>
        </p>
        <p>
            Supplier :
            <b>{{$product->supplier->name}}</b>
        </p>
        <p>
            Harga :
            <b>Rp {{number_format($product->price)}}</b>
        </p>
        <p>
            Stock :
            <b>{{$product->stock}}</b>
        </p>
        <p>
            Deskripsi :
            <b>{{$product->description}}</b>
        </p>
        <hr>
        <p>
            Dibuat :
            <b>{{$product->created_at->format('d-m-Y H:i')}}</b>
        </p>
        <p>
            Diperbarui :
            <b>{{$product->updated_at->format('d-m-Y H:i')}}</b>
        </p>
        <a href="/products" class="btn btn-secondary">Kembali</a>
    </div>
</div>

@endsection
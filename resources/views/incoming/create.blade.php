@extends('layouts.app')
@section('content')

<div class="card shadow-sm">
    <div class="card-body">
        <h3>
            <i class="fa fa-plus"></i>
            Tambah Barang Masuk
        </h3>
        <form action="/incoming" method="POST">
            @csrf
            <label>Pilih Barang</label>
            <select class="form-control mb-3" name="product_id">
                @foreach($products as $p)
                <option value="{{$p->id}}">
                    {{$p->name}}
                    (Stok {{$p->stock}})
                </option>
                @endforeach
            </select>
            <label>Jumlah Masuk</label>
            <input type="number" class="form-control mb-3" name="qty" placeholder="Jumlah barang">
            <label>Tanggal Masuk</label>
            <input type="date" class="form-control mb-3" name="date" value="{{date('Y-m-d')}}">
            <label>Keterangan</label>
            <textarea class="form-control mb-3" name="note" placeholder="Contoh: Pembelian supplier"></textarea>
            <button class="btn btn-success">Simpan</button>
            <a href="/incoming" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection
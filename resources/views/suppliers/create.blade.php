@extends('layouts.app')
@section('content')

<div class="card shadow-sm">
    <div class="card-body">
        <h3>
            <i class="fa fa-plus"></i>
            Tambah Supplier
        </h3>
        <form action="/suppliers" method="POST">
            @csrf
            <label>Nama Supplier</label>
            <input class="form-control mb-3" name="name" placeholder="Nama Supplier">
            <label>Nomor Telepon</label>
            <input class="form-control mb-3" name="phone" placeholder="08xxxx">
            <label>Alamat</label>
            <textarea class="form-control mb-3" name="address" placeholder="Alamat supplier"></textarea>
            <button class="btn btn-success">Simpan</button>
            <a href="/suppliers" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection
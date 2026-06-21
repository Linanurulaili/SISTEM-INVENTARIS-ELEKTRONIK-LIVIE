@extends('layouts.app')
@section('content')

<div class="card shadow-sm">
    <div class="card-body">
        <h3>Tambah Kategori</h3>
        <form action="/categories" method="POST">
            @csrf
            <label>Nama Kategori</label>
            <input class="form-control mb-3" name="name" placeholder="Contoh: Elektronik">
            <button class="btn btn-success">Simpan</button>
            <a href="/categories" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</div>

@endsection
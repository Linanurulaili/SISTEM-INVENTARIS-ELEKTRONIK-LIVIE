@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between mb-4">\
    <h3>
        <i class="fa fa-tags"></i>
        Kategori
    </h3>
    <a href="/categories/create" class="btn btn-primary">
        + Tambah Kategori
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $c)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$c->name}}</td>
                    <td>
                        <a href="/categories/{{$c->id}}/edit" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form action="/categories/{{$c->id}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
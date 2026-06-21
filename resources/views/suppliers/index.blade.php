@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-4">
    <h3>
        <i class="fa fa-truck"></i>
        Supplier
    </h3>
    <a href="/suppliers/create" class="btn btn-primary">
        + Tambah Supplier
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($suppliers as $s)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$s->name}}</td>
                    <td>{{$s->phone}}</td>
                    <td>{{$s->address}}</td>
                    <td>
                        <a href="/suppliers/{{$s->id}}/edit" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                            Edit
                        </a>
                        <form action="/suppliers/{{$s->id}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
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
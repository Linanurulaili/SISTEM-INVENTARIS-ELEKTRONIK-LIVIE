@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-4">
    <h3>
        <i class="fa fa-arrow-down"></i>
        Barang Masuk
    </h3>
    <a href="/incoming/create" class="btn btn-primary">
        + Tambah Barang Masuk
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Masuk</th>
                    <th>Keterangan</th>
                    <th>Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->product->name}}</td>
                    <td>
                        <span class="badge bg-success">{{$item->qty}}</span>
                    </td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->note ?? '-' }}</td>
                    <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
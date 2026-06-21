@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between mb-4">
    <h3>
        <i class="fa fa-arrow-up"></i>
        Barang Keluar
    </h3>
    <a href="/outgoing/create" class="btn btn-primary">
        + Tambah Barang Keluar
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Jumlah Keluar</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Dibuat</th>
                    <th>Diperbarui</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->product->name}}</td>
                    <td>
                        <span class="badge bg-danger">{{$item->qty}}</span>
                    </td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->note ?? '-'}}</td>
                    <td>{{$item->created_at->format('d-m-Y H:i')}}</td>
                    <td>{{$item->updated_at->format('d-m-Y H:i')}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
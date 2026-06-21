@extends('layouts.app')
@section('content')
<div class="row g-4">
    <div class="col-md-3">
        <div class="card-box bg-primary">
            <h5>
                Barang
            </h5>
            <h2>
                {{$totalProduct}}
            </h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card-box bg-success">
            <h5>
                Kategori
            </h5>
            <h2>
                {{$totalCategory}}
            </h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card-box bg-warning">
            <h5>
                Supplier
            </h5>
            <h2>
                {{$totalSupplier}}
            </h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card-box bg-danger">
            <h5>
                Total Stock
            </h5>
            <h2>
                {{$totalStock}}
            </h2>
        </div>
    </div>
</div>

<div class="card mt-5 shadow-sm">
    <div class="card-body">
        <h4>
            Barang Terbaru
        </h4>
        <table class="table">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Stock</th>
            </tr>
            @foreach($products as $p)
            <tr>
                <td>{{$p->code}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->stock}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
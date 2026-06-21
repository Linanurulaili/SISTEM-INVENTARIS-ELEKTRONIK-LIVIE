@extends('layouts.app')
@section('content')

<h1>
    Dashboard Inventaris
</h1>

<h3>
    Selamat datang {{ auth()->user()->name }}
</h3>

<div>
    <h2>
        Total Barang
    </h2>
    <p>
        0
    </p>
</div>

@endsection
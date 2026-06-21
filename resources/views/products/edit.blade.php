@extends('layouts.app')
@section('content')

<div class="card shadow-sm">
    <div class="card-body">
        <h3>Edit Barang</h3><form action="/products/{{$product->id}}" method="POST">
            @csrf
            @method('PUT')
            <label>Kode</label>
            <input class="form-control mb-3" name="code" value="{{$product->code}}">
            <label>Nama</label>
            <input class="form-control mb-3" name="name" value="{{$product->name}}">
            <label>Kategori</label>
            <select class="form-control mb-3" name="category_id">
                @foreach($categories as $c)
                <option value="{{$c->id}}" @if($c->
                    id==$product->category_id)
                    selected
                    @endif>
                    {{$c->name}}
                </option>
                @endforeach
            </select>
            <label>Supplier</label>
            <select class="form-control mb-3" name="supplier_id">
                @foreach($suppliers as $s)
                <option value="{{$s->id}}" @if($s->
                    id==$product->supplier_id)
                    selected
                    @endif>
                    {{$s->name}}
                </option>
                @endforeach
            </select>
            <label>Harga</label>
            <input class="form-control mb-3" name="price" value="{{$product->price}}">
            <label>Stock</label>
            <input class="form-control mb-3" name="stock" value="{{$product->stock}}">
            <label>Deskripsi</label>
            <textarea class="form-control mb-3" name="description"> 
                {{$product->description}}
            </textarea>
            <button class="btn btn-success">Update</button>
        </form>
    </div>
</div>

@endsection
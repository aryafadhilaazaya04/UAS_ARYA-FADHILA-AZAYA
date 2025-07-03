@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('components.sidebar')
        </div>
        <div class="col-md-9 main-content">
            <h1 class="mb-4">Detail Produk</h1>
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text"><strong>Deskripsi:</strong> {{ $product->description }}</p>
                    <p class="card-text"><strong>Harga:</strong> Rp{{ number_format($product->price, 2, ',', '.') }}</p>
                    <p class="card-text"><strong>Stok:</strong> {{ $product->stock }}</p>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

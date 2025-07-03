@extends('layouts.app')

@section('title', 'Produk')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('components.sidebar')
        </div>
        <div class="col-md-9 main-content">
            <h1 class="mb-4">Produk</h1>
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">List Produk</h5>
                    <table class="table table-hover align-middle mt-3">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Contoh Produk</td>
                                <td>Deskripsi A</td>
                                <td>Rp 100.000</td>
                                <td>50</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('components.sidebar')
        </div>
        <div class="col-md-9 main-content">
            <h1 class="mb-4">Dashboard</h1>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 w-100">
                        <div class="card-body">
                            <h5 class="card-title">Selamat datang!</h5>
                            <p class="card-text">Ini adalah dashboard Anda. Gunakan bilah sisi untuk menavigasi antara Dashboard dan Produk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

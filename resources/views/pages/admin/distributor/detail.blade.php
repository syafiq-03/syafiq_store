@extends('layouts.admin.main')
@section('title', 'Detail Distributor')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Distributor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.distributor.index') }}">Distributor</a></div>
                <div class="breadcrumb-item">Detail Distributor</div>
            </div>
        </div>
        <a href="{{ route('admin.distributor.index') }}" class="btn btn-icon icon-left btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="row mt-4">
            <div class="col-12 col-md-6 col-lg-12 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Nama:</strong> {{ $distributor->nama_distributor }}</h5>
                        <p class="card-text"><strong>Lokasi:</strong> {{ $distributor->lokasi }}</p>
                        <p class="card-text"><strong>Kontak:</strong> {{ $distributor->kontak }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ $distributor->email }}</p>
                        <hr>
                        <p class="card-text"><strong>Detail Tambahan:</strong> Informasi tambahan distributor jika ada.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

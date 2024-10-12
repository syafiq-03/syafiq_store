@extends('layouts.admin.main')

@section('title', 'Detail Flash Sale')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Flash Sale</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.flash_sale.index') }}">Flash Sale</a></div>
                <div class="breadcrumb-item">Detail Flash Sale</div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>{{ $flashSale->name }}</h4>
            </div>
            <div class="card-body">
                <p><strong>Waktu Mulai:</strong> {{ $flashSale->start_time }}</p>
                <p><strong>Waktu Selesai:</strong> {{ $flashSale->end_time }}</p>
                <hr>
                <h5>Produk dalam Flash Sale</h5>
                <ul>
                    @foreach($flashSale->product as $product)
                        <li>{{ $product->name }} - Diskon: {{ $product->pivot->discount_price }}%</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</div>
@endsection

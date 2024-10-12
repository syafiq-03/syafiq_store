@extends('layouts.admin.main')

@section('title', 'Create Flash Sale')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Buat Flash Sale</h1>
        </div>
        <div class="section-body">
            <form action="{{ route('admin.flash_sale.store') }}" method="POST">
                @csrf
                <!-- Field untuk nama Flash Sale -->
                <div class="form-group">
                    <label for="name">Nama Flash Sale</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                
                <!-- Field untuk tanggal mulai -->
                <div class="form-group">
                    <label for="start_time">Waktu Mulai</label>
                    <input type="datetime-local" name="start_time" class="form-control" required>
                </div>

                <!-- Field untuk tanggal berakhir -->
                <div class="form-group">
                    <label for="end_time">Waktu Selesai</label>
                    <input type="datetime-local" name="end_time" class="form-control" required>
                </div>

                <!-- Form untuk memilih produk -->
                <div class="form-group">
                    <label for="product">Pilih Produk</label>
                    <select name="product_id" class="form-control" required>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Field untuk diskon -->
                <div class="form-group">
                    <label for="discount">Diskon (%)</label>
                    <input type="number" name="discount" class="form-control" min="0" max="100" required>
                </div>

                <!-- Tombol Simpan -->
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
</div>
@endsection

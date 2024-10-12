@extends('layouts.admin.main')

@section('title', 'Flash Sale')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Flash Sale</h1>
        </div>
        <div class="section-body">
            <a href="{{ route('admin.flash_sale.create') }}" class="btn btn-icon icon-left btn-primary">
                <i class="fas fa-plus"></i> Tambah Flash Sale
            </a>

            <div class="card mt-3">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Produk</th>
                                <th>Diskon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($flashSales as $flashSale)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @foreach($flashSale->product as $product)
                                            {{ $product->name }} <br> <!-- Menampilkan nama produk -->
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($flashSale->product as $product)
                                            {{ $product->pivot->discount_price }}% <br> <!-- Menampilkan diskon dari pivot -->
                                        @endforeach
                                    </td>
                                    <td>
                                        <!-- Tombol Detail -->
                                        <a href="{{ route('admin.flash_sale.show', $flashSale->id) }}" class="btn btn-info">Detail</a>

                                        <!-- Tombol Edit -->
                                        <a href="{{ route('admin.flash_sale.edit', $flashSale->id) }}" class="btn btn-warning">Edit</a>
                                        
                                        <!-- Tombol Hapus menggunakan form -->
                                        <form action="{{ route('admin.flash_sale.delete', $flashSale->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus flash sale ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

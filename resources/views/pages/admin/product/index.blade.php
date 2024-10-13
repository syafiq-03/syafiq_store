@extends('layouts.admin.main') 
@section('title', 'Admin Product') 
@section('content') 
<div class="main-content"> 
    <section class="section"> 
        <div class="section-header"> 
            <h1>Produk</h1> 
            <div class="section-header-breadcrumb"> 
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Produk</div> 
            </div> 
        </div> 
<<<<<<< HEAD
        <a href="{{ route('product.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas 
fa-plus"></i> Produk</a> 

=======
        <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas 
fa-plus"></i> Produk</a> 
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
        <div class="card-body"> 
            <div class="table-responsive"> 
                <table class="table table-bordered table-md"> 
                    <tr> 
                        <th>#</th> 
                        <th>Nama Produk</th> 
                        <th>Harga Produk</th> 
<<<<<<< HEAD
                        <th>Action</th> 
                    </tr> 
                    @php 
                      $no = 0 
                    @endphp 
                    @forelse ($products as $item) 
                        <tr> 
                            <td>{{ $no += 1 }}</td> 
                            <td>{{ $item->name }}</td> 
                            <td>{{ $item->price }} Points</td> 
                            <td> 
                               <a href="{{ route('product.detail', $item->id) }}" class="badge badge-info">Detail</a> 
                               <a href="{{ route('product.edit', $item->id) }}" class="badge badge-warning"> Edit </a> 
                               <a href="{{ route('product.delete', $item->id) }}" class="badge badge-danger" data-confirm-delete="true"> Hapus </a> 
                            </td> 
                        </tr> 
                    @empty 
                        <td colspan="5" class="text-center">Data Produk Kosong</td> 
=======
                        <th>Stok</th> 
                        <th>Action</th> 
                    </tr> 
                    @php 
                        $no = 0 
                    @endphp 
                    @forelse ($products as $item) 
                        <tr> 
                            <td>{{ $item->name }}</td> 
                            <td>{{ $item->price }} Points</td> 
                            <td>{{ $item->stock }}</td> 
                            <td> 
          <a href="#" class="badge badge-info">Detail</a> 
          <a href="#" class="badge badge-warning"> Edit </a> 
          <a href="" class="badge badge-danger"> Hapus </a> 
                            </td> 
                        </tr> 
                    @empty 
              <td colspan="5" class="text-center">Data Produk Kosong</td> 
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
                    @endforelse 
                </table> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection
@extends('layouts.admin.main')
<<<<<<< HEAD
@section('title', 'Admin Dashboard')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Daftar Distributor</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row mb-4">
                    <div class="col">
                        <a href="{{ route('distributor.create') }}" class="btn btn-primary">Tambah Distributor</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>List Distributor</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Distributor</th>
                                            <th>Lokasi</th>
                                            <th>Kontak</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($distributors as $distributor)
                                            <tr>
                                                <td>{{ $distributor->nama_distributor }}</td>
                                                <td>{{ $distributor->lokasi }}</td>
                                                <td>{{ $distributor->kontak }}</td>
                                                <td>{{ $distributor->email }}</td>
                                                <td>
                                                    <a href="{{ route('distributor.show', $distributor->id) }}" class="btn btn-info">Detail</a>
                                                    <a href="{{ route('distributor.edit', $distributor->id) }}" class="btn btn-warning">Edit</a>
                                                    <button class="btn btn-danger" onclick="deleteDistributor({{ $distributor->id }})">Hapus</button>
                                                    
                                                    <!-- Form Hapus -->
                                                    <form id="delete-form-{{ $distributor->id }}" action="{{ route('distributor.destroy', $distributor->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- SweetAlert untuk Hapus -->
    <script>
        function deleteDistributor(id) {
            Swal.fire({
                title: 'Hapus Data!',
                text: "Apakah Anda yakin ingin menghapus distributor ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak, batalkan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

    <!-- SweetAlert untuk Flash Message -->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK',  // Ini memastikan tombol OK muncul
                timer: null,  // Jika Anda ingin tombol OK muncul tanpa timer, hapus pengaturan timer
                showConfirmButton: true  // Ini menampilkan tombol OK
            });
        </script>
    @endif
@endsection
=======
@section('title', 'Admin Distributor')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Distributor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Distributor</div>
            </div>
        </div>
        <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah Distributor</a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Distributor</th>
                            <th>Lokasi</th>
                            <th>Kontak</th>
                            <th>Email</th>
                            <th>Created_at</th>
                            <th>Update_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0
                        @endphp
                        @forelse ($distributors as $distributor)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $distributor->nama_distributor }}</td>
                                <td>{{ $distributor->lokasi }}</td>
                                <td>{{ $distributor->kontak }}</td>
                                <td>{{ $distributor->email }}</td>
                                <td>{{ $distributor->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $distributor->updated_at->format('d-m-Y H:i') }}</td>
                                <td>
                                    <a href="#" class="badge badge-info">Detail</a>
                                    <a href="#" class="badge badge-warning">Edit</a>
                                    <a href="#" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data Distributor Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Distributor;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Models\Distributor;
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d

class DistributorController extends Controller
{
    public function index()
    {
        $distributors = Distributor::all();
<<<<<<< HEAD
        return view('pages.admin.distributor.index', compact('distributors'));
    }

    // Menampilkan form untuk menambah distributor baru
    public function create()
    {
        return view('pages.admin.distributor.create');
    }

    // Menyimpan distributor baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_distributor' => 'required',
            'lokasi' => 'required',
            'kontak' => 'required',
            'email' => 'required|email',
        ]);

        Distributor::create($request->all());

        return redirect()->route('distributor.index')->with('success', 'Distributor berhasil ditambahkan');
    }

    // Menampilkan form untuk edit distributor
    public function edit($id)
    {
        $distributor = Distributor::findOrFail($id);
        return view('pages.admin.distributor.edit', compact('distributor'));
    }

    // Mengupdate data distributor
    public function update(Request $request, $id)
    {
        $distributor = Distributor::findOrFail($id);

        $request->validate([
            'nama_distributor' => 'required',
            'lokasi' => 'required',
            'kontak' => 'required',
            'email' => 'required|email',
        ]);

        $distributor->update($request->all());

        return redirect()->route('distributor.index')->with('success', 'Distributor berhasil diupdate');
    }

    // Menghapus data distributor
    public function destroy($id)
    {
        $distributor = Distributor::findOrFail($id);
        $distributor->delete();

        return redirect()->route('distributor.index')->with('success', 'Distributor berhasil dihapus');
    }

    // Menampilkan detail distributor
    public function show($id)
    {
        $distributor = Distributor::findOrFail($id);
        return view('pages.admin.distributor.detail', compact('distributor'));
    }
}
=======
        
        return view('pages.admin.distributor.index', compact('distributors'));
    }
}
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d

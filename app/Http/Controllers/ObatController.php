<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
     // Tampilkan semua data obat
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }

    // Halaman tambah
    public function create()
    {
        return view('obat.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required',
            'stok_obat' => 'required|integer'
        ]);

        Obat::create($request->all());
        return redirect()->route('obat.index')->with('success', 'Data obat berhasil ditambahkan');
    }

    // Halaman edit
    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.edit', compact('obat'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_obat' => 'required',
            'stok_obat' => 'required|integer'
        ]);

        $obat = Obat::findOrFail($id);
        $obat->update($request->all());

        return redirect()->route('obat.index')->with('success', 'Data obat berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Data obat berhasil dihapus');
    }
}

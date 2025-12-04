<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    // Tampilkan semua dokter
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.index', compact('dokter'));
    }

    // Form tambah dokter
    public function create()
    {
        return view('dokter.create');
    }

    // Simpan dokter baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'jam_masuk' => 'required',
            'jam_pulang' => 'required',
        ]);

        Dokter::create($request->all());

        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil ditambahkan!');
    }

    // Form edit dokter
    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dokter.edit', compact('dokter'));
    }

    // Update dokter
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'jam_masuk' => 'required',
            'jam_pulang' => 'required',
        ]);

        $dokter = Dokter::findOrFail($id);
        $dokter->update($request->all());

        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil diupdate!');
    }

    // Hapus (soft delete)
    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil dihapus!');
    }
}

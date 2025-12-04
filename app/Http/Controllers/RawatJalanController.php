<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RawatJalan;
use App\Models\Pasien;
use App\Models\Dokter;

class RawatJalanController extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $rawat_jalan = RawatJalan::with(['pasien', 'dokter'])->get();
        return view('pendaftaran.index', compact('rawat_jalan'));
    }

    // Form create
    public function create()
    {
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        return view('pendaftaran.create', compact('pasien', 'dokter'));
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required|exists:pasien,id',
            'id_dokter' => 'required|exists:dokter,id',
            'keluhan' => 'required',
            'waktu_kunjungan' => 'required|date',
            'status_pemeriksaan' => 'required|in:Menunggu,Sedang Diperiksa,Selesai',
        ]);

        RawatJalan::create($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Form edit
    public function edit($id)
    {
        $rawat = RawatJalan::findOrFail($id);
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        return view('pendaftaran.edit', compact('rawat', 'pasien', 'dokter'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pasien' => 'required|exists:pasien,id',
            'id_dokter' => 'required|exists:dokter,id',
            'keluhan' => 'required',
            'waktu_kunjungan' => 'required|date',
            'status_pemeriksaan' => 'required|in:Menunggu,Sedang Diperiksa,Selesai',
        ]);

        $rawat = RawatJalan::findOrFail($id);
        $rawat->update($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil diupdate');
    }

    // Delete
    public function destroy($id)
    {
        $rawat = RawatJalan::findOrFail($id);
        $rawat->delete();

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil dihapus');
    }
}

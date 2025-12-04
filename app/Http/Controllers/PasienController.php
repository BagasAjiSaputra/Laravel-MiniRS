<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    // List Pasien
    public function index()
    {
        $pasien = Pasien::orderBy('created_at', 'desc')->get();
        return view('pasien.index', compact('pasien'));
    }


    // Tambah Form
    public function create()
    {
        return view('pasien.create');
    }


    // Tambah Pasien
    public function store(Request $request)
    {
        // Validasi Input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string',
            'no_hp' => 'nullable|string',
            'tgl_lahir' => 'nullable|date',
        ]);

        // Insert Data
        Pasien::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect()->back()->with('success', 'Pasien Ditambahkan !');
    }


    // Edit Pasien
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
    }


    // Update Pasien
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $pasien = Pasien::findOrFail($id);

        $pasien->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tgl_lahir' => $request->tgl_lahir
        ]);

        return redirect()->route('pasien.edit', $id)->with('success', 'Data pasien berhasil diperbarui!');
    }


    // Delete Pasien
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete(); // Soft delete

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil dihapus.');
    }

}

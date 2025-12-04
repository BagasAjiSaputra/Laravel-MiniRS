<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekamMedis;

class RekamMedisController extends Controller
{
    // TAMPILKAN SEMUA DATA
    public function index()
    {
        $data = RekamMedis::all();
        return view('rekam-medis.index', compact('data'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('rekam-medis.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'diagnosis' => 'required',
        ]);

        RekamMedis::create($request->all());

        return redirect()->route('rekam-medis.index')
                         ->with('success', 'Data rekam medis berhasil ditambahkan');
    }

    // FORM EDIT
    public function edit($id)
    {
        $item = RekamMedis::findOrFail($id);
        return view('rekam-medis.edit', compact('item'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $request->validate([
            'diagnosis' => 'required',
        ]);

        $item = RekamMedis::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('rekam-medis.index')
                         ->with('success', 'Data rekam medis berhasil diupdate');
    }

    // HAPUS DATA
    public function destroy($id)
    {
        RekamMedis::destroy($id);

        return redirect()->route('rekam-medis.index')
                         ->with('success', 'Data rekam medis berhasil dihapus');
    }
}

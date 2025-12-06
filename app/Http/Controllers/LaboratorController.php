<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_laborat = DB::table('pasien_rs')
            ->leftJoin('obat', 'pasien_rs.obat_id', '=', 'obat.id')
            ->select(
                'pasien_rs.id',
                'pasien_rs.nama',
                'pasien_rs.alamat',
                'pasien_rs.no_hp',
                'pasien_rs.tgl_lahir',
                'obat.nama_obat',
                'obat.stok_obat'
            )
            ->get();
        return view('laborat.laborator', compact('data_laborat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $obats = DB::table('obat')->get();
        return view('laborat.create', compact('obats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'nullable|string|max:255',
            'no_hp' => 'nullable|string|max:20',
            'tgl_lahir' => 'nullable|date',
            'obat_id' => 'nullable|exists:obat,id',
        ]);

        DB::table('pasien_rs')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tgl_lahir' => $request->tgl_lahir,
            'obat_id' => $request->obat_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('laborator.index')->with('success', 'Data pasien berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

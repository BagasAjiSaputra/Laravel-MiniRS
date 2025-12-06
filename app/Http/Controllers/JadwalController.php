<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index()
    {
        $data = DB::table('rawat_jalan')
            ->join('pasien', 'pasien.id', '=', 'rawat_jalan.id_pasien')
            ->join('dokter', 'dokter.id', '=', 'rawat_jalan.id_dokter')
            ->leftJoin('rekam_medis', 'rekam_medis.id', '=', 'rawat_jalan.id_rekam_medis')
            ->select(
                'rawat_jalan.*',
                'pasien.nama as nama',
                'dokter.nama_dokter as nama_dokter',
                'rekam_medis.diagnosis as diagnosis'
            )
            ->get();

        return view('jadwal.index', compact('data'));

    }
}

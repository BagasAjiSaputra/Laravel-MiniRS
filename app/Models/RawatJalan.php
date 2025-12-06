<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RawatJalan extends Model
{
    protected $table = 'rawat_jalan';

    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'keluhan',
        'waktu_kunjungan',
        'status_pemeriksaan',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }

    public function rekamMedis()
{
    return $this->belongsTo(RekamMedis::class, 'id_rekam_medis');
}
}

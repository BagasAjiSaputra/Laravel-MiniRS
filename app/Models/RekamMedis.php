<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RekamMedis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis';
    public $timestamps = false;

    protected $fillable = [
        'diagnosis',
        'tindakan',
        'resep_obat'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jabatan',
        'nik_sap',
        'person_grade',
        'tujuan_dinas',
        'keperluan_dinas',
        'berangkat_tanggal',
        'kembali_tanggal',
        'fasilitas_transport',
        'pelatihan',
        'rombongan',
    ];
}

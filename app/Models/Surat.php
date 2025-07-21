<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'nama_surat',
        'tanggal_surat',
        'pengirim',
        'perihal',
        'isi',
        'jenis_surat',
        'file_surat',
    ];
}

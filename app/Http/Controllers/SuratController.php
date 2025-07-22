<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    public function create()
    {
        return view('surat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'                  => 'required',
            'jabatan'               => 'required',
            'nik_sap'               => 'required',
            'person_grade'          => 'required',
            'tujuan_dinas'          => 'required',
            'keperluan_dinas'       => 'required',
            'berangkat_tanggal'     => 'required|date',
            'kembali_tanggal'       => 'required|date',
            'fasilitas_transport'   => 'required',
            'pelatihan'             => 'required',
            'rombongan'             => 'required',
        ]);

        // $file = null;
        // if ($request->hasFile('file_surat')) {
        //     $file = $request->file('file_surat')->store('surat', 'public');
        // }

        Surat::create([
            'nama'                   => $request->nama,
            'jabatan'                => $request->jabatan,
            'nik_sap'                => $request->nik_sap,
            'person_grade'           => $request->person_grade,
            'tujuan_dinas'           => $request->tujuan_dinas,
            'keperluan_dinas'        => $request->keperluan_dinas,
            'berangkat_tanggal'      => $request->berangkat_tanggal,
            'kembali_tanggal'        => $request->kembali_tanggal,
            'fasilitas_transport'    => $request->fasilitas_transport,
            'pelatihan'              => $request->pelatihan,
            'rombongan'              => $request->rombongan,
        ]);

        return redirect()->back()->with('success', 'Surat berhasil disimpan.');
    }
}

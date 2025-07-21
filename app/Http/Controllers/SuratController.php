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
            'nomor_surat'   => 'required',
            'nama_surat'    => 'required',
            'tanggal_surat' => 'required|date',
            'pengirim'      => 'required',
            'perihal'       => 'required',
            'isi'           => 'required',
            'jenis_surat'   => 'required|in:masuk,keluar',
            'file_surat'    => 'nullable|mimes:pdf|max:2048',
        ]);

        $file = null;
        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat')->store('surat', 'public');
        }

        Surat::create([
            'nomor_surat'   => $request->nomor_surat,
            'nama_surat'    => $request->nama_surat,
            'tanggal_surat' => $request->tanggal_surat,
            'pengirim'      => $request->pengirim,
            'perihal'       => $request->perihal,
            'isi'           => $request->isi,
            'jenis_surat'   => $request->jenis_surat,
            'file_surat'    => $file,
        ]);

        return redirect()->back()->with('success', 'Surat berhasil disimpan.');
    }
}

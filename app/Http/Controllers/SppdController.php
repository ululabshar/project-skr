<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;
use App\Models\Surat;
use Illuminate\Database\Eloquent\Model;

class SppdController extends Controller
{
    public function generate($id)
    {
        $sppd = Surat::findOrFail($id);

        // Kirim data ke view
        $data = [
            'nama' => $sppd->nama,
            'jabatan' => $sppd->jabatan,
            'nik_sap' => $sppd->nik_sap,
            'person_grade' => $sppd->person_grade,
            'tujuan_dinas' => $sppd->tujuan_dinas,
            'keperluan_dinas' => $sppd->keperluan_dinas,
            'berangkat_tanggal' => $sppd->berangkat_tanggal,
            'kembali_tanggal' => $sppd->kembali_tanggal,
            'fasilitas_transport' => $sppd->fasilitas_transport,
            'pelatihan' => $sppd->pelatihan,
            'rombongan' => $sppd->rombongan,
        ];

        $mpdf = new Mpdf([
            'format' => 'A4',
            'margin_top' => 0,
        ]);
        $html = view('format-surat.surat-jadi', $data)->render();
        $mpdf->WriteHTML($html);

        return response($mpdf->Output('SPPD-' . $sppd->nama . '.pdf', 'S'))
            ->header('Content-Type', 'application/pdf');
    }
    public function destroy($id)
{
    $sppd = Surat::findOrFail($id);
    $sppd->delete();

    return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus.');
}
}

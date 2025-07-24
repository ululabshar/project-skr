<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SPPD - Surat Perintah Perjalanan Dinas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11pt;
            line-height: 1;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: left;
            margin: 0;
            padding: 0;
        }

        .footer {
            text-align: left;
        }

        .header p {
            margin: 0;
            padding: 0;
            font-size: 10pt;
        }

        .judul {
            text-align: center;
            margin: 20px 0;
            font-weight: bold;
            text-decoration: underline;
        }

        table {
            width: 100%;
        }

        .checkbox {
            margin-left: 20px;
        }

        .ttd {
            text-align: right;
            margin-top: 5px;
        }

        .footer {
            position: absolute;
            bottom: 70px;
            left: 0;
            right: 0;
            font-size: 8pt;
        }

        .footer .akhlaq {
            color: #007bff;
            font-weight: bold;
        }

        .footer img {
            width: 90px;
        }

        .section {
            margin-top: 20px;
        }

        .checkbox {
            margin-left: 10px;
        }

        .akhlaq {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="header" style="margin-top: -30px;">
        <table width="100%">
            <tr>
                <td width="70%" style="font-size: 10pt;">
                    <p><b>REGIONAL 7</b></p>
                    <p>Alamat : Jl.Teuku Umar No.300, Bandar Lampung</p>
                    <p>Telp : 0721-702233 Email : skrh_reg7@ptpn1.co.id</p>
                </td>
                <td align="right" width="30%">
                    <img src="assets/img/logo-ptpn.png" width="140px">
                </td>
            </tr>
        </table>
    </div>

    <div class="judul">
        SURAT PERINTAH PERJALANAN DINAS
    </div>

    <div class="section">
        <p>Perintah Perjalanan Dinas ini diberikan kepada:</p>
        <table
            style="border-spacing: 0 3px; font-size: 11pt; border-collapse: collapse; table-layout: fixed; width: 100%;">
            <colgroup>
                <col style="width: 160px;">
                <col style="width: 10px;">
                <col>
            </colgroup>
            <tr valign="top">
                <td style="white-space: nowrap;">1. Nama</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $nama }}</td>
            </tr>
            <tr valign="top">
                <td style="white-space: nowrap;">2. Jabatan</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $jabatan }}</td>
            </tr>
            <tr valign="top">
                <td style="white-space: nowrap;">3. NIK Sap</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $nik_sap }}</td>
            </tr>
            <tr valign="top">
                <td style="white-space: nowrap;">4. Person Grade</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $person_grade }}</td>
            </tr>
            <tr valign="top">
                <td style="white-space: nowrap;">5. Tujuan Dinas</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $tujuan_dinas }}</td>
            </tr>
            <tr valign="top">
                <td style="white-space: nowrap;">6. Keperluan Dinas</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $keperluan_dinas }}</td>
            </tr>
            <tr valign="top">
                <td style="white-space: nowrap;">7. Berangkat Tanggal</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $berangkat_tanggal }}</td>
            </tr>
            <tr valign="top">
                <td style="white-space: nowrap;">8. Kembali Tanggal</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $kembali_tanggal }}</td>
            </tr>
            <tr valign="top">
                <td style="white-space: nowrap;">9. Fasilitas Transport</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $fasilitas_transport }}</td>
            </tr>
            <tr valign="top">
                <td style="white-space: nowrap;">10. Pelatihan</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $pelatihan }}</td>
            </tr>
            <tr valign="top">
                <td style="white-space: nowrap;">11. Rombongan</td>
                <td style="white-space: nowrap;">:</td>
                <td style="word-wrap: break-word;">{{ $rombongan }}</td>
            </tr>
        </table>
    </div>
    <div class="section" style="line-height: 1.5;">
        <p>
            Diharapkan pihak-pihak yang berkaitan dengan keperluan Dinas tersebut dapat memberikan bantuan
            yang berkenaan pelaksanaan tugas ini. Selain itu untuk keperluan administrasi perjalanan dinas kami
            memerlukan tandatangan, stempel instansi sebagai tanda bukti perusahaan dinas, dan keterangan
            penggunaan fasilitas kendaraan dinas dari instansi/perusahaan yang dikunjungi.
        </p>
    </div>

    <div style="line-height: 0.5;">
        <p>Tanda Tangan Instansi/Perusahaan yang dikunjungi</p>
        <p>Tanggal:</p>
        <p>Tanda Tangan dan Cap</p>
    </div>
    <table width="100%" style="margin-top: 100px;">
        <!-- Baris 1: Penyedia + TTD -->
        <tr valign="top">
            <td width="50%">
                <p><strong>Penyedia/Penggunaan Fasilitas Kendaraan Dinas</strong></p>
                <p>Dari Instansi/Perusahaan yang Dikunjungi (Checklist)</p>
                <p class="checkbox">- Jemput di Bandara/Stasiun</p>
                <p class="checkbox">- Operasional saat Hari Dinas</p>
                <p class="checkbox">- Antar ke Bandara/Stasiun</p>
            </td>
            <td width="50%" style="text-align: right;">
                <p>PT Perkebunan Nusantara I</p>
                <p>Kepala Bagian Sekretariat dan Hukum</p>
                <br><br><br><br>
                <p><b>Agus Faroni</b></p style="font-weight: bold;">
            </td>
        </tr>

        <!-- Baris 2: Footer kiri dan kanan -->
        <tr valign="top">
            <td width="50%" style="padding-top: 55px; font-size: 10pt;">
                <p><strong>PT PERKEBUNAN NUSANTARA I</strong><br>
                    Gedung Agro Plaza Lantai 11<br>
                    Jl. H. R. Rasuna Said Kav X2 – 1, Jakarta 12950<br>
                    Email: corcom@ptpn1.co.id</p>
            </td>
            <td width="50%" style="text-align: right; padding-top: 55px; font-size: 10pt;">
                <p class="akhlaq"><strong>AKHLAK</strong></p>
                <p>- Amanah, Kompeten, Harmonis,<br>
                    Loyal, Adaptif, Kolaboratif</p>
            </td>
        </tr>
    </table>

</body>

</html>
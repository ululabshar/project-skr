<x-app-layout>
<div class="container mt-4">
    <table class="table table-bordered table-striped" style="font-size: 11pt;">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tujuan Dinas</th>
                <th>Tanggal Berangkat</th>
                <th>Tanggal Kembali</th>
                <th>Rombongan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($surats as $p)
            <tr>
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $p->nama }}</td>
                <td class="border px-4 py-2">{{ $p->jabatan }}</td>
                <td class="border px-4 py-2">{{ $p->tujuan_dinas }}</td>
                <td class="border px-4 py-2">{{ $p->berangkat_tanggal }}</td>
                <td class="border px-4 py-2">{{ $p->kembali_tanggal }}</td>
                <td class="border px-4 py-2">{{ $p->rombongan }}</td>
                <td>
                    <!-- Tombol Cetak -->
                    <a href="{{ route('sppd.generate', ['id' => $p->id]) }}" target="_blank" class="btn btn-sm btn-primary">
                        <i class="fa-solid fa-print"></i>
                    </a>

                    <!-- Tombol Hapus: buka modal -->
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal{{ $p->id }}">
                        <i class="fa-solid fa-trash"></i>
                    </button>

                    <!-- Modal Konfirmasi Hapus -->
                    <div class="modal fade" id="hapusModal{{ $p->id }}" tabindex="-1" aria-labelledby="hapusModalLabel{{ $p->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title" id="hapusModalLabel{{ $p->id }}">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus data <strong>{{ $p->nama }}</strong>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('sppd.destroy', $p->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>

<x-app-layout>
    <div class="container-fluid px-4 mt-4">

        <!-- Form Pencarian -->
        <form action="{{ route('dashboard') }}" method="GET" class="mb-3">
            <div class="row g-2">
                <div class="col-md-6 col-lg-4">
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="form-control" placeholder="Cari nama, jabatan, atau tujuan...">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </div>
        </form>

        <!-- Tabel -->
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
                @forelse ($surats as $p)
                    <tr>
                        <td>{{ $loop->iteration + ($surats->currentPage() - 1) * $surats->perPage() }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->jabatan }}</td>
                        <td>{{ $p->tujuan_dinas }}</td>
                        <td>{{ $p->berangkat_tanggal }}</td>
                        <td>{{ $p->kembali_tanggal }}</td>
                        <td>{{ $p->rombongan }}</td>
                        <td>
                            <!-- Cetak -->
                            <a href="{{ route('sppd.generate', ['id' => $p->id]) }}" target="_blank"
                                class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-print"></i>
                            </a>

                            <!-- Hapus -->
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#hapusModal{{ $p->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <!-- Modal Hapus -->
                            <div class="modal fade" id="hapusModal{{ $p->id }}" tabindex="-1"
                                aria-labelledby="hapusModalLabel{{ $p->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger text-white">
                                            <h5 class="modal-title">Konfirmasi Hapus</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                aria-label="Tutup"></button>
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
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $surats->withQueryString()->onEachSide(1)->links('pagination::bootstrap-5') }}
        </div>
    </div>
</x-app-layout>

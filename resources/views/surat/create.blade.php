<div class="container">
    <h3>Form Input Surat</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="/surat/store" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nomor Surat</label>
            <input type="text" name="nomor_surat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama Surat</label>
            <input type="text" name="nama_surat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Surat</label>
            <input type="date" name="tanggal_surat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Pengirim / Penerima</label>
            <input type="text" name="pengirim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Perihal</label>
            <input type="text" name="perihal" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Isi Ringkas</label>
            <textarea name="isi" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label>Jenis Surat</label>
            <select name="jenis_surat" class="form-select" required>
                <option value="masuk">Surat Masuk</option>
                <option value="keluar">Surat Keluar</option>
            </select>
        </div>

        <div class="mb-3">
            <label>File Surat (PDF)</label>
            <input type="file" name="file_surat" class="form-control" accept=".pdf">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

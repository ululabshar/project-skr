@extends('layout.app') {{-- Make sure this extends your base layout file --}}

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container"> {{-- Custom class for styling the form box --}}
                <h3 class="mb-4 text-center">Surat Perintah Perjalanan Dinas</h3>

                {{-- Success message display --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="/surat/store" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama"
                               class="form-control @error('nama') is-invalid @enderror"
                               value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan"
                               class="form-control @error('jabatan') is-invalid @enderror"
                               value="{{ old('jabatan') }}" required>
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                     <div class="mb-3">
                        <label for="nik_sap" class="form-label">NIK SAP</label>
                        <input type="number" name="nik_sap" id="nik_sap"
                               class="form-control @error('nik_sap') is-invalid @enderror"
                               value="{{ old('nik_sap') }}" required>
                        @error('nik_sap')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                     <div class="mb-3">
                        <label for="person_grade" class="form-label">Person Grade</label>
                        <input type="text" name="person_grade" id="person_grade"
                               class="form-control @error('person_grade') is-invalid @enderror"
                               value="{{ old('person_grade') }}" required>
                        @error('person_grade')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tujuan_dinas" class="form-label">Tujuan Dinas</label>
                        <textarea name="tujuan_dinas" id="tujuan_dinas" rows="3"
                                  class="form-control @error('tujuan_dinas') is-invalid @enderror"
                                required>{{ old('tujuan_dinas') }}</textarea>
                        @error('tujuan_dinas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="keperluan_dinas" class="form-label">Keperluan Dinas</label>
                        <input type="text" name="keperluan_dinas" id="keperluan_dinas"
                               class="form-control @error('keperluan_dinas') is-invalid @enderror"
                               value="{{ old('keperluan_dinas') }}" required>
                        @error('keperluan_dinas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="berangkat_tanggal" class="form-label">Berangkat Tanggal</label>
                        <input type="date" name="berangkat_tanggal" id="berangkat_tanggal"
                               class="form-control @error('berangkat_tanggal') is-invalid @enderror"
                               value="{{ old('berangkat_tanggal') }}" required>
                        @error('berangkat_tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kembali_tanggal" class="form-label">Kembali Tanggal</label>
                        <input type="date" name="kembali_tanggal" id="kembali_tanggal"
                               class="form-control @error('kembali_tanggal') is-invalid @enderror"
                               value="{{ old('kembali_tanggal') }}" required>
                        @error('kembali_tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="fasilitas_transport" class="form-label">Fasilitas Transport</label>
                        <input type="text" name="fasilitas_transport" id="fasilitas_transport"
                               class="form-control @error('fasilitas_transport') is-invalid @enderror"
                               value="{{ old('fasilitas_transport') }}" required>
                        @error('fasilitas_transport')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pelatihan" class="form-label">Pelatihan</label>
                        <input type="text" name="pelatihan" id="pelatihan"
                               class="form-control @error('pelatihan') is-invalid @enderror"
                               value="{{ old('pelatihan') }}" required>
                        @error('pelatihan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="rombongan" class="form-label">Rombongan</label>
                        <input type="text" name="rombongan" id="rombongan"
                               class="form-control @error('rombongan') is-invalid @enderror"
                               value="{{ old('rombongan') }}" required>
                        @error('rombongan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- <div class="mb-3">
                        <label for="jenis_surat" class="form-label">Jenis Surat</label>
                        <select name="jenis_surat" id="jenis_surat"
                                class="form-select @error('jenis_surat') is-invalid @enderror" required>
                            <option value="">-- Pilih Jenis Surat --</option> {{-- Added a default disabled option --}}
                            <option value="masuk" {{ old('jenis_surat') == 'masuk' ? 'selected' : '' }}>Surat Masuk</option>
                            <option value="keluar" {{ old('jenis_surat') == 'keluar' ? 'selected' : '' }}>Surat Keluar</option>
                            {{-- Add more options as needed --}}
                        </select>
                        @error('jenis_surat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="file_surat" class="form-label">File Surat (PDF)</label>
                        <input type="file" name="file_surat" id="file_surat"
                               class="form-control @error('file_surat') is-invalid @enderror" accept=".pdf">
                        @error('file_surat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> -->

                    <div class="d-grid gap-2 mt-4"> {{-- Added mt-4 for top margin on button --}}
                        <button type="submit" class="btn btn-secondary btn-lg">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
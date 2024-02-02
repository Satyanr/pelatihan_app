@extends('layouts.admin')


@section('content')
    <div class="container my-3">
        <form action="{{ route('diklat.update', $diklat->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada yang salah input data<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row text-center">
                <div class="col">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Pilih Gambar</label>
                        <input class="form-control" type="file" id="formFile" name="cover">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Nama Diklat</label>
                        <input type="text" class="form-control" value="{{ $diklat->nama_diklat }}" name="nama_diklat" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Jumlah Sasaran</label>
                        <input type="text" class="form-control" value="{{ $diklat->jumlahsasaran }}" placeholder="400" name="jumlahsasaran" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Mulai</label>
                        <input type="date" class="form-control" value="{{ $diklat->tanggal_mulai }}" name="tanggal_mulai" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Selesai</label>
                        <input type="date" class="form-control" value="{{ $diklat->tanggal_selesai }}" name="tanggal_selesai" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Tempat</label>
                        <input type="text" class="form-control" value="{{ $diklat->tempat }}" name="tempat" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Progli</label>
                        <input type="text" class="form-control" value="{{ $diklat->progli }}" name="progli" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Kata Pengantar</label></div>
                    <textarea class="form-control" id="summernote" name="kata_pengantar" required>{{ $diklat->kata_pengantar }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Latar Belakang</label></div>
                    <textarea class="form-control" id="summernote2" name="latar_belakang" required>
                        {{ $diklat->latar_belakang }}
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Hasil Yang Diharapkan</label></div>
                    <textarea class="form-control" id="summernote3" name="hasil_diharapkan" required>
                        {{ $diklat->hasil_diharapkan }}
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Sasaran</label></div>
                    <textarea class="form-control" id="summernote4" name="sasaran" required>
                        {{ $diklat->sasaran }}
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Materi Pokok</label></div>
                    <textarea class="form-control" id="summernote5" name="materi_pokok" required>
                        {{ $diklat->materi_pokok }}
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Evaluasi</label></div>
                    <textarea class="form-control" id="summernote6" name="evaluasi" required>
                        {{ $diklat->evaluasi }}
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Sertifikat</label></div>
                    <textarea class="form-control" id="summernote7" name="sertifikat" required>
                        {{ $diklat->sertifikat }}
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Layanan Peserta</label></div>
                    <textarea class="form-control" id="summernote8" name="layanan_peserta" required>
                        {{ $diklat->layanan_peserta }}
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Tata Tertib Pelaksanaan</label></div>
                    <textarea class="form-control" id="summernote9" name="ttertib_pelaksanaan" required>
                        {{ $diklat->ttertib_pelaksanaan }}
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Keterangan</label></div>
                    <textarea class="form-control" id="summernote10" name="keterangan" required>
                        {{ $diklat->keterangan }}
                    </textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <a href="{{ route('mainmenu') }}" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="col d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $('#summernote2').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote3').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote4').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote5').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote6').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote7').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote8').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote9').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote10').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection

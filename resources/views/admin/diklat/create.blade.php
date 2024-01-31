@extends('layouts.admin')


@section('content')
    <div class="container my-3">
        <form action="{{ route('diklat.store') }}" method="POST">
            @csrf
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
                        <input type="text" class="form-control" name="nama_diklat">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Jumlah Sasaran</label>
                        <input type="text" class="form-control" placeholder="400" name="jumlahsasaran">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Periode</label>
                        <input type="text" class="form-control" placeholder=" 2 Juli - 10 Desember 2024" name="periode">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Tempat</label>
                        <input type="text" class="form-control" name="tempat">
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Kata Pengantar</label></div>
                    <textarea class="form-control" id="summernote" name="kata_pengantar"></textarea>
                </div>
            </div> --}}
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Latar Belakang</label></div>
                    <textarea class="form-control" id="summernote2" name="latar_belakang"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Hasil Yang Diharapkan</label></div>
                    <textarea class="form-control" id="summernote3" name="hasil_diharapkan"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Sasaran</label></div>
                    <textarea class="form-control" id="summernote4" name="sasaran"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Materi Pokok</label></div>
                    <textarea class="form-control" id="summernote5" name="materi_pokok"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Evaluasi</label></div>
                    <textarea class="form-control" id="summernote6" name="evaluasi"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Sertifikat</label></div>
                    <textarea class="form-control" id="summernote7" name="sertifikat"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Layanan Peserta</label></div>
                    <textarea class="form-control" id="summernote8" name="layanan_peserta"></textarea>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Tata Tertib Pelaksanaan</label></div>
                    <textarea class="form-control" id="summernote9" name="ttertib_pelaksanaan"></textarea>
                </div>
            </div> --}}
            <div class="row mt-3">
                <div class="col">
                    <a href="{{ route('mainmenu') }}" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="col d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
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
    </script>
@endsection

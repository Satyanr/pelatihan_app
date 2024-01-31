@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('suratpemanggilan.update', $surat->id) }}" method="post">
            @csrf
            <div class="row my-3">
                <div class="col-lg-1">
                    Nomor
                </div>
                <div class="col-md-auto">
                    :
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" value="{{ $surat->nomor_surat }}" name='nomor_surat'>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <div class="col-lg-3">
                        <input type="text" class="form-control"
                            value="{{ old('date', \Carbon\Carbon::now()->format('d M Y')) }}" name='tanggal'>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-1">
                    Lampiran
                </div>
                <div class="col-md-auto">
                    :
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" value="{{ $surat->lampiran }}" name='lampiran'>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-1">
                    Hal
                </div>
                <div class="col-md-auto">
                    :
                </div>
                <div class="col-6">
                    <textarea id="hal" name='hal'>{{ $surat->hal }}
                    </textarea>
                </div>
            </div>
            <div class="row my-3 pt-5">
                <div class="col">
                    <textarea id="summernote2" name='salampembuka'>
                        {!! $surat->salampembuka !!}
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <span>1. Pelaksanaan kegiatan</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <div class="row my-2">
                        <div class="col-lg-2">periode</div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <input type="text" class="form-control" value="{{ $surat->periode }}" name='periode'>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2">tempat pelatihan</div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <textarea class="form-control" aria-label="With textarea" name='tempatpelatihan'>{{ $surat->tempatpelatihan }}</textarea>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2"><i>Check in</i> dan Registrasi</div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <input type="text" class="form-control" value="{{ $surat->checkdanreg }}" name='checkdanreg'>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2">pembukaan</div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <input type="text" class="form-control" value="{{ $surat->pembukaan }}" name='pembukaan'>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2">penutupan</div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <input type="text" class="form-control" value="{{ $surat->penutupan }}" name='penutupan'>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2"><i>Check out</i></div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <input type="text" class="form-control" value="{{ $surat->checkout }}" name='checkout'>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span>2. Persyaratan Peserta</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote3" name='persyaratan'>
                            {{ $surat->persyaratan }}
                        </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span>3. Kehadiran Peserta</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote4" name='kehadiranpeserta'>
                        {{ $surat->kehadiranpeserta }}
                        </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span>4. Kelengkapan yang harus dibawa Peserta</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote5" name='kelengkapan'>
                        {{ $surat->kelengkapan }}
                        </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span>5. Pembiayaan</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote6" name='pembiayaan'>
                        {{ $surat->pembiayaan }}
                        </textarea>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote7" name='salampenutup'>
                        {{ $surat->salampenutup }}
                        </textarea>
                </div>
            </div>

            <div class="row mb-5 pb-5">
                <div class="col"></div>
                <div class="col">Plt.Kepala</div>
            </div>
            <div class="row mt-5 pt-4">
                <div class="col">
                    Tembusan :
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" value="{{ $surat->nama_kepala }}"
                                name='nama_kepala'>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <div class="row">
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{ $surat->tembusan }}" name='tembusan'>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-auto">NIP</div>
                        <div class="col-6">
                            <input type="text" class="form-control" value="{{ $surat->nip }}" name='nip'>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3 mt-5">
                <div class="col">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a class="btn btn-secondary"
                            href="{{ route('suratpemanggilanmenu', $surat->diklat->id) }}">Kembali</a>
                    </div>
                </div>
            </div>
        </form>

        <script>
            $('#hal').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 60,
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
        </script>
    </div>
@endsection

@extends('layouts.admin')

@push('css')
    <style>

    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row pt-2">
            <div class="col">
                <div class="card text-bg-dark">
                    <div style="height: 50vh; overflow: hidden; position: relative;">
                        @if ($diklat->image)
                            <img src="{{ asset('covers_diklat/' . $diklat->image) }}" class="img-fluid"
                                style="width: 100%; object-fit: cover; height: 100%;" alt="Diklat Image">
                        @else
                            <img src="{{ asset('asset/default/default_cover.jpg') }}" class="img-fluid"
                                style="width: 100%; object-fit: cover; height: 100%;" alt="Default Image">
                        @endif
                    </div>
                    <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.5);">
                        <h5 class="card-title">{{ $diklat->nama_diklat }}</h5>
                        <p class="card-text">
                        <div class="row mx-2">
                            <div class="col-auto my-2">
                                <i class="fa-solid fa-users"></i> {{ $diklat->jumlahsasaran }}
                            </div>
                            <div class="col-auto my-2">
                                <i class="fa-solid fa-calendar-days"></i> {{ $diklat->periode }}
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-sm my-3 p-3 mb-3 rounded-pill">
            <h6>
                <div class="row text-center">
                    <div class="col">
                        <div class="w-auto">
                            <a href="{{ route('suratpemanggilanmenu', $diklat->id) }}" style="text-decoration: none">
                                <i class="fa-solid fa-envelope"></i> <br>
                                <span>Surat Pemanggilan</span>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <a href="{{ route('panitiapengajar', $diklat->id) }}" style="text-decoration: none">
                            <i class="fa-solid fa-envelope"></i> <br>
                            <span>Usulan</span>
                        </a>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-people-group"></i> <br>
                        <span>Import Peserta</span>
                    </div>
                    <div class="col">
                        <a href="{{ route('lengkapidata', $diklat->id) }}" style="text-decoration: none">
                            <i class="fa-solid fa-book-open"></i> <br>
                            <span>Lengkapi Buku Panduan</span>
                        </a>
                    </div>
                </div>
            </h6>
        </div>
    </div>
    <div class="py-2 rounded-top-5 text-white"
        style="background-color: #2f5296; background-image: url(/asset/image/panduan_asset/1.png); background-size: 100%; background-repeat:repeat-x;">
        <div class="container">
            <div class="row my-5 text-center">
                <div class="col">
                    <h1>PANDUAN</h1>
                </div>
            </div>

            <div class="row my-5 justify-content-center">
                <div class="col-10">
                    <h3>DAFTAR ISI :</h3>
                    <h5>
                        <div class="row">
                            <div class="col-7">
                                <ol>
                                    <li>Kata Pengantar</li>
                                    <li>Latar Belakang</li>
                                    <li>Tujuan, Hasil yang Diharapkan</li>
                                    <li>Materi Pokok</li>
                                    <li>Pengajar Panitia</li>
                                </ol>
                            </div>
                            <div class="col">
                                <ol start="6">
                                    <li>Evaluasi</li>
                                    <li>Sertifikat, Layanan, Tata Tertib</li>
                                    <li>Jadwal</li>
                                    <li>Keterangan</li>
                                    <li>Peserta</li>
                                </ol>
                            </div>
                        </div>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row my-3 text-center">
            <div class="col">
                <h3>KATA PENGANTAR</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                @if ($diklat->kata_pengantar == null)
                    <div class="alert alert-danger" role="alert">
                        Kata Pengantar Belum Diisi
                    </div>
                @endif
                {!! $diklat->kata_pengantar !!}
            </div>
        </div>
        
        <div class="row my-3 text-center">
            <div class="col">
                <h3>LATAR BELAKANG</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                {!! $diklat->latar_belakang !!}
            </div>
        </div>
    </div>
    <div class="text-white text-center" style="background-color: #2f5296;">
        <div class="container text-center py-3">
            <div class="row my-3 text-center">
                <div class="col">
                    <h3>TUJUAN DAN HASIL YANG DIHARAPKAN</h3>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    {!! $diklat->hasil_diharapkan !!}
                </div>
            </div>
            <div class="row my-3 text-center">
                <div class="col">
                    <h3>MATERI POKOK</h3>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    {!! $diklat->materi_pokok !!}
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row my-3 text-center">
            <div class="col">
                <h3>PENGAJAR</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                {{-- {!! $diklat->latar_belakang !!} --}}
            </div>
        </div>
        <div class="row my-3 text-center">
            <div class="col">
                <h3>EVALUASI</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                {!! $diklat->evaluasi !!}
            </div>
        </div>
        <div class="row my-3 text-center">
            <div class="col">
                <h3>SERTIFIKAT DAN LAYANAN PESERTA</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                {!! $diklat->sertifikat !!}
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                {!! $diklat->layanan_peserta !!}
            </div>
        </div>
        <div class="row my-3 text-center">
            <div class="col">
                <h3>TATA TERTIB PELAKSANAAN</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                {!! $diklat->ttertib_pelaksanaan !!}
            </div>
        </div>
        <div class="row my-3 text-center">
            <div class="col">
                <h3>JADWAL</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                {{-- {!! $diklat->latar_belakang !!} --}}
            </div>
        </div>
        <div class="row my-3 text-center">
            <div class="col">
                <h3>KETERANGAN</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                {{-- {!! $diklat->latar_belakang !!} --}}
            </div>
        </div>
        <div class="row my-3 text-center">
            <div class="col">
                <h3>PESERTA</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                {{-- {!! $diklat->latar_belakang !!} --}}
            </div>
        </div>
    </div>
@endsection

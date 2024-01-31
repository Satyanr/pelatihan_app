@extends('layouts.admin')

@section('content')
    <div class="content mt-5 pt-2">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col">
                    @foreach ($surats as $surat)
                        <div class="row px-3">
                            <div class="col my-3">
                                <div class="card text-bg-primary mb-3 rounded-pill">
                                    <div class="card-body">
                                        <div class="row px-5">
                                            <div class="col">
                                                <a href="{{ route('msword', $surat->id) }}"
                                                    class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                                    <h5 class="card-title">{{ $surat->tanggal }}</h5>
                                                    <p class="card-text">{{ $surat->hal }}</p>
                                                </a>
                                            </div>
                                            <div class="col-1 text-center">
                                                <a href="{{ route('msword', $surat->id) }}"
                                                    class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                                    <h1 class="py-2"><i class="fa-solid fa-download"></i></h1>
                                                </a>
                                            </div>
                                            <div class="col-1 text-center">
                                                <a href="{{ route('suratpemanggilan.edit', $surat->id) }}"
                                                    class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                                    <h1 class="py-2"><i class="fa-solid fa-pen"></i></h1>
                                                </a>
                                            </div>
                                            <div class="col-1 text-center">
                                                <a href="{{ route('suratpemanggilan.delete', $surat->id) }}"
                                                    class="text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                                    <h1 class="py-2"><i class="fa-solid fa-trash"></i></h1>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-3">
                    <div class="shadow-sm my-3 p-3 mb-3 rounded-pill text-center ">
                        <div class="row">
                            <div class="col my-2">
                                <a href="{{ route('suratpemanggilan', $diklat->id) }}" class="btn btn-primary">
                                    Tambahkan</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col my-2">
                                <a href="{{ route('pelatihan', $diklat->id) }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

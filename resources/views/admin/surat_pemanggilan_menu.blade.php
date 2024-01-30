@extends('layouts.admin')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <div class="w-auto"><a href="{{ route('suratpemanggilan', $diklat->id) }}" style="text-decoration: none">
                        <i class="fa-solid fa-plus"></i>
                    </a></div>
            </div>
        </div>
        <div class="row">
            @foreach ($surats as $surat)
                <div class="col my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://th.bing.com/th/id/OIP.uw2P3OC6fGdkixzqji_XfAAAAA?pid=ImgDet&w=184&h=138&c=7"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="{{ route('pelatihan', $diklat->id) }}"
                                class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                <h5 class="card-title">{{ $surat->diklat->nama_diklat }}</h5>
                            </a>
                            <p class="card-text">
                            <div class="row mx-2">
                                {{-- <div class="col-auto my-2">
                                    <i class="fa-solid fa-users"></i> {{ $diklat->jumlahsasaran }}
                                </div>
                                <div class="col-auto my-2">
                                    <i class="fa-solid fa-calendar-days"></i> {{ $diklat->periode }}
                                </div> --}}
                                <a href="{{ route('msword', $surat->id) }}">
                                    <div class="col-auto my-2">
                                        <i class="fa-solid fa-file-word"></i> Download Word
                                    </div>
                                </a>
                                {{-- <div class="col-auto my-2">

                                </div>
                                <div class="col-auto my-2">

                                </div> --}}
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

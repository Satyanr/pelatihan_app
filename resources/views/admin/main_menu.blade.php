@extends('layouts.admin')


@section('content')
    <div class="container my-3">
        <div class="row border-bottom">
            <div class="col my-2">
                <a href="{{ route('diklat') }}" class="btn btn-success"> Tambahkan</a>
            </div>
        </div>
        <div class="row row-cols-3 text-center">
            @foreach ($diklats as $diklat)
                <div class="col my-3">
                    <div class="card" style="width: 18rem;">
                        <a href="{{ route('pelatihan', $diklat->id) }}"
                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                            <img src="https://th.bing.com/th/id/OIP.uw2P3OC6fGdkixzqji_XfAAAAA?pid=ImgDet&w=184&h=138&c=7"
                                class="card-img-top" alt="...">
                            <div class="card-body">
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
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

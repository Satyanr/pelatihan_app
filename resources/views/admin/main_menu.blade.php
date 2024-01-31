@extends('layouts.admin')

@push('css')
@endpush

@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col">
                <div class="row">

                </div>
                <div class="row row-cols-3 px-3">
                    @foreach ($diklats as $diklat)
                        <div class="col my-3">
                            <div class="card" style="width: 18rem;">
                                <a href="{{ route('pelatihan', $diklat->id) }}"
                                    class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                    <img src="https://th.bing.com/th/id/OIP.uw2P3OC6fGdkixzqji_XfAAAAA?pid=ImgDet&w=184&h=138&c=7"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{ $diklat->nama_diklat }}</h5>
                                        <p class="card-text">
                                        <div class="row mx-2">
                                            <div class="col my-2">
                                                <i class="fa-solid fa-users"></i> {{ $diklat->jumlahsasaran }}
                                            </div>
                                        </div>
                                        <div class="row mx-2">
                                            <div class="col my-2">
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
            <div class="col-3">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col my-2">
                                <a href="{{ route('diklat') }}" class="btn btn-primary"> Tambahkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush

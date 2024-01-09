@extends('layouts.admin')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card text-bg-dark">
                    <div style="height: 50vh; overflow: hidden;">
                        <img src="https://th.bing.com/th/id/OIP.uw2P3OC6fGdkixzqji_XfAAAAA?pid=ImgDet&w=184&h=138&c=7"
                            class="img-fluid" style="width: 100%; object-fit: cover; height: 100%;" alt="...">
                    </div>
                    <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.5);">
                        <h5 class="card-title">Upskilling dan Reskilling Guru Kejuruan Berstandar Industri bagi Guru SMK
                            Pusat Keunggulan (SMK PK) Tahun 2023.</h5>
                        <p class="card-text">
                        <div class="row mx-2">
                            <div class="col-auto my-2">
                                <i class="fa-solid fa-users"></i> 399
                            </div>
                            <div class="col-auto my-2">
                                <i class="fa-solid fa-calendar-days"></i> 2 Juli - 10 Desember 2024
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3 border-bottom">
            <div class="col">
                <div class="w-auto">
                    <a href="{{ route('suratpemanggilanmenu') }}" style="text-decoration: none">
                        <i class="fa-solid fa-envelope"></i> <br>
                        <span>Surat Pemanggilan</span>
                    </a>
                </div>
            </div>
            <div class="col">
                <i class="fa-solid fa-envelope"></i> <br>
                <span>Usulan</span>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    @endsection

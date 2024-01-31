<div>
    <nav class="navbar fixed-top navbar-expand-lg" style="background-color: #2F5296 ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('mainmenu') }}">
                <img src="/asset/image/brand.png" alt="Logo" width="36" height="36">
                <span class="text-white">
                    Diklat BBPPMPV BMTI
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <form role="search" class="w-50">
                    <input class="form-control me-2" style="background-color: #ffffff;" type="search"
                        placeholder="Cari Diklat" aria-label="Search" wire:model='searchdiklat' wire:input='resetPage'>
                </form>
            </div>
        </div>
    </nav>
    <div class="content mt-5 pt-2">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            @if ($this->searchdiklat != null)
                                <div class="shadow-sm my-3 p-3 mb-3 rounded-pill text-secondary">
                                    <h4 class="px-3">Anda Mencari: {{ $this->searchdiklat }}</h4>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row px-3">
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
                    <div class="shadow-sm my-3 p-3 mb-3 rounded-pill text-center ">
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
</div>

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
            <a href="javascript:void(0)"
                class="text-white link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                <div class="row">
                    <div class="col-1">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="col">
                        <h5>Login</h5>
                    </div>
                </div>
            </a>
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
                            <div class="col-auto m-3">
                                <div class="card h-100" style="width: 18rem;">
                                    <div class="d-grid d-md-flex p-2 position-absolute">
                                        <div class="btn-group dropend">
                                            <a href="javascript:void(0)"
                                                class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover dropdown-toggle text-bg-secondary rounded-5 bg-opacity-75"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <b class="ps-2 py-2 text-primary"><i class="fa-solid fa-info"></i></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route('diklat.edit', $diklat->id) }}"
                                                        class="dropdown-item"><i class="fa-solid fa-pencil"></i>
                                                        Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item text-danger"
                                                        wire:click="delete({{ $diklat->id }})"><i
                                                            class="fa-solid fa-trash"></i> Hapus</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a href="{{ route('pelatihan', $diklat->id) }}"
                                        class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                        @if ($diklat->image)
                                            <img src="{{ asset('covers_diklat/' . $diklat->image) }}"
                                                class="card-img-top"
                                                style="width: 100%;
                                                height: 200px;
                                                object-fit: cover;"
                                                alt="...">
                                        @else
                                            <img src="{{ asset('asset/default/default_cover.jpg') }}"
                                                class="card-img-top"
                                                style="width: 100%;
                                                height: 200px;
                                                object-fit: cover;"
                                                alt="...">
                                        @endif
                                        <div class="card-body">
                                            <div class="text-center pb-2">
                                                <i class="fa-solid fa-calendar-days"></i> {{ $diklat->tanggal_mulai }} -
                                                {{ $diklat->tanggal_selesai }}
                                            </div>
                                            <h5 class="card-title text-center">{{ $diklat->nama_diklat }}</h5>
                                            <p class="card-text">
                                            <div class="row mx-2">
                                                <div class="col my-2">
                                                    <i class="fa-solid fa-users"></i> {{ $diklat->jumlahsasaran }}
                                                </div>
                                            </div>
                                            <div class="row mx-2">
                                                <div class="col my-2">
                                                    <i class="fa-solid fa-hands-holding-circle"></i>
                                                    {{ $diklat->progli }}
                                                </div>
                                            </div>
                                            <div class="row mx-2">
                                                <div class="col my-2">
                                                    <i class="fa-solid fa-location-pin"></i> {{ $diklat->tempat }}
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            {{ $diklats->links('components.admin.pagination_custom') }}
                        </div>
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

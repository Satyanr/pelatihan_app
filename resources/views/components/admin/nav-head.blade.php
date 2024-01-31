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
            @if (request()->route()->getName() === 'mainmenu')
                <form role="search" class="w-50">
                    <input class="form-control me-2" style="background-color: #ffffff;" type="search"
                        placeholder="Cari Diklat" aria-label="Search" wire:model='searchdiklat' wire:input='resetPage'>
                </form>
            @else
                <a href="{{ route('mainmenu') }}" class="btn btn-outline-light me-2" type="button"
                    style="margin-left: auto;">
                    <i class="fas fa-home"></i>
                </a>
            @endif
        </div>
    </div>
</nav>

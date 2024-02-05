<div>
    <div class="container my-3 pt-5">
        <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <div class="row pb-5">
                <div class="col">
                    <h1 class="text-center">Tambahkan Panitia/Pengajar</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @if ($updateMode)
                        <form wire:submit.prevent="update()">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Panitia/Pengajar</label>
                                        <input type="text" class="form-control" placeholder="Nama"
                                            wire:input="searchResult" wire:model='nama'>
                                        @if ($showresult)
                                            <ul class="list-group">
                                                @if (!empty($panitialist))
                                                    @foreach ($panitialist as $name)
                                                        <a class="" href="javascript:void(0)">
                                                            <li class="list-group-item"
                                                                wire:click="pilihpanitia({{ $name->id }})">
                                                                {{ $name->nama }},
                                                                {{ $name->nip }},
                                                                {{ $name->unit_kerja }}
                                                            </li>
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">NIP</label>
                                        <input type="text" class="form-control" placeholder="12930XXXX"
                                            wire:model='nip'>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Unit Kerja</label>
                                        <input type="text" class="form-control" placeholder="Unit Kerja"
                                            wire:model='unit_kerja'>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <select class="form-select" aria-label="Default select example"
                                            wire:model='jenis'>
                                            <option value="" selected>Jenis</option>
                                            <option value="panitia">Panitia</option>
                                            <option value="pengajar">Pengajar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- @if ($this->jenis == 'pengajar') --}}
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Mata Diklat</label>
                                            <input type="text" class="form-control" wire:model='mata_diklat'
                                                placeholder="Mata Diklat">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Jam Pelajaran</label>
                                            <input type="text" class="form-control" wire:model='jam_pelajaran'
                                                placeholder="Jam Pelajaran">
                                        </div>
                                    </div>
                                </div>
                            {{-- @endif --}}

                            <div class="row py-3">
                                <div class="col">
                                    <a href="javascript:void(0)" wire:click="cancel()"
                                        class="btn btn-secondary">Batal</a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <form wire:submit.prevent="store()">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Panitia/Pengajar</label>
                                        <input type="text" class="form-control" placeholder="Nama"
                                            wire:input="searchResult" wire:model='nama'>
                                        @if ($showresult)
                                            <ul class="list-group">
                                                @if (!empty($panitialist))
                                                    @foreach ($panitialist as $name)
                                                        <a class="" href="javascript:void(0)">
                                                            <li class="list-group-item"
                                                                wire:click="pilihpanitia({{ $name->id }})">
                                                                {{ $name->nama }},
                                                                {{ $name->nip }},
                                                                {{ $name->unit_kerja }}
                                                            </li>
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">NIP</label>
                                        <input type="text" class="form-control" placeholder="12930XXXX"
                                            wire:model='nip'>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Unit Kerja</label>
                                        <input type="text" class="form-control" placeholder="Unit Kerja"
                                            wire:model='unit_kerja'>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <select class="form-select" aria-label="Default select example"
                                            wire:model='jenis' wire:change='pengajarMode()'>
                                            <option value="" selected>Jenis</option>
                                            <option value="panitia">Panitia</option>
                                            <option value="pengajar">Pengajar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- @if ($pengajarMode) --}}
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Mata Diklat</label>
                                            <input type="text" class="form-control" wire:model='mata_diklat'
                                                placeholder="Mata Diklat">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Jam Pelajaran</label>
                                            <input type="text" class="form-control" wire:model='jam_pelajaran'
                                                placeholder="Jam Pelajaran">
                                        </div>
                                    </div>
                                </div>
                            {{-- @endif --}}
                            <div class="row py-3">
                                <div class="col">
                                    <a href="{{ route('pelatihan', $this->diklat_id) }}"
                                        class="btn btn-secondary">Kembali</a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Usulkan</button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>

        <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <div class="row pb-5">
                <div class="col">
                    <h1 class="text-center">List Panita/Pengajar</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        <li class="list-group-item text-center">
                            <h3>Panitia</h3>
                        </li>
                        @foreach ($calons as $panitialistbawah)
                            @if ($panitialistbawah->jenis == 'panitia')
                                <li class="list-group-item d-flex justify-content-between align-items-center fs-5">
                                    {{ $panitialistbawah->panitiaPengajar->nama }}
                                    <span class="badge bg-warning rounded-pill">
                                        <a href="javascript:void(0)" wire:click='edit({{ $panitialistbawah->id }})'
                                            class="text-white"><i class="fa-solid fa-pencil pe-4"></i></a>
                                        <a href="javascript:void(0)" wire:click='delete({{ $panitialistbawah->id }})'
                                            class="text-white"><i class="fa-solid fa-trash"></i></a>
                                    </span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-group">
                        <li class="list-group-item text-center">
                            <h3>Pengajar</h3>
                        </li>
                        @foreach ($calons as $pengajar)
                            @if ($pengajar->jenis == 'pengajar')
                                <li class="list-group-item d-flex justify-content-between align-items-center fs-5">
                                    {{ $pengajar->panitiaPengajar->nama }}
                                    <span class="badge bg-warning rounded-pill">
                                        <a href="javascript:void(0)" wire:click='edit({{ $pengajar->id }})'
                                            class="text-white"><i class="fa-solid fa-pencil pe-4"></i></a>
                                        <a href="javascript:void(0)" wire:click='delete({{ $pengajar->id }})'
                                            class="text-white"><i class="fa-solid fa-trash"></i></a>
                                    </span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

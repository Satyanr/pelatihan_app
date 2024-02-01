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
                                    <input type="text" class="form-control" placeholder="12930XXXX" wire:model='nip'>
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
                                    <select class="form-select" aria-label="Default select example" wire:model='jenis'>
                                        <option value="" selected>Jenis</option>
                                        <option value="panitia">Panitia</option>
                                        <option value="pengajar">Pengajar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
                        <div class="row py-3">
                            <div class="col">
                                <a href="{{ route('pelatihan', $this->diklat_id) }}"
                                    class="btn btn-secondary">Kembali</a>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

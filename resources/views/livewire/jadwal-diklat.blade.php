<div>
    <form>
        <div class="row justify-content-between">
            <div class="col-7">
                <div class="mb-3">
                    <label class="form-label">Nama Jadwal</label>
                    <input type="text" class="form-control" wire:model="nama_jadwal" required
                        @if ($namadisable) disabled readonly @endif>
                </div>
            </div>
            <div class="col-2 text-center">
                <button type="button" class="btn btn-primary mt-4" wire:click='store'>Simpan</button>
            </div>
        </div>
        @if ($judulhason)
            <div class="row my-3">
                <div class="col-3">
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" wire:model='tanggal' required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Waktu</label>
                        <div class="row">
                            <div class="col-3">
                                <input type="time" class="form-control" wire:model='waktu_awal' required>
                            </div>
                            <div class="col-auto text-center">
                                <b>Sampai</b>
                            </div>
                            <div class="col-3">
                                <input type="time" class="form-control" wire:model='waktu_akhir' required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="materi"
                            value="materi" wire:click="materion">
                        <label class="form-check-label" for="materi">Materi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Checkin"
                            value="checkin" wire:model='checkin' wire:click='materioff'>
                        <label class="form-check-label" for="Checkin">Checkin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Isoma"
                            value="isoma" wire:model='isoma' wire:click='materioff'>
                        <label class="form-check-label" for="Isoma">Isoma</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Break"
                            value="break" wire:model='break' wire:click='materioff'>
                        <label class="form-check-label" for="Break">Break</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Checkout"
                            value="checkout" wire:model='checkout' wire:click='materioff'>
                        <label class="form-check-label" for="Checkout">Checkout</label>
                    </div>
                </div>
            </div>
        @endif

        @if ($materitype)
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Materi Topik Sajian</label>
                        <input type="text" class="form-control" placeholder="Laporan Kegiatan"
                            wire:model='materi_topik_sajian' required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Narasumber/Penyaji</label>
                        <input type="text" class="form-control" placeholder="Dr. Ir. Nama"
                            wire:model='narasumber_penyaji' required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Penanggung Jawab</label>
                        <input type="text" class="form-control" placeholder="Panitia"
                            wire:model='penanggung_jawab' required>
                    </div>
                </div>
            </div>
        @endif

        <div class="row mt-3">
            <div class="col">
                <a href="{{ route('pelatihan', $diklat->id) }}" class="btn btn-secondary">Kembali</a>
            </div>
            <div class="col d-flex justify-content-end">
                <button type="button" class="btn btn-primary" wire:click='kegiatanstore'>Tambahkan</button>
            </div>
        </div>
    </form>

    @foreach ($jdwldklt as $jadwal)
        <div class="row mt-3">
            <div class="col">
                <h4>{{ $jadwal->nama_jadwal }}</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Materi Topik Sajian</th>
                                <th scope="col">Narasumber/Penyaji</th>
                                <th scope="col"></th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal->jadwal_kegiatan_diklat as $item)
                                @if ($item->checkin | $item->break | $item->checkout | $item->isoma)
                                    <tr class="table-primary">
                                    @else
                                    <tr>
                                @endif
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->waktu_awal }} - {{ $item->waktu_akhir }}</td>
                                @if ($item->checkin)
                                    <td colspan="3">Checkin</td>
                                @elseif ($item->isoma)
                                    <td colspan="3">Isoma</td>
                                @elseif ($item->break)
                                    <td colspan="3">Break</td>
                                @elseif ($item->checkout)
                                    <td colspan="3">Checkout</td>
                                @else
                                    <td>{{ $item->materi_topik_sajian }}</td>
                                    <td>{{ $item->narasumber_penyaji }}</td>
                                    <td>{{ $item->penganggung_jawab }}</td>
                                @endif
                                <td>
                                    <button type="button" class="btn btn-danger"
                                        wire:click='kegiatandestroy({{ $item->id }})'>Hapus</button>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach

<?php

namespace App\Livewire;

use App\Models\JadwalDiklat as ModelsJadwalDiklat;
use App\Models\JadwalKegiatanDiklat;
use Livewire\Component;

class JadwalDiklat extends Component
{
    public $diklat, $nama_jadwal, $tanggal, $waktu_awal, $waktu_akhir, $materi_topik_sajian, $narasumber_penyaji, $penanggung_jawab, $checkin, $checkout, $break, $isoma;
    public $jadwal_diklat;
    public $namadisable = false,
        $materitype = false,
        $judulhason = false,
        $updateMode = false;
    public function render()
    {
        $jdwldklt = ModelsJadwalDiklat::where('diklat_id', $this->diklat->id)->get();
        return view('livewire.jadwal-diklat', [
            'jdwldklt' => $jdwldklt,
        ]);
    }

    public function materion()
    {
        $this->materitype = true;
    }
    public function materioff()
    {
        $this->materitype = false;
    }
    public function resetradio()
    {
        $this->checkin = false;
        $this->checkout = false;
        $this->break = false;
        $this->isoma = false;
        $this->materitype = false;
    }
    public function store()
    {
        $this->validate([
            'nama_jadwal' => 'required',
        ]);

        $this->jadwal_diklat = ModelsJadwalDiklat::create([
            'diklat_id' => $this->diklat->id,
            'nama_jadwal' => $this->nama_jadwal,
        ]);

        $this->judulhason = true;
        $this->namadisable = true;
        // return redirect(route('jadwal-diklat', $id));
    }

    public function resetForm()
    {
        $this->nama_jadwal = '';
        $this->tanggal = '';
        $this->waktu_awal = '';
        $this->waktu_akhir = '';
        $this->materi_topik_sajian = '';
        $this->narasumber_penyaji = '';
        $this->penanggung_jawab = '';
        $this->resetradio();
    }

    public function edit($id)
    {
        $this->jadwal_diklat = ModelsJadwalDiklat::find($id);
        $this->nama_jadwal = $this->jadwal_diklat->nama_jadwal;
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->resetForm();
        $this->judulhason = false;
        $this->namadisable = false;
        $this->updateMode = false;
    }

    public function update()
    {
        $this->validate([
            'nama_jadwal' => 'required',
        ]);

        $this->jadwal_diklat->update([
            'nama_jadwal' => $this->nama_jadwal,
        ]);

        $this->judulhason = true;
        $this->namadisable = true;
        $this->updateMode = false;
    }

    public function kegiatanstore()
    {
        $this->validate(
            [
                'tanggal' => 'required',
                'waktu_awal' => 'required',
                'waktu_akhir' => 'required|after_or_equal:waktu_awal',
            ],
            [
                'tanggal.required' => 'Tanggal harus diisi',
                'waktu_awal.required' => 'Waktu awal harus diisi',
                'waktu_akhir.required' => 'Waktu akhir harus diisi',
                'waktu_akhir.after_or_equal' => 'Waktu akhir harus lebih dari waktu awal',
            ],
        );

        if ($this->checkin) {
            JadwalKegiatanDiklat::create([
                'jadwal_diklat_id' => $this->jadwal_diklat->id,
                'tanggal' => $this->tanggal,
                'waktu_awal' => $this->waktu_awal,
                'waktu_akhir' => $this->waktu_akhir,
                'checkin' => true,
            ]);

            $this->resetradio();
        } elseif ($this->checkout) {
            JadwalKegiatanDiklat::create([
                'jadwal_diklat_id' => $this->jadwal_diklat->id,
                'tanggal' => $this->tanggal,
                'waktu_awal' => $this->waktu_awal,
                'waktu_akhir' => $this->waktu_akhir,
                'checkout' => true,
            ]);

            $this->resetradio();
        } elseif ($this->break) {
            JadwalKegiatanDiklat::create([
                'jadwal_diklat_id' => $this->jadwal_diklat->id,
                'tanggal' => $this->tanggal,
                'waktu_awal' => $this->waktu_awal,
                'waktu_akhir' => $this->waktu_akhir,
                'break' => true,
            ]);

            $this->resetradio();
        } elseif ($this->isoma) {
            JadwalKegiatanDiklat::create([
                'jadwal_diklat_id' => $this->jadwal_diklat->id,
                'tanggal' => $this->tanggal,
                'waktu_awal' => $this->waktu_awal,
                'waktu_akhir' => $this->waktu_akhir,
                'isoma' => true,
            ]);

            $this->resetradio();
        } else {
            $this->validate([
                'materi_topik_sajian' => 'required',
                'narasumber_penyaji' => 'required',
                'penanggung_jawab' => 'required',
            ]);
            JadwalKegiatanDiklat::create([
                'jadwal_diklat_id' => $this->jadwal_diklat->id,
                'tanggal' => $this->tanggal,
                'waktu_awal' => $this->waktu_awal,
                'waktu_akhir' => $this->waktu_akhir,
                'materi_topik_sajian' => $this->materi_topik_sajian,
                'narasumber_penyaji' => $this->narasumber_penyaji,
                'penanggung_jawab' => $this->penanggung_jawab,
            ]);

            $this->resetradio();
        }
        // return redirect(route('jadwal-diklat', $id));
    }

    public function kegiatandestroy($id)
    {
        JadwalKegiatanDiklat::find($id)->delete();
    }

    public function jadwaldel($id)
    {
        ModelsJadwalDiklat::find($id)->delete();
    }
}

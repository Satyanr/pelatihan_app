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
        $judulhason = false;
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

    public function kegiatanstore()
    {
        $this->validate([
            'tanggal' => 'required',
            'waktu_awal' => 'required',
            'waktu_akhir' => 'required',
        ]);

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
        }
        // return redirect(route('jadwal-diklat', $id));
    }

    public function kegiatandestroy($id)
    {
        JadwalKegiatanDiklat::find($id)->delete();
    }
}

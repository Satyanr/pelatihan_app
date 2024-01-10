<?php

namespace App\Livewire;

use Livewire\Component;

class SuratPemanggilan extends Component
{
    public $nomor_surat, $lampiran, $hal, $tanggal, $salampembuka, $periode, $tempatpelatihan, $checkdanreg, $pembukaan, $penutupan, $checkout, $persyaratan, $kehadiranpeserta, $kelengkapan, $pembiayaan, $salampenutup, $tembusan, $nama_kepala, $nip;
    public function render()
    {
        return view('livewire.surat-pemanggilan');
    }

    public function store()
    {
        $this->validate([
            'nomor_surat' => 'required',
            'lampiran' => 'required',
            'hal' => 'required',
            'tanggal' => 'required',
            'salampembuka' => 'required',
            'periode' => 'required',
            'tempatpelatihan' => 'required',
            'checkdanreg' => 'required',
            'pembukaan' => 'required',
            'penutupan' => 'required',
            'checkout' => 'required',
            'persyaratan' => 'required',
            'kehadiranpeserta' => 'required',
            'kelengkapan' => 'required',
            'pembiayaan' => 'required',
            'salampenutup' => 'required',
            'tembusan' => 'required',
            'nama_kepala' => 'required',
            'nip' => 'required',
        ]);

        $data = [
            'nomor_surat' => $this->nomor_surat,
            'lampiran' => $this->lampiran,
            'hal' => $this->hal,
            'tanggal' => $this->tanggal,
            'salampembuka' => $this->salampembuka,
            'periode' => $this->periode,
            'tempatpelatihan' => $this->tempatpelatihan,
            'checkdanreg' => $this->checkdanreg,
            'pembukaan' => $this->pembukaan,
            'penutupan' => $this->penutupan,
            'checkout' => $this->checkout,
            'persyaratan' => $this->persyaratan,
            'kehadiranpeserta' => $this->kehadiranpeserta,
            'kelengkapan' => $this->kelengkapan,
            'pembiayaan' => $this->pembiayaan,
            'salampenutup' => $this->salampenutup,
            'tembusan' => $this->tembusan,
            'nama_kepala' => $this->nama_kepala,
            'nip' => $this->nip,
        ];

        \App\Models\SuratPemanggilan::create($data);
    }
}

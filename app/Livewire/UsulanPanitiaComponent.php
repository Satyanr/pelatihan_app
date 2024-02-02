<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PanitiaPengajar;
use App\Models\PanitiaPengajarLink;

class UsulanPanitiaComponent extends Component
{
    public $diklat_id, $nama, $nip, $unit_kerja, $jenis, $mata_diklat, $jam_pelajaran;
    public $panitialist,
        $showresult = false;
    public function render()
    {
        $calons = PanitiaPengajarLink::where('diklat_id', $this->diklat_id)->get();
        return view('livewire.usulan-panitia-component', [
            'calons' => $calons,
        ]);
    }

    public function searchResult()
    {
        if (!empty($this->nama)) {
            $this->panitialist = PanitiaPengajar::orderby('nama', 'asc')
                ->select('*')
                ->where('nama', 'like', '%' . $this->nama . '%')
                ->limit(5)
                ->get();

            $this->showresult = true;
        } else {
            $this->showresult = false;
        }
    }

    public function pilihpanitia($id = 0)
    {
        $panitialist = PanitiaPengajar::select('*')
            ->where('id', $id)
            ->first();

        $this->nama = $panitialist->nama;
        $this->nip = $panitialist->nip;
        $this->unit_kerja = $panitialist->unit_kerja;
        $this->showresult = false;
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'nip' => 'required',
            'unit_kerja' => 'required',
            'jenis' => 'required',
        ]);
        $existingPanitia = PanitiaPengajar::where('nama', $this->nama)
            ->where('nip', $this->nip)
            ->first();

        if ($existingPanitia) {
            PanitiaPengajarLink::create([
                'diklat_id' => $this->diklat_id,
                'panitia_pengajar_id' => $existingPanitia->id,
                'jenis' => $this->jenis,
                'mata_diklat' => $this->mata_diklat,
                'jam_pelajaran' => $this->jam_pelajaran,
            ]);
        } else {
            $panitia = new PanitiaPengajar([
                'nama' => $this->nama,
                'nip' => $this->nip,
                'unit_kerja' => $this->unit_kerja,
            ]);

            $panitia->save();

            PanitiaPengajarLink::create([
                'diklat_id' => $this->diklat_id,
                'panitia_pengajar_id' => $panitia->id,
                'jenis' => $this->jenis,
                'mata_diklat' => $this->mata_diklat,
                'jam_pelajaran' => $this->jam_pelajaran,
            ]);
        }

        return redirect()->route('pelatihan', $this->diklat_id);
    }
}

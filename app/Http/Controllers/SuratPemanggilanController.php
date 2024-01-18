<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Http\Request;
use App\Models\SuratPemanggilan;

class SuratPemanggilanController extends Controller
{
    public function index($id)
    {
        $diklat = Diklat::find($id);
        return view('admin.surat_pemanggilan', compact('diklat'));
    }
    public function store(Request $request)
    {
        $surat = new SuratPemanggilan();
        $surat->diklat_id = $request->diklat_id;
        $surat->nomor_surat = $request->nomor_surat;
        $surat->lampiran = $request->lampiran;
        $surat->hal = $request->hal;
        $surat->tanggal = $request->tanggal;
        $surat->salampembuka = $request->salampembuka;
        $surat->pembukaan = $request->pembukaan;
        $surat->penutupan = $request->penutupan;
        $surat->checkout = $request->checkout;
        $surat->kehadiranpeserta = $request->kehadiranpeserta;
        $surat->kelengkapan = $request->kelengkapan;
        $surat->pembiayaan = $request->pembiayaan;
        $surat->salampenutup = $request->salampenutup;
        $surat->tembusan = $request->tembusan;
        $surat->nama_kepala = $request->nama_kepala;
        $surat->nip = $request->nip;
        $surat->checkdanreg = $request->checkdanreg;
        $surat->kelas = $request->kelas;
        $surat->persyaratan = $request->persyaratan;
        $surat->tempatpelatihan = $request->tempatpelatihan;
        $surat->periode = $request->periode;
        $surat->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $surat = SuratPemanggilan::findOrFail($id);
        $surat->delete();

        return redirect()->back();
    }
}

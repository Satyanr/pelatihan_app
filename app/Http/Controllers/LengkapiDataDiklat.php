<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Http\Request;

class LengkapiDataDiklat extends Controller
{
    public function index($id)
    {
        $diklat = Diklat::find($id);
        return view('admin.diklat.lengkapi_buku_panduan', compact('diklat'));
    }

    public function store(Request $request, $id)
    {
        $diklat = Diklat::find($id);
        $diklat->update([
            'kata_pengantar' => $request->kata_pengantar,
            'ttertib_pelaksanaan' => $request->ttertib_pelaksanaan,
            'keterangan' => $request->keterangan,
        ]);
        $diklat->save();
        return redirect()
            ->route('pelatihan',  $diklat->id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Http\Request;
use App\Models\PesertaPelatihan;
use Maatwebsite\Excel\Facades\Excel;

class PesertaPelatihanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $diklat = Diklat::find($id);
        return view('admin.peserta', compact('diklat'));
    }

    public function store(Request $request)
    {
        $diklat = Diklat::find($request->id);
        $diklat->peserta()->create($request->all());
        return redirect()->route('peserta', $request->id);
    }
    // public function import()
    // {
    //     Excel::import(new PesertaImport,request()->file('file'));

    //     return back();
    // }


    public function edit($id)
    {
        $peserta = PesertaPelatihan::find($id);
        return view('admin.peserta-edit', compact('peserta'));
    }

    public function update(Request $request, $id)
    {
        $peserta = PesertaPelatihan::find($id);
        $peserta->update($request->all());
        return redirect()->route('peserta', $peserta->diklat_id);
    }

    public function delete($id)
    {
        $peserta = PesertaPelatihan::find($id);
        $diklat_id = $peserta->diklat_id;
        $peserta->delete();
        return redirect()->route('peserta', $diklat_id);
    }

    public function deleteAll($id)
    {
        PesertaPelatihan::where('diklat_id', $id)->delete();
        return redirect()->route('peserta', $id);
    }

}

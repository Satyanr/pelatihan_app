<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Http\Request;

class DiklatController extends Controller
{
    public function index()
    {
        return view('admin.diklat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_diklat' => 'required',
            'jumlahsasaran' => 'required',
            'periode' => 'required',
            'tempat' => 'required',
        ]);

        Diklat::create($request->all());

        return redirect()->route('diklat')
            ->with('success', 'Diklat created successfully.');
    }

    // public function edit($id)
    // {
    //     $diklat = Diklat::findOrFail($id);
    //     return view('admin.diklat_edit', compact('diklat'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'nama_diklat' => 'required',
    //         'tanggal_mulai' => 'required',
    //         'tanggal_selesai' => 'required',
    //         'tempat' => 'required',
    //         'jumlah_jam' => 'required',
    //         'jumlah_hari' => 'required',
    //         'penyelenggara' => 'required',
    //         'keterangan' => 'required',
    //     ]);

    //     $diklat = Diklat::findOrFail($id);
    //     $diklat->update($request->all());

    //     return redirect()->route('diklat')
    //         ->with('success', 'Diklat updated successfully');
    // }

    public function delete($id)
    {
        $diklat = Diklat::findOrFail($id);
        $diklat->delete();

        return redirect()->route('diklat')
            ->with('success', 'Diklat deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Http\Request;
use App\Models\PanitiaPengajar;
use App\Models\PanitiaPengajarLink;

class PanitiaPengajarController extends Controller
{
    public function index($id)
    {
        $diklat = Diklat::find($id);
        return view('admin.usulan_panitia', compact('diklat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'unit_kerja' => 'required',
            'jenis' => 'required',
        ]);

        $panitia = new PanitiaPengajar([
            'nama' => $request->get('nama'),
            'nip' => $request->get('nip'),
            'unit_kerja' => $request->get('unit_kerja'),
        ]);

        $panitia->save();

        PanitiaPengajarLink::create([
            'diklat_id' => $request->get('diklat_id'),
            'panitia_pengajar_id' => $panitia->id,
            'jenis' => $request->get('jenis'),
        ]);

        return redirect()
            ->route('pelatihan', $request->get('diklat_id'))
            ->with('success', 'Panitia Pengajar telah ditambahkan');
    }

    public function edit($id)
    {
        $panitia = PanitiaPengajar::find($id);
        return view('admin.edit_panitia', compact('panitia'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'unit_kerja' => 'required',
            'jenis' => 'required',
        ]);

        $panitia = PanitiaPengajar::find($id);
        $panitia->nama = $request->get('nama');
        $panitia->nip = $request->get('nip');
        $panitia->unit_kerja = $request->get('unit_kerja');
        $panitia->jenis = $request->get('jenis');
        $panitia->save();

        return redirect()
            ->route('pelatihan')
            ->with('success', 'Panitia Pengajar telah ditambahkan');
    }

    public function delete($id)
    {
        $panitia = PanitiaPengajar::find($id);
        $panitia->delete();

        return redirect()
            ->route('pelatihan')
            ->with('success', 'Panitia Pengajar telah ditambahkan');
    }
}

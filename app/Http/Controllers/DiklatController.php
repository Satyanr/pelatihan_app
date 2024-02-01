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
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_diklat' => 'required',
            'jumlahsasaran' => 'required|numeric',
            'tanggal_mulai' => 'required',
            'tempat' => 'required',
            'latar_belakang' => 'required',
            'hasil_diharapkan' => 'required',
            'sasaran' => 'required',
            'materi_pokok' => 'required',
            'evaluasi' => 'required',
            'sertifikat' => 'required',
            'layanan_peserta' => 'required',
            'tanggal_selesai' => 'required',
            'progli' => 'required',
        ]);
        if ($request->cover) {
            $imageName = time() . '.' . $request->cover->extension();
            $request->cover->move(public_path('covers_diklat'), $imageName);

            Diklat::create([
                'image' => $imageName,
                'nama_diklat' => $request->nama_diklat,
                'jumlahsasaran' => $request->jumlahsasaran,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_selesai' => $request->tanggal_selesai,
                'tempat' => $request->tempat,
                'progli' => $request->progli,
                'latar_belakang' => $request->latar_belakang,
                'hasil_diharapkan' => $request->hasil_diharapkan,
                'sasaran' => $request->sasaran,
                'materi_pokok' => $request->materi_pokok,
                'evaluasi' => $request->evaluasi,
                'sertifikat' => $request->sertifikat,
                'layanan_peserta' => $request->layanan_peserta,
            ]);
        } else {
            Diklat::create([
                'nama_diklat' => $request->nama_diklat,
                'jumlahsasaran' => $request->jumlahsasaran,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_selesai' => $request->tanggal_selesai,
                'tempat' => $request->tempat,
                'progli' => $request->progli,
                'latar_belakang' => $request->latar_belakang,
                'hasil_diharapkan' => $request->hasil_diharapkan,
                'sasaran' => $request->sasaran,
                'materi_pokok' => $request->materi_pokok,
                'evaluasi' => $request->evaluasi,
                'sertifikat' => $request->sertifikat,
                'layanan_peserta' => $request->layanan_peserta,
            ]);
        }

        return redirect()
            ->route('mainmenu')
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

        return redirect()
            ->route('mainmenu')
            ->with('success', 'Diklat deleted successfully');
    }
}

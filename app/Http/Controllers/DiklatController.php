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

    public function edit($id)
    {
        $diklat = Diklat::findOrFail($id);
        return view('admin.diklat.edit', compact('diklat'));
    }

    public function update(Request $request, $id)
    {
        $diklat = Diklat::findOrFail($id);
        $request->validate([
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_diklat' => 'required',
            'jumlahsasaran' => 'required|numeric',
            'tanggal_mulai' => 'required',
            'tempat' => 'required',
            'kata_pengantar' => 'required',
            'latar_belakang' => 'required',
            'hasil_diharapkan' => 'required',
            'sasaran' => 'required',
            'materi_pokok' => 'required',
            'evaluasi' => 'required',
            'sertifikat' => 'required',
            'layanan_peserta' => 'required',
            'tanggal_selesai' => 'required',
            'progli' => 'required',
            'ttertib_pelaksanaan' => 'required',
            'keterangan' => 'required',
        ]);
        if ($request->cover) {
            $imageName = time() . '.' . $request->cover->extension();
            $request->cover->move(public_path('covers_diklat'), $imageName);

            $diklat->update([
                'image' => $imageName,
                'nama_diklat' => $request->nama_diklat,
                'jumlahsasaran' => $request->jumlahsasaran,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_selesai' => $request->tanggal_selesai,
                'tempat' => $request->tempat,
                'progli' => $request->progli,
                'kata_pengantar' => $request->kata_pengantar,
                'latar_belakang' => $request->latar_belakang,
                'hasil_diharapkan' => $request->hasil_diharapkan,
                'sasaran' => $request->sasaran,
                'materi_pokok' => $request->materi_pokok,
                'evaluasi' => $request->evaluasi,
                'sertifikat' => $request->sertifikat,
                'layanan_peserta' => $request->layanan_peserta,
                'keterangan' => $request->keterangan,
                'ttertib_pelaksanaan' => $request->ttertib_pelaksanaan,
            ]);
        } else {
            $diklat->update([
                'nama_diklat' => $request->nama_diklat,
                'jumlahsasaran' => $request->jumlahsasaran,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_selesai' => $request->tanggal_selesai,
                'tempat' => $request->tempat,
                'progli' => $request->progli,
                'kata_pengantar' => $request->kata_pengantar,
                'latar_belakang' => $request->latar_belakang,
                'hasil_diharapkan' => $request->hasil_diharapkan,
                'sasaran' => $request->sasaran,
                'materi_pokok' => $request->materi_pokok,
                'evaluasi' => $request->evaluasi,
                'sertifikat' => $request->sertifikat,
                'layanan_peserta' => $request->layanan_peserta,
                'ttertib_pelaksanaan' => $request->ttertib_pelaksanaan,
                'keterangan' => $request->keterangan,
            ]);
        }

        return redirect()
            ->route('mainmenu')
            ->with('success', 'Diklat updated successfully.');
    }

    public function delete($id)
    {
        $diklat = Diklat::findOrFail($id);
        $diklat->delete();

        return redirect()
            ->route('mainmenu')
            ->with('success', 'Diklat deleted successfully');
    }
}

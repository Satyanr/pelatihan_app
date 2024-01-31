<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use App\Models\SuratPemanggilan;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function mainmenu()
    {
        return view('admin.main_menu');
    }

    public function pelatihan($id)
    {
        $diklat = Diklat::find($id);
        return view('admin.pelatihan', compact('diklat'));
    }

    public function suratpemanggilanmenu($id)
    {
        $surats = SuratPemanggilan::where('diklat_id', $id)->get();
        $diklat = Diklat::find($id);
        return view('admin.surat_pemanggilan_menu', compact('surats', 'diklat'));
    }
}

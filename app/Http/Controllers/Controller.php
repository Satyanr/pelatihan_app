<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function mainmenu()
    {
        $diklat = Diklat::all();
        return view('admin.main_menu', compact('diklat'));
    }

    public function pelatihan()
    {
        return view('admin.pelatihan');
    }

    public function suratpemanggilanmenu()
    {
        return view('admin.surat_pemanggilan_menu');
    }
}

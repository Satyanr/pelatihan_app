<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function suratpemanggilan()
    {
        return view('admin.surat_pemanggilan');
    }

    public function mainmenu()
    {
        return view('admin.main_menu');
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

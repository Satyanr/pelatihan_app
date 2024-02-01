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

    public function store(Request $request)
    {



        return redirect()
            ->route('pelatihan');
    }
}

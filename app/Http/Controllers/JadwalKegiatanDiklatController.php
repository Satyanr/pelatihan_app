<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Http\Request;

class JadwalKegiatanDiklatController extends Controller
{
    public function index($id)
    {
        $diklat = Diklat::find($id);
        return view('admin.jadwal_diklat', compact('diklat'));
    }
}

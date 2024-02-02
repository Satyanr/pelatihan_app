<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Http\Request;

class PesertaPelatihanController extends Controller
{
    public function index($id)
    {
        $diklat = Diklat::find($id);
        return view('admin.peserta', compact('diklat'));
    }
}

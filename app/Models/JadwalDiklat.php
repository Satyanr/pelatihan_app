<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDiklat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function diklat()
    {
        return $this->belongsTo(Diklat::class);
    }

    public function jadwal_kegiatan_diklat()
    {
        return $this->hasMany(JadwalKegiatanDiklat::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diklat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function panitiaPengajarLinks()
    {
        return $this->hasMany(PanitiaPengajarLink::class);
    }

    public function pesertaPelatihan()
    {
        return $this->hasMany(PesertaPelatihan::class);
    }
}

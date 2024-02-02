<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanitiaPengajar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function panitiaPengajarLink()
    {
        return $this->belongsTo(PanitiaPengajarLink::class, 'id', 'panitia_pengajar_id');
    }
}

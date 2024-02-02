<?php

namespace App\Imports;

use App\Models\PesertaPelatihan;
use Maatwebsite\Excel\Concerns\ToModel;

class PesertaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PesertaPelatihan([
            //
        ]);
    }
}

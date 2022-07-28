<?php

namespace App\Imports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\ToModel;

class GuruImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Guru([
            'nama' => $row[1],
            'nip'  => $row[2],
            'jeniskelamin' => $row[3],
            'alamat' => $row[4],
            'notelfon' => $row[5],
        ]);
    }
}

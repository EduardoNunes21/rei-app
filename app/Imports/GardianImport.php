<?php

namespace App\Imports;

use App\Models\timedesucesso;
use Maatwebsite\Excel\Concerns\ToModel;
use Iluminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GardianImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new timedesucesso([
            'Resp' => @$row[0],
            'Av' => @$row[1],

            
        ]);
        echo sizeof($row);
        print_r($row);
    }
}

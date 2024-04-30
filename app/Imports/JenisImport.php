<?php

namespace App\Imports;

use App\Models\jenis;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;

class JenisImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new jenis([
            'nama_jenis' => $row['1'],
        ]);
    }
    // public function headingRow(): int
    // {
    //     return 3;
    // }
}
<?php

namespace App\Imports;

use App\Models\Menu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MenuImport implements ToModel, WithHeadingRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Menu([
            'nama_menu' => $row['1'],
            'harga' => $row['2'],
            'image' => $row['3'],
            'deskripsi' => $row['4'],
            'jenis_id' => (int)$row['5'], // Konversi ke integer
        ]);
    }
}

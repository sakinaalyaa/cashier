<?php

namespace App\Imports;

use App\Models\Menu;
use Maatwebsite\Excel\Concerns\ToModel;

class MenuImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Menu([
            'jenis_id'=> auth()->user()->jenis_id,
            'nama_menu' => $row ['nama_menu'],
            'harga' => $row ['harga'],
            'image' => $row ['image'],
            'deskripsi' => $row ['deskripsi'],
        ]);
    }

    public function headingRow(): int
    {
        return 4;
    }
}

<?php

namespace App\Imports;

use App\Models\Pelanggan;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;

class pelangganImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(collection $collection)
    {
        foreach ($collection as $row){
    
        $nama = $row['nama'];
       

        Pelanggan::create([
            'nama'=> $nama,
        ]);
        }
    }
}

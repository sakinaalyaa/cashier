<?php

namespace App\Exports;

use App\Models\Jenis;
use Maatwebsite\Excel\Concerns\FromCollection;

class jenisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Jenis::all();
    }
}

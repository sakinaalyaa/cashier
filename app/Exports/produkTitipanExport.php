<?php

namespace App\Exports;

use App\Models\produkTitipan;
use Maatwebsite\Excel\Concerns\FromCollection;

class produkTitipanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return produkTitipan::all();
    }
}

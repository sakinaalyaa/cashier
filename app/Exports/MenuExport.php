<?php

namespace App\Exports;

use App\Models\menu;
use Maatwebsite\Excel\Concerns\FromCollection;

class MenuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return menu::all();
    }
}
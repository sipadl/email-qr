<?php

namespace App\Exports;

use App\Models\perusahaan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PerusahaanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return perusahaan::all();
    }
}

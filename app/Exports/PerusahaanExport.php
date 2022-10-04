<?php

namespace App\Exports;

use App\Models\perusahaan;
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\HasHeader;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PerusahaanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view("export.all",[
            'data' => perusahaan::all()
        ]);
    }
}

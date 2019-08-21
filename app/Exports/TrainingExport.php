<?php

namespace App\Exports;

use App\training;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrainingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return training::all();
    }
}

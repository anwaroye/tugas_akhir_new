<?php

namespace App\Imports;
use App\training;
// use App\ImportTraining;
use Maatwebsite\Excel\Concerns\ToModel;

class TrainingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new training([
            'nilai_gh'=> $row[1],
            'nilai_ppgd'=> $row[2],
            'nilai_sar'=> $row[3],
            'nilai_impk'=> $row[4],
            'nilai_repling' => $row[5],
            'nilai_sebrang_kering' => $row[6],
            'minat'=> $row[7],
            'divisi'=> $row[8],
        ]);
    }
}

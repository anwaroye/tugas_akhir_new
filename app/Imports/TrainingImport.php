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
            'nis'=> $row[1],
            'nama'=> $row[2],
            'nilai_gh'=> $row[3],
            'nilai_ppgd'=> $row[4],
            'nilai_sar'=> $row[5],
            'nilai_impk'=> $row[6],
            'nilai_repling' => $row[7],
            'nilai_sebrang_kering' => $row[8],
            'minat'=> $row[9],
            'divisi'=> $row[10],
        ]);
    }
}

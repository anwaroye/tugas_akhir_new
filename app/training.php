<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    protected $table ='training';
    // protected $primaryKey ="id";

    protected $fillable = [
        'nis',
        'nama',
        'nilai_gh',
        'nilai_ppgd',
        'nilai_sar',
        'nilai_impk',
        'nilai_repling',
        'nilai_sebrang_kering',
        'minat',
        'divisi',
        
    ];
}

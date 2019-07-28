<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table ='data';
    // protected $primaryKey ="id";

    protected $fillabel = [
        
        
        'nilai_gh',
        'nilai_ppgd',
        'nilai_sar',
        'nilai_impk',
        'nilai_repling',
        'nilai_sebrang_kering',
        'minat',
        'divisi'
        
    ];
     
}

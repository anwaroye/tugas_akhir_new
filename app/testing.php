<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testing extends Model
{
    protected $table ='testing';
    // protected $primaryKey ="id";

    protected $fillabel = [
        
        'id',
        'nis_test',
        'n_gh_test',
        'n_ppgd_test',
        'n_sar_test',
        'n_impk_test',
        'n_repling_test',
        'n_sebrang_kering_test',
        'minat_test',
        'divisi_test'
        
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataproduksiperkebunan extends Model
{
    protected $table = 'dataproduksiperkebunan';

    protected $fillable = [
        'produksi_tahun',
        'produksi_kecamatan',
        'produksi_jambu',
        'produksi_kakao',
        'produksi_kelapadalam',
        'produksi_kopi',
        'produksi_lada',
        'produksi_pala'
    ];
}

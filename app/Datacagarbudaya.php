<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datacagarbudaya extends Model
{
    protected $table = 'datacagarbudaya';

    protected $fillable = [
        'tahun',
        'kecamatan',
        'situscagarbudaya',
        'jumlah',
        'created_at',
        'updated_at'
    ];
}

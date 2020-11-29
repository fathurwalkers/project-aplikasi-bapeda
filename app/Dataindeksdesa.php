<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataindeksdesa extends Model
{
    protected $table = 'dataindeksdesa';

    protected $fillable = [
        'namakecamatan',
        'namadesa',
        'statusdesa',
        'indeksdesamembangun',
        'tahun'
    ];
}

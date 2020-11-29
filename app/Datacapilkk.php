<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datacapilkk extends Model
{
    protected $table = 'datacapilkk';

    protected $fillable = [
        'kecamatan',
        'tahun',
        'jumlahkk'
    ];
}

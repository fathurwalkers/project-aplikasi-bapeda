<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datacapilmp extends Model
{
    protected $table = 'datacapilmp';
    protected $fillable = [
        'kecamatan',
        'tahun',
        'matapencaharian',
        'jumlahkk'
    ];
}

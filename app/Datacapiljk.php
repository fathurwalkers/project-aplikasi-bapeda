<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datacapiljk extends Model
{
    protected $table = 'datacapiljk';

    protected $fillable = [
        'kecamatan',
        'tahun',
        'jenkel',
        'jumlah'
    ];
}

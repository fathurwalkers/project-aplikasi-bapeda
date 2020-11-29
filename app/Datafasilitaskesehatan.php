<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datafasilitaskesehatan extends Model
{
    protected $table = 'datafasilitaskesehatan';

    protected $fillable = [
        'fasilitas_kesehatan',
        'kabupaten',
        'kecamatan',
        'jumlah'
    ];
}

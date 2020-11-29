<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datakunjungan extends Model
{
    protected $table = 'datakunjungan';

    protected $fillable = [
        'tahun',
        'mancanegara',
        'domestik',
        'jumlah'
    ];
}

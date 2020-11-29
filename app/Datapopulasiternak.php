<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapopulasiternak extends Model
{
    protected $table = 'datapopulasiternak';

    protected $fillable = [
        'kecamatan',
        'jenisternak',
        'jenishewan',
        'jumlahkeseluruhan',
        'tahun'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataperikananjenis extends Model
{
    protected $table = 'dataperikananjenis';

    protected $fillable = [
        'tahun',
        'kecamatan',
        'rumput_laut',
        'mabe',
        'kerapu',
        'kuwe',
        'lobster',
        'bandeng',
        'nila',
        'lele',
        'created_at',
        'updated_at'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataperikanankomodity extends Model
{
    protected $table = 'dataperikanankomodity';

    protected $fillable = [
        'kecamatan',
        'komodity',
        'jumlah',
        'tahun',
        'created_at',
        'updated_at'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datakoperasi extends Model
{
    protected $table = 'datakoperasi';

    protected $fillable = [
        'tahun',
        'kecamatan',
        'kud',
        'kpri',
        'koptani',
        'kopwan',
        'kopnel',
        'kopmu',
        'kop_tkbm',
        'kop_pontren',
        'kop_komite',
        'ksp',
        'kopker',
        'kopas',
        'primkop',
        'created_at',
        'updated_at'
    ];
}

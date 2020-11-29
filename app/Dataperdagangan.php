<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataperdagangan extends Model
{
    protected $table = 'dataperdagangan';

    protected $fillable = [
        'kecamatan',
        'pasar_aktif',
        'pasar_tidakaktif',
        'pasar_belumterpakai',
        'tahun',
        'created_at',
        'updated_at'
    ];
}

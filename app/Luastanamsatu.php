<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luastanamsatu extends Model
{
    protected $table = 'luastanamsatu';

    protected $fillable = [
        'tahun',
        'kecamatan',
        'padi',
        'padi_sawah',
        'padi_ladang',
        'jagung',
        'jagung_hibrida',
        'jagung_lokal',
        'ubi_kayu',
        'ubi_jalar',
        'kacang_tanah',
        'kacang_kedelai',
        'kacang_hijau',
        'created_at',
        'updated_at'
    ];
}

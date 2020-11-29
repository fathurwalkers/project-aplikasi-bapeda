<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapendidikan extends Model
{
    protected $table = 'datapendidikan';

    protected $fillable = [
        'namakecamatan',
        'jumlahsekolah',
        'jenjang_pendidikan',
        'statussekolahnegeri',
        'statussekolahswasta',
        'jumlahmuridperempuan',
        'jumlahmuridlaki',
        'gurupns',
        'gurunonpns',
        'jumlahgurulaki',
        'jumlahguruperempuan',
        'gurudtiga',
        'gurussatu',
        'gurusdua',
        'kondisisekolahbaik',
        'kondisisekolahrusak'
    ];
}

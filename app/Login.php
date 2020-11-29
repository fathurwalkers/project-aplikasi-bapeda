<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'logins';

    protected $fillable = [
        'name',
        'username',
        'password',
        'level',
        'token',
        'email'
    ];

    // Akses Level : 
    // 1 = Admin 
    // 2 = User 
    // 3 = Status User : contoh 3 / Pendidikan
}

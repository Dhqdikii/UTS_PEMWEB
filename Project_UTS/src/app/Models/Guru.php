<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
     protected $table = 'gurus';
     protected $fillable = [
        'nama',
        'nip',
        'email',
        'no_hp',
        'alamat',
        'mapel',
        'status',
        'image',
    ];
}

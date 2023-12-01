<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterSiswa extends Model
{
    use HasFactory;
    protected $primary = 'id';

    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin',
        'agama',
        'sekolah_asal',
        'username'
    ];
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class RegisterSiswa extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $table = 'registrasi_siswa';
    protected $primaryKey = 'id';

    protected $hidden = [
        'password',
    ];

    protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin',
        'agama',
        'sekolah_asal',
        'username',
        'password',
        'created_at',
        'updated_at',
    ];
}

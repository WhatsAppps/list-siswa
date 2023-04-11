<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $fillable = [
        
        'firstname',
        'lastname',
        'nama',
        'kelas',
        'nis',
        'jurusan',
        'email',
        'alamat',
        'ttl',
        'mobile',
        'image',
        'slug',
        
    ];

protected $casts = [
    'email_verified_at' => 'datetime',
];

}
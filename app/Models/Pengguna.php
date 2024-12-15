<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'Penggunas_222142';
    protected $fillable = [
        'name_222142',
        'username_222142',
        'email_222142',
        'no_WA_222142',
        'password_222142',
        'level_222142',
        'tgl_pendaftaran_222142'
    ];
}

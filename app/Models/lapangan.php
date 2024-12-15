<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapangan extends Model
{
    use HasFactory;

    protected $table = 'lapangans_222142';
    protected $fillable = [
        'id_kategori',
        'urutan_222142',
        'deskripsi_222142',
        'is_active_222142'
    ];
}

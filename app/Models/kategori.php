<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris_222142';
    protected $fillable = [
        'nama_222142',
        'deksripsi_222142',
        'harga_222142',
        'foto_222142'
    ];
}

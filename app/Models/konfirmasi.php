<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konfirmasi extends Model
{
    use HasFactory;
    protected $table = 'konfirmasis_222142';
    protected $fillable = [
        'id_booking',
        'foto_222142',
    ];
}

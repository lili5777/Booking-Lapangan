<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operasional extends Model
{
    use HasFactory;
    protected $table = 'operasionals_222142';
    protected $fillable = [
        'jam_buka_222142',
        'jam_tutup_222142'
    ];
}

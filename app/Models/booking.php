<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table = 'bookings_222142';
    protected $fillable = [
        'id_user',
        'id_lapangan',
        'tgl_booking_222142',
        'jam_mulai_222142',
        'jam_selesai_222142',
        'total_222142',
        'status_222142'
    ];
}

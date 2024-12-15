<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings_222142', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('id_lapangan')->constrained('lapangans_222142', 'id')->onDelete('cascade');
            $table->date('tgl_booking_222142');
            $table->time('jam_mulai_222142');
            $table->time('jam_selesai_222142');
            $table->decimal('total_222142');
            $table->enum('status_222142', ['aktif', 'tidak aktif', 'proses']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings_222142');
    }
};

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
        Schema::create('konfirmasis_222142', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_booking')->constrained('bookings_222142', 'id')->onDelete('cascade');
            $table->string('foto_222142');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfirmasis_222142');
    }
};

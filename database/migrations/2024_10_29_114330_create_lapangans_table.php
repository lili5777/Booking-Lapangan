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
        Schema::create('lapangans_222142', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori')->constrained('kategoris_222142', 'id')->onDelete('cascade');
            $table->string('urutan_222142');
            $table->text('deskripsi_222142');
            $table->boolean('is_active_222142');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapangans_222142');
    }
};

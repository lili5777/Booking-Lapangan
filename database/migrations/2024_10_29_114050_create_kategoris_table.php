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
        Schema::create('kategoris_222142', function (Blueprint $table) {
            $table->id();
            $table->string('name_222142');
            $table->text('deksripsi_222142');
            $table->decimal('harga_222142');
            $table->string('foto_222142');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoris_222142');
    }
};

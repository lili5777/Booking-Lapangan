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
        Schema::create('penggunas_222142', function (Blueprint $table) {
            $table->id();
            $table->string('name_222142');
            $table->string('username_222142')->unique();
            $table->string('email_222142');
            $table->string('no_WA_222142');
            $table->string('password_222142');
            $table->string('level_222142');
            $table->timestamp('tgl_pendaftaran_222142')->useCurrent();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas_222142');
    }
};

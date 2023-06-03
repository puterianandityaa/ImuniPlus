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
        Schema::create('vaksins', function (Blueprint $table) {
            $table->id();
            $table->string('nama_vaksin');
            $table->string('deskripsi_vaksin');
            $table->boolean('ketersediaan_vaksin');
            $table->integer('umur_minimal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaksins');
    }
};

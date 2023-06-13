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
        Schema::create('imunisasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lakes');
            $table->unsignedBigInteger('id_vaksin');
            $table->integer('stok_vaksin')->nullable();
            $table->timestamps();

            $table->foreign('id_lakes')->references('id')->on('layanan_kesehatans')->onDelete('cascade');
            $table->foreign('id_vaksin')->references('id')->on('vaksins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imunisasis');
    }
};

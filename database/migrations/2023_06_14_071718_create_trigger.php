<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared(
            '
            CREATE TRIGGER after_ins_mendaftar
            AFTER INSERT
            ON mendaftars
            FOR EACH ROW
            UPDATE imunisasis
            SET stok_vaksin = stok_vaksin-1
            WHERE id = NEW.id
            '
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trigger');
    }
};

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
        DB::unprepared('
            CREATE PROCEDURE SelectProcedure(
                IN ATTR VARCHAR(255),
                IN TBL VARCHAR(255),
                IN JOIN_CLAUSE TEXT,
                IN WHERE_CLAUSE TEXT
            )
            BEGIN
            SET @sql = CONCAT("SELECT ", ATTR, " FROM ", TBL);

            IF JOIN_CLAUSE IS NOT NULL AND JOIN_CLAUSE != "" THEN
                SET @sql = CONCAT(@sql, " ", JOIN_CLAUSE);
            END IF;
        
            IF WHERE_CLAUSE IS NOT NULL AND WHERE_CLAUSE != "" THEN
                SET @sql = CONCAT(@sql, " WHERE ", WHERE_CLAUSE);
            END IF;

            PREPARE stmt FROM @sql;
            EXECUTE stmt;
            END
        ');


        DB::unprepared('
            CREATE PROCEDURE InsertProcedure(
                IN TBL VARCHAR(255),
                IN COL TEXT,
                IN VAL TEXT
            )
            BEGIN
                SET @SQL = CONCAT("INSERT INTO ", TBL, COL, " VALUES",VAL,";");
                PREPARE STAT FROM @SQL;
                EXECUTE STAT;
            END
        ');

        DB::unprepared('
            CREATE PROCEDURE UpdateProcedure(
                IN TBL VARCHAR(255),
                IN COL_PK VARCHAR(255),
                IN VAL_PK VARCHAR(255),
                IN COL_DAT TEXT
            )
            BEGIN
                SET @SQL = CONCAT("UPDATE ", TBL, " SET ", COL_DAT, " WHERE ", COL_PK, " = ", VAL_PK);
                PREPARE STAT FROM @SQL;
                EXECUTE STAT;
            END
        ');
        
        DB::unprepared('
            CREATE PROCEDURE DeleteProcedure(
                IN TBL VARCHAR(255),
                IN COL_PK VARCHAR(255),
                IN VAL_PK VARCHAR(255)
            )
            BEGIN
                SET @SQL = CONCAT("DELETE FROM ", TBL, " WHERE ", COL_PK, " = ", VAL_PK);
                PREPARE STAT FROM @SQL;
                EXECUTE STAT;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stored_procedures');
    }
};

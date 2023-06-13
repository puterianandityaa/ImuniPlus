<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class imunisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_lakes',
        'id_vaksin',
        'stok_vaksin',
    ];

    public static function daftarImunisasi($col, $table, $join, $where)
    {
        return DB::select("CALL SelectProcedure($col, $table, $join, $where)");
    }

    public static function tambahImunisasi($table, $column, $value)
    {
        return DB::select("CALL InsertProcedure($table, $column, $value)");
    }

    public function layanan_kesehatan(){
        return $this->belongsTo(layanan_kesehatan::class, 'id_lakes', 'id');
    }

    public function vaksin(){
        return $this->belongsTo(vaksin::class, 'id_vaksin', 'id');
    }
}

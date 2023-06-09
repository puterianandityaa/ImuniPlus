<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class layanan_kesehatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lakes',
        'alamat',
        'jadwal',
    ];

    public static function daftarLakes($col, $table, $join, $where)
    {
        return DB::select("CALL SelectProcedure($col, $table, $join, $where)");
    }

    public static function tambahLakes($table, $column, $value)
    {
        return DB::select("CALL InsertProcedure($table, $column, $value)");
    }

    public static function updateLakes($table,$colPK,$colValue,$colData)
    {
        return DB::select("CALL UpdateProcedure($table,$colPK,$colValue,$colData)");
    }

    public static function deleteLakes($table,$colPK,$colValue)
    {
        return DB::select("CALL DeleteProcedure($table,$colPK,$colValue)");
    }
    
    public function vaksin(){
        return $this->belongsToMany(vaksin::class, 'imunisasis', 'id_lakes', 'id_vaksin')->withPivot('stok_vaksin');
    }
}

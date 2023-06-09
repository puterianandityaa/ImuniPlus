<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class vaksin extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_vaksin',
        'deskripsi_vaksin',
        'ketersediaan_vaksin',
        'umur_minimal',
    ];

    public static function daftarVaksin($col, $table, $join, $where)
    {
        return DB::select("CALL SelectProcedure($col, $table, $join, $where)");
    }
    
    public static function tambahVaksin($table, $column, $value)
    {
        return DB::select("CALL InsertProcedure($table, $column, $value)");
    }

    public static function updateVaksin($table,$colPK,$colValue,$colData)
    {
        return DB::select("CALL UpdateProcedure($table,$colPK,$colValue,$colData)");
    }

    public static function deleteVaksin($table,$colPK,$colValue)
    {
        return DB::select("CALL DeleteProcedure($table,$colPK,$colValue)");
    }

    public function layanan_kesehatan(){
        return $this->belongsToMany(LayananKesehatan::class, 'imunisasis', 'id_vaksin', 'id_lakes')->withPivot('stok_vaksin');
    }
}

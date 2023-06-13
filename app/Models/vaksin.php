<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class vaksin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_vaksin',
        'deskripsi_vaksin',
        'ketersediaan_vaksin',
        'umur_minimal',
    ];

    public static function daftarVaksin()
    {
        return DB::select("CALL SelectProcedure('id, nama_vaksin', 'vaksins', '', '');");
    }

    public static function tambahVaksin($table, $column, $value)
    {
        return DB::select("CALL InsertProcedure($table, $column, $value)");
    }

    public function layanan_kesehatan(){
        return $this->belongsToMany(LayananKesehatan::class, 'imunisasis', 'id_vaksin', 'id_lakes')->withPivot('stok_vaksin');
    }
}

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

    public static function daftarLakes()
    {
        return DB::select("CALL SelectProcedure('id, nama_lakes', 'layanan_kesehatans', '', '');");
    }

    public static function tambahLakes($table, $column, $value)
    {
        return DB::select("CALL InsertProcedure($table, $column, $value)");
    }

    public function vaksin(){
        return $this->belongsToMany(vaksin::class, 'imunisasis', 'id_lakes', 'id_vaksin')->withPivot('stok_vaksin');
    }
}

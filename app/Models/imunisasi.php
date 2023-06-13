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

    public static function tambahImunisasi($table, $column, $value)
    {
        return DB::select("CALL InsertProcedure($table, $column, $value)");
    }
    public function user(){
        return $this->belongsToMany(User::class, 'mendaftars', 'id_imunisasi', 'id_user');
    }
}

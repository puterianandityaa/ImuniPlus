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

    public function layanan_kesehatan(){
        return $this->belongsTo(layanan_kesehatan::class, 'id_lakes', 'id');
    }

    public function vaksin(){
        return $this->belongsTo(vaksin::class, 'id_vaksin', 'id');
    }
}

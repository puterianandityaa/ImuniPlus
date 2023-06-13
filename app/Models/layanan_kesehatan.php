<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan_kesehatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lakes',
        'alamat',
        'jadwal',
    ];

    public function vaksin(){
        return $this->belongsToMany(vaksin::class, 'imunisasis', 'id_lakes', 'id_vaksin')->withPivot('stok_vaksin');
    }
}

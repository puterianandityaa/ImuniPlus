<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaksin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_vaksin',
        'deskripsi_vaksin',
        'ketersediaan_vaksin',
        'umur_minimal',
    ];

    public function layanan_kesehatan(){
        return $this->belongsToMany(LayananKesehatan::class, 'imunisasis', 'id_vaksin', 'id_lakes')->withPivot('stok_vaksin');
    }
}

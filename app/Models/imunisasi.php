<?php

namespace App\Models;

use App\Models\layanan_kesehatan;
use App\Models\vaksin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imunisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_lakes',
        'username',
        'phone',
        'address',
        'email',
        'password',
    ];

    public function layanan_kesehatan(){
        return $this->belongsTo(layanan_kesehatan::class, 'id_lakes', 'id');
    }

    public function vaksin(){
        return $this->belongsTo(vaksin::class, 'id_vaksin', 'id');
    }
}

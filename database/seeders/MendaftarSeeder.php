<?php

namespace Database\Seeders;

use App\Models\imunisasi;
use App\Models\layanan_kesehatan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lakes = layanan_kesehatan::all();
        $user = User::find(1);
        $imunisasi = imunisasi::find(1);
        $tanggalImunisasi = DB::table('imunisasis')
            ->join('layanan_kesehatans', 'imunisasis.id_lakes', '=', 'layanan_kesehatans.id')
            ->where('layanan_kesehatans.id', $imunisasi->id_lakes)
            ->select('layanan_kesehatans.jadwal')
            ->first();
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'Gregory',
            'umur_anak' => '0',
            'tanggal_lahir' => date('2023-06-12 00:00:00'),
            'tanggal_imunisasi' => $tanggalImunisasi->jadwal
        ]);
            
        $user = User::find(1);
        $imunisasi = imunisasi::find(2);
        $tanggalImunisasi = DB::table('imunisasis')
            ->join('layanan_kesehatans', 'imunisasis.id_lakes', '=', 'layanan_kesehatans.id')
            ->where('layanan_kesehatans.id', $imunisasi->id_lakes)
            ->select('layanan_kesehatans.jadwal')
            ->first();
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'Gregory',
            'umur_anak' => '0',
            'tanggal_lahir' => date('2023-06-12 00:00:00'),
            'tanggal_imunisasi' => $tanggalImunisasi->jadwal
        ]);
        
        $user = User::find(2);
        $imunisasi = imunisasi::find(10);
        $tanggalImunisasi = DB::table('imunisasis')
            ->join('layanan_kesehatans', 'imunisasis.id_lakes', '=', 'layanan_kesehatans.id')
            ->where('layanan_kesehatans.id', $imunisasi->id_lakes)
            ->select('layanan_kesehatans.jadwal')
            ->first();
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'Veronica',
            'umur_anak' => '1',
            'tanggal_lahir' => date('2022-03-01 00:00:00'),
            'tanggal_imunisasi' => $tanggalImunisasi->jadwal
        ]);

        $user = User::find(2);
        $imunisasi = imunisasi::find(11);
        $tanggalImunisasi = DB::table('imunisasis')
            ->join('layanan_kesehatans', 'imunisasis.id_lakes', '=', 'layanan_kesehatans.id')
            ->where('layanan_kesehatans.id', $imunisasi->id_lakes)
            ->select('layanan_kesehatans.jadwal')
            ->first();
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'Veronica',
            'umur_anak' => '1',
            'tanggal_lahir' => date('2022-03-01 00:00:00'),
            'tanggal_imunisasi' => $tanggalImunisasi->jadwal
        ]);
        
        $user = User::find(3);
        $imunisasi = imunisasi::find(34);
        $tanggalImunisasi = DB::table('imunisasis')
            ->join('layanan_kesehatans', 'imunisasis.id_lakes', '=', 'layanan_kesehatans.id')
            ->where('layanan_kesehatans.id', $imunisasi->id_lakes)
            ->select('layanan_kesehatans.jadwal')
            ->first();
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'James',
            'umur_anak' => '11',
            'tanggal_lahir' => date('2012-03-01 00:00:00'),
            'tanggal_imunisasi' => $tanggalImunisasi->jadwal
        ]);
        
        $user = User::find(4);
        $imunisasi = imunisasi::find(21);
        $tanggalImunisasi = DB::table('imunisasis')
            ->join('layanan_kesehatans', 'imunisasis.id_lakes', '=', 'layanan_kesehatans.id')
            ->where('layanan_kesehatans.id', $imunisasi->id_lakes)
            ->select('layanan_kesehatans.jadwal')
            ->first();
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'Patricia',
            'umur_anak' => '7',
            'tanggal_lahir' => date('2016-05-11 00:00:00'),
            'tanggal_imunisasi' => $tanggalImunisasi->jadwal
        ]);
    }
}

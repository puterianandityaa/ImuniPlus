<?php

namespace Database\Seeders;

use App\Models\imunisasi;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1);
        $imunisasi = imunisasi::find(1);
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'Gregory',
            'umur_anak' => '0',
            'tanggal_lahir' => date('2023-06-12 00:00:00'),
            'tanggal_imunisasi' => date('2023-06-13 00:00:00'),
        ]);

        $user = User::find(1);
        $imunisasi = imunisasi::find(2);
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'Gregory',
            'umur_anak' => '0',
            'tanggal_lahir' => date('2023-06-12 00:00:00'),
            'tanggal_imunisasi' => date('2023-06-13 00:00:00'),
        ]);
        
        $user = User::find(2);
        $imunisasi = imunisasi::find(3);
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'Veronica',
            'umur_anak' => '1',
            'tanggal_lahir' => date('2022-03-01 00:00:00'),
            'tanggal_imunisasi' => date('2023-06-17 00:00:00'),
        ]);

        $user = User::find(2);
        $imunisasi = imunisasi::find(4);
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'Veronica',
            'umur_anak' => '1',
            'tanggal_lahir' => date('2022-03-01 00:00:00'),
            'tanggal_imunisasi' => date('2023-06-18 00:00:00'),
        ]);
        
        $user = User::find(3);
        $imunisasi = imunisasi::find(6);
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'James',
            'umur_anak' => '11',
            'tanggal_lahir' => date('2012-03-01 00:00:00'),
            'tanggal_imunisasi' => date('2023-06-18 00:00:00'),
        ]);
        
        $user = User::find(4);
        $imunisasi = imunisasi::find(7);
        $user->imunisasi()->attach($imunisasi, [
            'nama_anak' => 'Patricia',
            'umur_anak' => '7',
            'tanggal_lahir' => date('2016-05-11 00:00:00'),
            'tanggal_imunisasi' => date('2023-06-18 00:00:00'),
        ]);
    }
}

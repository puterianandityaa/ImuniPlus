<?php

namespace Database\Seeders;

use App\Models\layanan_kesehatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LakesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layananKesehatan = [
            [
                'nama_lakes' => 'Rumah Sakit Siloam',
                'alamat' => 'Jalan Ahmad Yani No. 123',
                'jadwal' => 'Senin, 08.00-10.00 WIB',
            ],
            [
                'nama_lakes' => 'Klinik Bunda Kasih',
                'alamat' => 'Jalan Beringin No. 456',
                'jadwal' => 'Sabtu, 09.00-11.00 WIB',
            ],
            [
                'nama_lakes' => 'Rumah Sakit Pelita Harapan',
                'alamat' => 'Jalan Tendean No. 9',
                'jadwal' => 'Selasa, 15.00-17.00 WIB',
            ],
            [
                'nama_lakes' => 'Rumah Sakit Mitra Keluarga',
                'alamat' => 'Jalan Imam Bonjol No. 10',
                'jadwal' => 'Rabu, 09.00-11.00 WIB',
            ],
            [
                'nama_lakes' => 'Klinik Amanda',
                'alamat' => 'Jalan Citarum No. 1',
                'jadwal' => 'Kamis, 16.00-18.00 WIB',
            ],
        ];

        layanan_kesehatan::insert($layananKesehatan);
    }
}

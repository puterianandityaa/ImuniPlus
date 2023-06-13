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
                'jadwal' => 'Senin - Jumat: 08:00 - 17:00',
            ],
            [
                'nama_lakes' => 'Klinik Bunda Kasih',
                'alamat' => 'Jalan Beringin No. 456',
                'jadwal' => 'Senin - Sabtu: 09:00 - 18:00',
            ],
            [
                'nama_lakes' => 'Rumah Sakit Pelita Harapan',
                'alamat' => 'Jalan Tendean No. 9',
                'jadwal' => 'Senin - Sabtu: 10:00 - 15:00',
            ],
            [
                'nama_lakes' => 'Rumah Sakit Mitra Keluarga',
                'alamat' => 'Jalan Imam Bonjol No. 10',
                'jadwal' => 'Senin - Sabtu: 09:00 - 15:00',
            ],
            [
                'nama_lakes' => 'Klinik Amanda',
                'alamat' => 'Jalan Citarum No. 1',
                'jadwal' => 'Senin - Sabtu: 10:00 - 18:00',
            ],
        ];

        layanan_kesehatan::insert($layananKesehatan);
    }
}

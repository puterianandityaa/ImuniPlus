<?php

namespace Database\Seeders;

use App\Models\Vaksin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaksinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vaksin = [
            [
                'nama_vaksin' => 'Vaksin Polio',
                'deskripsi_vaksin' => 'Vaksin Polio digunakan untuk melindungi dari polio, penyakit yang menyerang sistem saraf dan dapat menyebabkan kelumpuhan.',
                'ketersediaan_vaksin' => true,
                'umur_minimal' => 0,
            ],
            [
                'nama_vaksin' => 'Vaksin BCG',
                'deskripsi_vaksin' => 'Vaksin BCG digunakan untuk mencegah tuberkulosis (TBC).',
                'ketersediaan_vaksin' => true,
                'umur_minimal' => 0,
            ],
            [
                'nama_vaksin' => 'Vaksin DPT',
                'deskripsi_vaksin' => 'Vaksin DPT melindungi dari tiga penyakit sekaligus, yaitu difteri, pertusis (batuk rejan), dan tetanus.',
                'ketersediaan_vaksin' => true,
                'umur_minimal' => 1,
            ],
            [
                'nama_vaksin' => 'Vaksin Campak',
                'deskripsi_vaksin' => 'Vaksin Campak digunakan untuk melindungi dari penyakit campak yang ditandai dengan ruam, demam, dan gejala lainnya.',
                'ketersediaan_vaksin' => false,
                'umur_minimal' => 1,
            ],
            [
                'nama_vaksin' => 'Vaksin Hepatitis B',
                'deskripsi_vaksin' => 'Vaksin Hepatitis B digunakan untuk melindungi dari infeksi virus hepatitis B yang dapat menyebabkan kerusakan hati.',
                'ketersediaan_vaksin' => true,
                'umur_minimal' => 0,
            ],
            [
                'nama_vaksin' => 'Vaksin MR',
                'deskripsi_vaksin' => 'Vaksin MR melindungi dari campak dan rubella (gondong) yang dapat menyebabkan komplikasi serius pada anak dan wanita hamil.',
                'ketersediaan_vaksin' => true,
                'umur_minimal' => 9,
            ],
            [
                'nama_vaksin' => 'Vaksin Polio IPV',
                'deskripsi_vaksin' => 'Vaksin Polio IPV adalah jenis vaksin polio inaktif yang digunakan sebagai bagian dari upaya global untuk eradicating polio.',
                'ketersediaan_vaksin' => true,
                'umur_minimal' => 4,
            ],
        ];

        vaksin::insert($vaksin);
    }
}

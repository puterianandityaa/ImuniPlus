<?php

namespace Database\Seeders;

use App\Models\layanan_kesehatan;
use App\Models\vaksin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lakes = layanan_kesehatan::whereIn('id', [1, 2, 3, 4, 5])->get();
        $vaksin = vaksin::whereIn('id', [1, 2, 3, 4, 5, 6, 7])->get();

        foreach ($lakes as $lak) {
            $lak->vaksin()->attach($vaksin, [
                'stok_vaksin' => 10,
            ]);
        }
    }
}

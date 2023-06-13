<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Imunisasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(LakesSeeder::class);
        $this->call(VaksinSeeder::class);
        $this->call(ImunisasiSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MendaftarSeeder::class);

    }
}

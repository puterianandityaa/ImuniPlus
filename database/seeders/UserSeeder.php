<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'username' => 'johndoe',
                'phone' => '081234567891',
                'address' => 'Jl Bunga Kaktus no. 1',
                'email' => 'johndoe@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Jane Smith',
                'username' => 'janesmith',
                'phone' => '089876543210',
                'address' => 'Jl Kebayoran Lama no. 5',
                'email' => 'janesmith@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name'      => 'Bambang Bang',
                'username'  => 'joko01',
                'phone'     => '081234567890',
                'address'   => 'Jl Gunung Rinjani no. 10',
                'email'     => 'bang@gmail.com',
                'password'  => Hash::make('12345678'),
            ],
            [
                'name'      => 'Joko Wibowo',
                'username'  => 'joko01',
                'phone'     => '081234567890',
                'address'   => 'Jl Gunung Rinjani no. 10',
                'email'     => 'joko01@gmail.com',
                'password'  => Hash::make('12345678'),
            ],
            [
                'name'      => 'Floryn',
                'username'  => 'floryn123',
                'phone'     => '081234567890',
                'address'   => 'Jl Gunung Mahameru no. 39',
                'email'     => 'floryn123@gmail.com',
                'password'  => Hash::make('12345678'),
            ]
        ];

        User::insert($users);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function janjiTemu() {
        return view('admin.janjiTemu');
    }

    public function vaksin() {
        return view('admin.vaksin');
    }

    public function lakes() {
        return view('admin.lakes');
    }

    public function imunisasi() {
        return view('admin.imunisasi');
    }

    public function tambahLakes() {
        return view('admin.tambahLakes');
    }

    public function tambahImunisasi() {
        return view('admin.tambahImunisasi');
    }

    public function tambahVaksin() {
        return view('admin.tambahVaksin');
    }

    public function ubahLakes() {
        return view('admin.ubahLakes');
    }

    public function ubahImunisasi() {
        return view('admin.ubahImunisasi');
    }

    public function ubahVaksin() {
        return view('admin.ubahVaksin');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\layanan_kesehatan;
use Illuminate\Http\Request;
use App\Models\vaksin;

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

    public function uploadLakes(Request $request) {

        $lakes = new layanan_kesehatan;
        $lakes->nama_lakes = $request->name;
        $lakes->alamat = $request->address;
        $lakes->jadwal = $request->schedule;

        $lakes->save();

        return redirect()->back();
    }

    public function uploadVaksin(Request $request) {
        $vaksin = new vaksin;
        $vaksin->nama_vaksin = $request->name;
        $vaksin->deskripsi_vaksin = $request->description;
        $vaksin->ketersediaan_vaksin = $request->availability;
        $vaksin->umur_minimal = $request->min_age;

        $vaksin->save();

        return redirect()->back();
    }
}
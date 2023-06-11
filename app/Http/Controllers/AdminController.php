<?php

namespace App\Http\Controllers;

use App\Models\imunisasi;
use App\Models\layanan_kesehatan;
use Illuminate\Http\Request;
use App\Models\vaksin;

class AdminController extends Controller
{
    public function janjiTemu() {
        return view('admin.janjiTemu');
    }

    public function vaksin() {
        $vaksins = vaksin::all();
        return view('admin.vaksin', compact('vaksins'));
    }

    public function lakes() {
        $lakess = layanan_kesehatan::all();

        return view('admin.lakes', compact('lakess'));
    }

    public function imunisasi() {
        $imunisasis = imunisasi::all();

        return view('admin.imunisasi', compact('imunisasis'));
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

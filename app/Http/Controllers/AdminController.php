<?php

namespace App\Http\Controllers;

use App\Models\imunisasi;
use App\Models\layanan_kesehatan;
use App\Models\vaksin;
use Illuminate\Http\Request;

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
        $lakess = layanan_kesehatan::all();
        $vaksins = vaksin::all();

        return view('admin.tambahImunisasi', compact('lakess'), compact('vaksins'));
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

    public function uploadImunisasi(Request $request) {
        $imunisasi = new imunisasi;
        $imunisasi->id_lakes - $request->lakes;
        $imunisasi->id_vaksin = $request->vaksin;
        $imunisasi->stok_vaksin = $request->stok;

        $imunisasi->save();

        return redirect()->back();  
    }
}

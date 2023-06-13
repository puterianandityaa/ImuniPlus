<?php

namespace App\Http\Controllers;

use App\Models\imunisasi;
use App\Models\layanan_kesehatan;
use App\Models\User;
use App\Models\vaksin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function janjiTemu() {
        $table = "'mendaftars'";
        $col = "\"mendaftars.id, mendaftars.nama_anak, layanan_kesehatans.nama_lakes, vaksins.nama_vaksin, mendaftars.umur_anak, mendaftars.tanggal_imunisasi, users.address, users.phone, users.email\"";
        $join = "\"JOIN users ON users.id = mendaftars.id_user JOIN imunisasis ON imunisasis.id = mendaftars.id_imunisasi JOIN layanan_kesehatans ON layanan_kesehatans.id = imunisasis.id_lakes JOIN vaksins ON vaksins.id = imunisasis.id_vaksin\"";
        $janjiTemus = User::daftarPendaftar($col, $table, $join, "\"\"");
        return view('admin.janjiTemu', compact('janjiTemus'));
    }

    public function vaksin() {
        $table = "'vaksins'";
        $col = "\"id, nama_vaksin, deskripsi_vaksin, umur_minimal\"";
        $vaksins = vaksin::daftarVaksin($col, $table, "\"\"", "\"\"");
        return view('admin.vaksin', compact('vaksins'));
    }

    public function lakes() {
        $table = "'layanan_kesehatans'";
        $col = "\"id, nama_lakes, alamat\"";
        $lakess = layanan_kesehatan::daftarLakes($col, $table, "\"\"", "\"\"");
        return view('admin.lakes', compact('lakess'));
    }

    public function imunisasi() {
        $table = "'imunisasis'";
        $col = "\"imunisasis.id, layanan_kesehatans.nama_lakes, vaksins.nama_vaksin, imunisasis.stok_vaksin\"";
        $join = "\"JOIN layanan_kesehatans ON layanan_kesehatans.id = imunisasis.id_lakes JOIN vaksins ON vaksins.id = imunisasis.id_vaksin\"";
        $imunisasis = imunisasi::daftarImunisasi($col, $table, $join, "\"\"");
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

        $nama_lakes = $request->name;
        $alamat = $request->address;
        $jadwal = $request->schedule;
        $tbl ="\"layanan_kesehatans\"";
        $col = "\"(nama_lakes,alamat,jadwal)\"";
        $concat = "\"('$nama_lakes', '$alamat', '$jadwal')\"";
        layanan_kesehatan::tambahLakes($tbl,$col,$concat);
        //$lakes->save();
        return redirect()->back();
    }

    public function uploadVaksin(Request $request) {
        $nama_vaksin = $request->name;
        $deskripsi_vaksin = $request->description;
        $ketersediaan_vaksin = $request->availability;
        $umur_minimal = $request->min_age;
        // $vaksin->save();
        $tbl ="\"vaksins\"";
        $col = "\"(nama_vaksin, deskripsi_vaksin, ketersediaan_vaksin, umur_minimal)\"";
        $concat = "\"('$nama_vaksin', '$deskripsi_vaksin', $ketersediaan_vaksin, $umur_minimal)\"";
        vaksin::tambahVaksin($tbl,$col,$concat);

        return redirect()->back();
    }

    public function uploadImunisasi(Request $request) {
        $id_lakes = $request->lakes;
        $id_vaksin = $request->vaksin;
        $stok_vaksin = $request->stok;
        
        $tbl ="\"imunisasis\"";
        $col = "\"(id_lakes,id_vaksin,stok_vaksin)\"";
        $concat = "\"($id_lakes,$id_vaksin,$stok_vaksin)\"";
        imunisasi::tambahImunisasi($tbl,$col,$concat);


        return redirect()->back();  
    }
}

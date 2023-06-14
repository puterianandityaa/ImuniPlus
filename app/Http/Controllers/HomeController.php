<?php

namespace App\Http\Controllers;

use App\Models\imunisasi;
use App\Models\layanan_kesehatan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\vaksin;

class HomeController extends Controller
{
    public function redirect() {
        
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                return view('user.home');
            } else {
                return view('admin.home');
            }
        }
    }

    public function index() {
        return view('user.home');
        
    }

    public function about() {
        return view('user.about');
    }

    public function vaccine() {
        return view('user.vaccineView');
    }

    public function contact() {
        return view('user.contactView');
    }

    public function reservation() {
        $userId = Auth::id();
        $janjiTemus = User::daftarPendaftar(
            "\"mendaftars.nama_anak, vaksins.nama_vaksin, layanan_kesehatans.nama_lakes, mendaftars.tanggal_imunisasi\"",
            "\"mendaftars\"",
            "\"JOIN users ON users.id = mendaftars.id_user JOIN imunisasis ON imunisasis.id = mendaftars.id_imunisasi JOIN layanan_kesehatans ON layanan_kesehatans.id = imunisasis.id_lakes JOIN vaksins ON vaksins.id = imunisasis.id_vaksin\"",
            "\"users.id = $userId\""
        );
            
        $vaksins = vaksin::daftarVaksin(
            "\"id, nama_vaksin\"",
            "'vaksins'",
            "\"\"", 
            "\"\""
        );

        $lakess = layanan_kesehatan::daftarLakes(
            "\"layanan_kesehatans.id, layanan_kesehatans.nama_lakes, layanan_kesehatans.jadwal\"",
            "\"layanan_kesehatans\"",
            "\"JOIN imunisasis ON imunisasis.id_lakes = layanan_kesehatans.id JOIN vaksins ON vaksins.id = imunisasis.id_vaksin\"",
            "\"imunisasis.id_vaksin = vaksins.id\"");
            
        return view('user.reservation', compact('vaksins', 'lakess',  'janjiTemus'));
    }

    public function uploadReservation(Request $request){
        $nama_anak = $request->kid_name;
        $umur_anak = $request->kid_age;
        $tgl_lahir = $request->kid_birth;
        $vaksin = $request->vaccine;
        $lakes = $request->hospital;
        $jadwal = $request->date;
        $userId = Auth::id();

        $imunisasi = User::daftarPendaftar(
            "\"id\"",
            "\"imunisasis\"",
            "\"\"",
            "\"imunisasis.id_lakes=$lakes AND imunisasis.id_vaksin=$vaksin\""
        );
        $id_imunisasi = $imunisasi[0]->id;

        $tbl ="\"mendaftars\"";
        $col = "\"(id_user,id_imunisasi,nama_anak,umur_anak,tanggal_lahir)\"";
        $concat = "\"('$userId','$id_imunisasi','$nama_anak', '$umur_anak', '$tgl_lahir')\"";

        User::tambahPendaftar($tbl,$col,$concat);
        return redirect('/reservation');
    }

    public function getDaftarLakes(Request $request)
    {
        $vaksin = $request->id_vaksin;

        $lakess = layanan_kesehatan::daftarLakes(
            "\"layanan_kesehatans.id, layanan_kesehatans.nama_lakes, imunisasis.tanggal_imunisasi\"",
            "'layanan_kesehatans'",
            "\"JOIN imunisasi ON imunisasis.id_lakes = layanan_kesehatans.id JOIN vaksins ON vaksins.id = imunisasis.id_vaksins\"",
            "\"imunisasis.id_vaksins = $vaksin\""
        );
        echo $vaksin;
        return response()->json($lakess);
    }

    public function profile() {
        return view('user.profile');
    }
}

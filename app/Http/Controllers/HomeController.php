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
        // $vaksin = vaksin::daftarVaksin();
        // $lakes = layanan_kesehatan::daftarLakes();
        return view('user.reservation', compact('vaksin', 'lakes'));
    }

    public function profile() {
        return view('user.profile');
    }
}

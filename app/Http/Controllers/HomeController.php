<?php

namespace App\Http\Controllers;

use App\Models\Skp;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function superadmin()
    {
        $pegawai = Pegawai::count();
        $skp = Skp::count();
        return view('admin.home',compact('pegawai','skp'));
    }
    
    public function pegawai()
    {
        return view('pegawai.home');
    }
}

<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        if (Auth::attempt(['username' => $req->username, 'password' => $req->password])) {
            if (Auth::user()->hasRole('superadmin')) {
                return redirect('/home/superadmin');
            }else{
                return redirect('/home/pegawai');
            }
        } else {
            toastr()->error('Username / Password Tidak Ditemukan');
            $req->flash();
            return back();
        }
    }
    
    public function logout()
    {
        return redirect('/');
    }
}

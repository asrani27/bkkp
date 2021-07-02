<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenilaiController extends Controller
{
    public function index()
    {
        $data = Auth::user()->pegawai;
        $pegawai = Pegawai::where('id', '!=', Auth::user()->pegawai->id)->get();
        return view('pegawai.penilai.index',compact('data','pegawai'));
    }

    public function update(Request $req)
    {
        $data = Auth::user()->pegawai->update([
            'pejabat_penilai' => $req->pegawai_id
        ]);
        toastr()->success('berhasil Diupdate');
        return back();
    }
}

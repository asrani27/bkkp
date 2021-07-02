<?php

namespace App\Http\Controllers;

use App\Models\Skp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealisasiController extends Controller
{
    public function index()
    {
        $data = Skp::where('pegawai_id',Auth::user()->pegawai->id)->paginate(10);
        
        return view('pegawai.realisasi.index',compact('data'));
    }

    public function isi($id)
    {
        $data = Skp::find($id);
        return view('pegawai.realisasi.isi',compact('data'));
    }
    
    public function edit($id)
    {
        $data = Skp::find($id);
        return view('pegawai.realisasi.edit',compact('data'));
    }

    public function store(Request $req, $id)
    {
        Skp::find($id)->update([
            'realisasi' => $req->realisasi,
        ]);
        toastr()->success('berhasil Disimpan');
        return redirect('/pegawai/realisasi');
    }
    
    public function update(Request $req, $id)
    {
        Skp::find($id)->update([
            'realisasi' => $req->realisasi,
        ]);
        toastr()->success('berhasil Diupdate');
        return redirect('/pegawai/realisasi');
    }
}

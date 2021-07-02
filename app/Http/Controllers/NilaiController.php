<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function index()
    {
        $check = Pegawai::where('pejabat_penilai',Auth::user()->pegawai->id)->first();
        if($check == null)
        {
            toastr()->error('anda tidak memiliki pegawai untuk dinilai');
            return back();
        }else{
            $data = Nilai::where('pejabat_penilai',Auth::user()->pegawai->id)->paginate(10);
            return view('pegawai.nilai.index',compact('data'));
        }
    }

    public function create()
    {
        $pegawai = Pegawai::where('pejabat_penilai',Auth::user()->pegawai->id)->get();
        return view('pegawai.nilai.create',compact('pegawai'));
    }

    public function store(Request $req)
    {
        $check = Nilai::where('pegawai_id', $req->pegawai_id)->where('tahun', $req->tahun)->first();
        if($check == null){
            $attr = $req->all();
            $attr['pejabat_penilai'] = Auth::user()->pegawai->id;
            Nilai::create($attr);
            toastr()->success('Berhasil Di Simpan');
            return redirect('/pegawai/nilai');
        }else{
            toastr()->error('pegawai ini pada tahun ini telah dinilai');
            return back();
        }
    }

    public function destroy($id)
    {
        Nilai::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Nilai::find($id);
        $pegawai = Pegawai::where('pejabat_penilai',Auth::user()->pegawai->id)->get();
        return view('pegawai.nilai.edit',compact('data','pegawai'));
    }
    
    public function update(Request $req, $id)
    {
        $attr = $req->all();
        Nilai::find($id)->update($attr);
        toastr()->success('Berhasil Di Simpan');
        return redirect('/pegawai/nilai');
    }
}

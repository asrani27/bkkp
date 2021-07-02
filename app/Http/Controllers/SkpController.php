<?php

namespace App\Http\Controllers;

use App\Models\Skp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkpController extends Controller
{
    public function index()
    {
        $data = Skp::where('pegawai_id',Auth::user()->pegawai->id)->paginate(10);
        
        return view('pegawai.skp.index',compact('data'));
    }

    public function create()
    {
        return view('pegawai.skp.create');
    }

    public function edit($id)
    {
        $data = Skp::find($id);
        return view('pegawai.skp.edit',compact('data'));
    }

    public function update(Request $req, $id)
    {
        Skp::find($id)->update($req->all());
        
        toastr()->success('berhasil diupdate');
        return redirect('pegawai/skp');
        
    }

    public function store(Request $req)
    { 
        $attr = $req->all();
        $attr['pegawai_id'] = Auth::user()->pegawai->id;

        Skp::create($attr);
        toastr()->success('berhasil disimpan');
        return redirect('/pegawai/skp');
    }

    public function destroy($id)
    {
        Skp::find($id)->delete();
        toastr()->success('berhasil dihapus');
        return back();
    }
}

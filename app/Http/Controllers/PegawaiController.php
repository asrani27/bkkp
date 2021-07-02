<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::paginate(10);
        return view('admin.pegawai.index',compact('data'));
    }

    public function create()
    {
        return view('admin.pegawai.create');
    }

    public function edit($id)
    {
        $data = Pegawai::find($id);
        return view('admin.pegawai.edit',compact('data'));
    }

    public function update(Request $req, $id)
    {
        Pegawai::find($id)->update($req->all());

        if($req->password != null){
            Pegawai::find($id)->user->update([
                'password' => bcrypt($req->password)
            ]);
        }
        
        toastr()->success('berhasil diupdate');
        return redirect('superadmin/pegawai');
        
    }

    public function store(Request $req)
    { 
        $cekNip = Pegawai::where('nip', $req->nip)->first();
        $cekUsername = User::where('username', $req->username)->first();
        if($cekNip == null && $cekUsername == null){
            $user['name'] = $req->nama;
            $user['username'] = $req->username;
            $user['password'] = bcrypt($req->password);
            
            $u = User::create($user);

            $attr = $req->all();
            $attr['users_id']= $u->id;

            Pegawai::create($attr);
    
    
            $role = Role::where('name', 'pegawai')->first();
            
            $u->roles()->attach($role);
            toastr()->success('berhasil disimpan');
            return redirect('superadmin/pegawai');
        }else{
            toastr()->error('NIP/username sudah ada');
            return back();
        }
    }

    public function destroy($id)
    {
        Pegawai::find($id)->user()->delete();
        Pegawai::find($id)->delete();
        toastr()->success('berhasil dihapus');
        return back();
    }
}

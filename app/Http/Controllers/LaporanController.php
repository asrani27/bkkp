<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index()
    {
        $data = Nilai::where('pegawai_id', Auth::user()->pegawai->id)->paginate(10);
        return view('pegawai.laporan.index',compact('data'));
    }

    public function cetak($id)
    {
        // $data = Transaksi::where('status_bayar', 1)->selectRaw('year(created_at) year, monthname(created_at) month, sum(total) total')
        // ->groupBy('year','month')->orderBy('year', 'desc')->get();
        $data = Nilai::find($id);
        $pdf = PDF::loadView('pegawai.cetak',compact('data'))->setPaper('legal','landscape');
        return $pdf->stream();
    }

    public function s_skp()
    {
        $data = Pegawai::with('skp')->paginate(10);
        return view('admin.laporan.skp',compact('data'));
    }

    public function cetakSkp()
    {
        $data = Pegawai::get();
        $pdf = PDF::loadView('admin.laporan.cetakskp',compact('data'))->setPaper('legal','landscape');
        return $pdf->stream();
    }

    public function s_pegawai()
    {
        $data = Pegawai::paginate(10);
        return view('admin.laporan.pegawai',compact('data'));
    }

    public function cetakSkpPegawai($id)
    {   
        $data = Pegawai::find($id);
        $pdf = PDF::loadView('admin.laporan.cetakskppegawai',compact('data'))->setPaper('legal','landscape');
        return $pdf->stream();
    }

    public function cetakpegawai()
    {   
        $data = Pegawai::get();
        $pdf = PDF::loadView('admin.laporan.cetakpegawai',compact('data'))->setPaper('legal','landscape');
        return $pdf->stream();
    }
}

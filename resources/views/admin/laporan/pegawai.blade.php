@extends('layouts.app')

@push('css')
  <link rel="stylesheet" href="/theme/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
    SUPERADMIN
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        
        <div class="row">
            <div class="col-12">
              <a href="/superadmin/laporan/pegawai/cetak" class="btn btn-sm btn-danger"><i class="fas fa-file"></i> Cetak Laporan</a>
           
              
            </div>
        </div>
        
    </div>
</div>

@endsection

@push('js')
@endpush
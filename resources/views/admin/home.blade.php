@extends('layouts.app')

@section('content') 
<div class="row">
    <!-- ./col -->
    <div class="col-lg-6 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$pegawai}}</h3>

          <p>Jumlah Pegawai</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="/admin/pegawai" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-6 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{$skp}}</h3>

          <p>Jumlah SKP</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="/admin/skp" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
</div>
<div class="row">
  <div class="col-lg-12 col-12 text-center">
    {{-- <img src="/themeadmin/logo.png" alt="Logo" width="45%"> --}}
  </div>
</div>
@endsection
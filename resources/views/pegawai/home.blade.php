@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-12 col-12">
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-info"></i> Selamat Datang, {{Auth::user()->name}}!</h5>
      Di Aplikasi SKP Pegawai
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 col-12">
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle" src="https://p.kindpng.com/picc/s/78-786207_user-avatar-png-user-avatar-icon-png-transparent.png" alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">{{Auth::user()->pegawai->nama}}</h3>

        <p class="text-muted text-center">{{Auth::user()->pegawai->nip}}</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Pangkat</b> <a class="float-right">{{Auth::user()->pegawai->pangkat}}</a>
          </li>
          <li class="list-group-item">
            <b>Golongan</b> <a class="float-right">{{Auth::user()->pegawai->golongan}}</a>
          </li>
          <li class="list-group-item">
            <b>Jabatan</b> <a class="float-right">{{Auth::user()->pegawai->jabatan}}</a>
          </li>
        </ul>

        <a href="#" class="btn btn-primary btn-block"><b>Profil</b></a>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
@endsection
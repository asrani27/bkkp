@extends('layouts.app')

@push('css')

<link rel="stylesheet" href="/theme/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
    PEGAWAI
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="/superadmin/pegawai" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a><br /><br />
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title"></h3>
                        Edit Data Pegawai
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 300px;">
                          {{-- <input type="text" name="table_search" class="form-control float-right" placeholder="Cari NIP / Nama">
      
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div> --}}
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <form class="form-horizontal" method="POST" action="/superadmin/pegawai/edit/{{$data->id}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nip" value="{{$data->nip}}" placeholder="NIP" required   minlength="18" maxlength="18">
                                    @if ($errors->has('nip'))
                                        <span class="text-danger">{{ $errors->first('nip') }}</span>
                                    @endif
                                </div>
                                </div>
        
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pegawai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama"  value="{{$data->nama}}" placeholder="Agung Saptoto, M.Kom" required>
                                </div>
                                </div>
        
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Pangkat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pangkat"   value="{{$data->pangkat}}" required>
                                </div>
                                </div>
        
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Golongan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="golongan"  value="{{$data->golongan}}" required>
                                </div>
                                </div>
        
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jabatan"  value="{{$data->jabatan}}" required>
                                </div>
                                </div>
        
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Unit kerja</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="unit_kerja"  value="{{$data->unit_kerja}}" required>
                                </div>
                                </div>
                                
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    kosongkan password jika tidak ingin di ubah
                                </div>
                                </div>

                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="username"  value="{{$data->unit_kerja}}"  readonly>
                                </div>
                                </div>
                                
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="password"  value="">
                                </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                            </div>
                        <!-- /.card-footer -->
                        </form>
                    </div>
                    
                    <!-- /.card-body -->
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')


<script src="/theme/plugins/select2/js/select2.full.min.js"></script>
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
  
      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    })
</script>  
@endpush
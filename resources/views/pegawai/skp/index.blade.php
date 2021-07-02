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
        
        <div class="row">
            <div class="col-12">
              <a href="/pegawai/skp/add" class="btn btn-sm btn-primary"><i class="fas fa-file"></i> Tambah Skp</a>
              <br/><br/>
              
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data SKP Pegawai</h3>
  
                  <div class="card-tools">
                    <form method="get" action="/pegawai/skp/search">
                    <div class="input-group input-group-sm" style="width: 300px;">
                      <input type="text" name="search" class="form-control input-sm float-right" value="{{old('search')}}" placeholder="Cari SKP">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap table-sm">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tugas</th>
                        <th>Kuantitas</th>
                        <th>Kualitas</th>
                        <th>Waktu</th>
                        
                        <th>Biaya</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    @php
                        $no =1;
                    @endphp
                    <tbody>
                    @foreach ($data as $key => $item)
                          <tr>
                            <td>{{$key+ $data->firstItem()}}</td>
                            <td>{{$item->tugas}}</td>
                            <td>{{$item->kuantitas}}</td>
                            <td>{{$item->kualitas}}</td>
                            <td>{{$item->waktu}}</td>
                            <td>{{$item->biaya}}</td>
                            <td>
                              
                            <a href="/pegawai/skp/edit/{{$item->id}}" class="btn btn-xs btn-warning" data-toggle="tooltip" title='Edit data'><i class="fas fa-edit"></i></a>
                            <a href="/pegawai/skp/delete/{{$item->id}}" class="btn btn-xs btn-danger" data-toggle="tooltip" title='Hapus data' onclick="return confirm('Yakin ingin di hapus?');"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            {{$data->links()}} 
            </div>
        </div>
        
    </div>
</div>

@endsection

@push('js')
@endpush
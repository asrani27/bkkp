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
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Realisasi SKP Pegawai</h3>
  
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
                        <th>Realisasi</th>
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
                              @if ($item->realisasi == null)
                                <a href="/pegawai/realisasi/isi/{{$item->id}}" class="btn btn-xs btn-warning" data-toggle="tooltip" title='Edit data'>Isi Realisasi</a>
                              @else
                              {{$item->realisasi}}
                              <a href="/pegawai/realisasi/edit/{{$item->id}}" class="btn btn-xs btn-warning" data-toggle="tooltip" title='Edit data'>Edit Realisasi</a>
                              @endif                          
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
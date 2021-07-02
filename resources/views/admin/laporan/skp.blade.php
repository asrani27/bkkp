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
              <a href="/superadmin/laporan/skp/cetak" class="btn btn-sm btn-danger"><i class="fas fa-file"></i> Cetak Laporan</a>
              <br/><br/>
              
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Laporan</h3>
  
                  <div class="card-tools">
                    <form method="get" action="/superadmin/pegawai/search">
                    <div class="input-group input-group-sm" style="width: 300px;">
                      <input type="text" name="search" class="form-control input-sm float-right" value="{{old('search')}}" placeholder="Cari NIP / Nama">
  
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
                        <th>Nama/NIP/Jabatan/pangkat</th>
                        <th>Detail SKP</th>
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
                            <td>
                                {{$item->nama}}<br/>                               
                                {{$item->nip}}<br/>                            
                                {{$item->pangkat}}<br/>                        
                                {{$item->jabatan}}<br/> 
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <th>Tugas</th>
                                        <th>Kualitas</th>
                                        <th>Kuantitas</th>
                                        <th>Waktu</th>
                                        <th>Biaya</th>
                                        <th>Realisasi</th>
                                    </tr>
                                    @foreach ($item->skp as $item2)
                                    <tr>
                                        <td>{{$item2->tugas}}</td>
                                        <td>{{$item2->kualitas}}</td>
                                        <td>{{$item2->kuantitas}}</td>
                                        <td>{{$item2->waktu}}</td>
                                        <td>{{$item2->biaya}}</td>
                                        <td>{{$item2->realisasi}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                </td>
                              
                                <td>            
                                    <a href="/superadmin/laporan/skp/pegawai/cetak/{{$item->id}}" class="btn btn-xs btn-danger" data-toggle="tooltip" title='cetak data'>Cetak</a>
                                </td>
                            {{-- <a href="/superadmin/pegawai/delete/{{$item->id}}" class="btn btn-xs btn-danger" data-toggle="tooltip" title='Hapus data' onclick="return confirm('Yakin ingin di hapus?');"><i class="fas fa-trash"></i></a> --}}
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
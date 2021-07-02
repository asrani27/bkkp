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
        
        <a href="/pegawai/nilai/add" class="btn btn-sm btn-primary"><i class="fas fa-file"></i> Tambah Penilaian</a>
        <br/><br/>
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Nilai Kinerja Pegawai</h3>
                  
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap table-sm">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tahun</th>
                        <th>Nama</th>
                        <th>Nilai SKP</th>
                        <th>Nilai Perilaku Kerja</th>
                        <th>Nilai Kinerja Pegawai</th>
                      </tr>
                    </thead>
                    @php
                        $no =1;
                    @endphp
                    <tbody>
                    @foreach ($data as $key => $item)
                          <tr>
                            <td>{{$key+ $data->firstItem()}}</td>
                            <td>{{$item->tahun}}</td>
                            <td>{{$item->pegawai->nama}}</td>
                            <td>{{$item->nilai_skp}}</td>
                            <td>{{$item->nilai_perilaku}}</td>
                            <td>{{$item->nilai_kinerja}}</td>
                            <td>    
                                
                              
                            <a href="/pegawai/nilai/edit/{{$item->id}}" class="btn btn-xs btn-warning" data-toggle="tooltip" title='Edit data'><i class="fas fa-edit"></i></a>
                            <a href="/pegawai/nilai/delete/{{$item->id}}" class="btn btn-xs btn-danger" data-toggle="tooltip" title='Hapus data' onclick="return confirm('Yakin ingin di hapus?');"><i class="fas fa-trash"></i></a>
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
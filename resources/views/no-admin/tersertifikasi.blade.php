@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Laporan Data / Tersertifikasi'}}
    @endsection
    @section('title')
        {{'Laporan Data yang Tersertifikasi'}}
    @endsection

<!-- Content Row -->
    <div class="card shadow mb-3 ">
        <div class="card-header py-2 "style="background-color: #40B9CB;">
            <h6 class="m-0 font-weight-bold text-white text-center">Tabel Data Aset</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-bordered" id="example" style="width:100%">
                    <thead>
                    <tr>
                        {{-- <th>NO</th> --}}
                        <th>ID</th>
                        <th>Nama Pemilik</th>
                        <th>NO Sertifikat</th>
                        <th>Keterangan Pemilik</th>
                        {{-- <th>Status Aset</th> --}}
                        {{-- <th>Luas Aset</th> --}}
                        {{-- <th>Kondisi Aset</th>
                        <th>Kondisi Geografis</th>
                        <th>Asal Usul</th>
                        <th>Tahun Kepemilikan</th>
                        <th>Tahun Pembangunan</th>
                        <th>Tahun Rehab</th> --}}
                        {{-- <th>Keterangan</th> --}}
                        <th width="280px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pemilik as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->aset->no_sertifikat}}</td>
                        <td>{{ $item->keterangan}}</td>
                       {{--   <td>{{ $aset->no_sertifikat }}</td>
                        <td>{{ $aset->nama_aset }}</td>
                        <td>{{ $aset->alamat_aset }}</td>
                        <td>{{ $aset->status_aset }}</td> --}}
                        {{-- <td>{{ $aset->luas_aset }}</td>
                        <td>{{ $aset->kondisi_aset }}</td>
                        <td>{{ $aset->kondisi_geografis }}</td>
                        <td>{{ $aset->asalusul_aset }}</td>
                        <td>{{ $aset->th_kepemilikam }}</td>
                        <td>{{ $aset->th_pembangunan }}</td>
                        <td>{{ $aset->th_rehab }}</td> --}}
                        {{-- <td>{{ $aset->keterangan_aset }}</td> --}}
                        <td>
                            
                            <form action="{{ route('pemilik.destroy',$item->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('pemilik.show',$item->id) }}">Detail</a>
                            
                                {{-- <a class="btn btn-primary" href="{{ route('pemilik.edit',$item->id) }}">Edit</a> --}}
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                                
                                {{-- <a class="btn btn-primary" href="{{ route('asets.edit',$aset->id) }}">Edit Belum Terserifikasi</a> --}}
                                
                                
                            </form>
                            {{-- <form action="{{ route('pemilik.destroy',$aset->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('pemilik.edit',$aset->id) }}">Edit Tersertifikasi</a>

                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> --}}
        {{-- <div class="modal-body">
            @foreach ($asets as $aset)
            <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>No Sertifikat:</td>
                            <td>{{ $aset->no_sertifikat }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Nama Aset:</td>
                            <td>{{ $aset->nama_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Alamat:</td>
                            <td>{{ $aset->alamat_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Luas Aset:</td>
                            <td>{{ $aset->luas_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Status Aset:</td>
                            <td>{{ $aset->status_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Kondisi Aset:</td>
                            <td>{{ $aset->kondisi_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Kondisi Geografis:</td>
                            <td>{{ $aset->kondisi_geografis }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Asal Aset</td>
                            <td>{{ $aset->asalusul_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Tahun Kepemilikan</td>
                            <td>{{ $aset->th_kepemilikan }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Tahun Pembangunan</td>
                            <td>{{ $aset->th_pembangunan }}</td>
                        </tr>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Tahun Rehab</td>
                            <td>{{ $aset->th_rehab }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Keterangan</td>
                            <td>{{ $aset->keterangan_aset }}</td>
                        </tr>
                    </div>
                </div>
            </table>
            @endforeach
        </div> --}}
        {{-- <div class="modal-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <tr>
                        <td>Nama Pemilik</td>
                        <td>:</td>
                        <td>{{ $item->nama }}</td>
                    </tr>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <tr>
                        <td>Nama Pemilik</td>
                        <td>:</td>
                        <td>{{ $item->aset_id }}</td>
                    </tr>
                </div>
            </div>
        </div> --}}
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>  --}}

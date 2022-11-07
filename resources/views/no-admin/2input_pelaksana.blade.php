@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
{{-- @section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection -->

<!-- @section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection --}}

<!-- Content Row -->

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<!-- <div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">Input Data Pelaksana</h4>
            <div class="row ">
                <div class="col-md-8 mb-4">
                    <div class="justify-content-between ">
                        <h2 class="col-10">Data Masukan Barang</h2>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-right ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPelaksana">
                            Tambah Data Barang
                        </button>
                    </div>
                </div>
            </div>
            <form action="postdata" method="POST">
                @csrf
                <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Nama CV Pelaksana</label>
                            <input class="form-control" type="text" name="pt_pelaksana" value="{{ old('pt_pelaksana') }}" placeholder="CV Pelaksana">
                            <small class="text-danger">{{ $errors->first('pt_pelaksana') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Alamat</label>
                            <textarea class="form-control" name="alamat" value="{{ old('alamat') }}" rows="4" placeholder="Alamat"></textarea>
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Penanggung Jawab Pelaksana</label>
                            <input class="form-control" type="text" name="nama_pelaksana" value="{{ old('nama_pelaksana') }}" placeholder="Nama Pelaksana">
                            <small class="text-danger">{{ $errors->first('nama_pelaksana') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Jabatan Penanggung Jawab Pelaksana</label>
                            <input class="form-control" type="text" name="jabatan_pelaksana" value="{{ old('jabatan_pelaksana') }}" placeholder="Jabatan Pelaksana">
                            <small class="text-danger">{{ $errors->first('jabatan_pelaksana') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Kode Rekening</label>
                            <input class="form-control" id="text" name="kode_rekening" value="{{ old('kode_rekening') }}" placeholder="Kode Rekening">
                            <small class="text-danger">{{ $errors->first('kode_rekening') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">NPWP</label>
                            <input class="form-control" id="text" name="npwp" value="{{ old('npwp') }}" placeholder="NPWP">
                            <small class="text-danger">{{ $errors->first('npwp') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Telephone</label>
                            <input class="form-control" type="text" name="tlp" value="{{ old('tlp') }}" placeholder="Telepon">
                            <small class="text-danger">{{ $errors->first('tlp') }}</small>
                        </div>
                    </div>
                </table>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                    <div class="form-group text-center">
                        <tr>
                            <td>
                                <br>
                                <button type="submit" class="btn btn-success text-center">Submit</button>
                                <a href="/home" class="btn btn-light text-center">Kembali</a>
                            </td>
                        </tr>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="row ">
                    <div class="col-md-8 mb-4">
                        <div class="justify-content-between ">
                            <h2 class="col-10">Data Masukan Pelaksana</h2>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="text-right ">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPelaksana">
                                Tambah Data Pelaksana
                            </button>
                        </div>
                    </div>
                </div>
                <br>

                <table id="data1" class="table table-bordered" cellspacing="0">
                    {{-- <table id="data1" class="table table-bordered" cellspacing="0" width="100%"> --}}
                    {{-- <table class="table table-bordered " id="data1" style="width:100%"> --}}
                    {{-- <table class="table table-bordered" id="example"> --}}
                    <thead>
                        <tr>
                            <th>Nama CV Pelaksana</th>
                            <th>Alamat</th>
                            <th>Telephone</th>
                            <th> Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelaksana as $pelaksana)
                        <tr>
                            <td>{{ $pelaksana->pt_pelaksana }}</td>
                            <td>{{ $pelaksana->alamat }}</td>
                            <td>{{ $pelaksana->tlp}}</td>

                            <td>

                                {{-- <form action="{{ route('pelaksana.destroy',$pelaksana->id) }}" method="POST">

                                    <a class="btn btn-info btn-lg" href="{{ route('pelaksana.show',$pelaksana->id) }}">

                                        Detail

                                    </a>
                                    <a  class="btn btn-info btn-lg" href="{{ route('pelaksana.edit',$pelaksana->id) }}">
                                        Edit
                                    </a>

                                    <a id="{{$pelaksana->id}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditPelaksana">
                                        Edit
                                    </a>
                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditPelaksana">
                                        Edit
                                    </button> --}}
                                    {{-- <a id="{{$pelaksana->id}}" class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#modalEditPelaksana"
                                        data-attr="{{ route('pelaksana.edit', $pelaksana->id) }}">
                                        <i class="fas fa-edit text-gray-300"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')

                                    <button type=" submit" class="btn btn-danger btn-lg">
                                        Hapus
                                    </button>
                                </form> --}}

                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditPelaksana-{{$pelaksana->id}}">
                                    Edit
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <div class="form-group text-center">
                    <tr>
                        <td>
                            <br>
                            <a href="/home" class="btn btn-success text-center">Kembali</a>
                        </td>
                    </tr>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Tambah Pelaksana --}}
<div class="modal fade" id="modalPelaksana" tabindex="-1" role="dialog" aria-labelledby="modalPelaksanaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Input Data Pelaksana</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                {{-- <form method="POST" action="{{ route('pelaksana.store') }}" id="postdata"> --}}
                <form method="POST" action="postdata">
                    @csrf
                    <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                        <div>
                        <div class="mb-4">
                            <label for="message-text" class="col-form-label">Nama CV Pelaksana</label>
                            <input type="text" class="form-control" id="pt_pelaksana" name="pt_pelaksana" value="{{ old('pt_pelaksana') }}" placeholder="CV Pelaksana">
                            <small class="text-danger">{{ $errors->first('pt_pelaksana') }}</small>
                        </div>
                        <div class="mb-4">
                            <label for="message-text" class="col-form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat">
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        </div>
                        <div class="mb-4">
                            <label for="message-text" class="col-form-label">Nama Penanggung Jawab Pelaksana</label>
                            <input type="text" class="form-control" id="nama_pelaksana" name="nama_pelaksana" value="{{ old('nama_pelaksana') }}" placeholder="Nama Pelaksana">
                            <small class="text-danger">{{ $errors->first('nama_pelaksana') }}</small>
                        </div>
                        <div class="mb-4">
                            <label for="message-text" class="col-form-label">Jabatan Penanggung Jawab Pelaksana</label>
                            <input type="text" class="form-control" id="jabatan_pelaksana" name="jabatan_pelaksana" value="{{ old('jabatan_pelaksana') }}" placeholder="Jabatan Pelaksana">
                            <small class="text-danger">{{ $errors->first('jabatan_pelaksana') }}</small>
                        </div>
                        <div class="mb-4">
                            <label for="message-text" class="col-form-label">Kode Rekening</label>
                            <input type="text" class="form-control" id="kode_rekening" name="kode_rekening" value="{{ old('kode_rekening') }}" placeholder="Kode Rekening">
                            <small class="text-danger">{{ $errors->first('kode_rekening') }}</small>
                        </div>
                        <div class="mb-4">
                            <label for="message-text" class="col-form-label">NPWP</label>
                            <input type="text" class="form-control" id="npwp" name="npwp" value="{{ old('npwp') }}" placeholder="NPWP">
                            <small class="text-danger">{{ $errors->first('npwp') }}</small>
                        </div>
                        <div class="mb-4">
                            <label for="message-text" class="col-form-label">Telephone</label>
                            <input type="text" class="form-control" id="tlp" name="tlp" value="{{ old('tlp') }}" placeholder="Telephone">
                            <small class="text-danger">{{ $errors->first('tlp') }}</small>
                        </div>
                        </div>
                    </table>

                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary ">Simpan <i class="fa fa-save"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit Pelaksana --}}
@foreach ( $pelaksana as $plk )
{{-- <div class="modal fade" id="modalEditPelaksana-{{$pelaksana}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPelaksanaLabel" aria-hidden="true"> --}}
<div class="modal fade" id="modalEditPelaksana-{{$plk->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPelaksanaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Data Pelaksana</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                {{-- <form method="POST" action="{{ route('pelaksana.update',$pelaksana->id) }}"> --}}
                <form action="" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Nama CV Pelaksana</label>
                        <input type="text" class="form-control" id="pt_pelaksana" name="pt_pelaksana" value="{{ $pelaksana->pt_pelaksana }}" placeholder="CV Pelaksana">
                        <small class="text-danger">{{ $errors->first('pt_pelaksana') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pelaksana->alamat }}" placeholder="Alamat">
                        <small class="text-danger">{{ $errors->first('alamat') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Nama Penanggung Jawab Pelaksana</label>
                        <input type="text" class="form-control" id="nama_pelaksana" name="nama_pelaksana" value="{{ $pelaksana->nama_pelaksana }}" placeholder="Nama Pelaksana">
                        <small class="text-danger">{{ $errors->first('nama_pelaksana') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Jabatan Penanggung Jawab Pelaksana</label>
                        <input type="text" class="form-control" id="jabatan_pelaksana" name="jabatan_pelaksana" value="{{ $pelaksana->jabatan_pelaksana }}" placeholder="Jabatan Pelaksana">
                        <small class="text-danger">{{ $errors->first('jabatan_pelaksana') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Kode Rekening</label>
                        <input type="text" class="form-control" id="kode_rekening" name="kode_rekening" value="{{ $pelaksana->kode_rekening }}" placeholder="Kode Rekening">
                        <small class="text-danger">{{ $errors->first('kode_rekening') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" value="{{ $pelaksana->npwp }}" placeholder="NPWP">
                        <small class="text-danger">{{ $errors->first('npwp') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Telephone</label>
                        <input type="text" class="form-control" id="tlp" name="tlp" value="{{ $pelaksana->tlp }}" placeholder="Telephone">
                        <small class="text-danger">{{ $errors->first('tlp') }}</small>
                    </div>
                    
                    
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary ">Simpan <i class="fa fa-save"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
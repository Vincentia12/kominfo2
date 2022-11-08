@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
{{-- <!-- @section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection -->
<!-- @section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection --> --}}

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


<!-- Modal Tambah Barang  -->
<div class="modal fade" id="modalBarang" tabindex="-1" role="dialog" aria-labelledby="modalBarangLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Data Masukan Barang</b></h5>
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
                <form method="POST" action="postbarang" id="postbarang">
                    @csrf
                    <div class="mb-4">
                        <label for="recipient-name" class="col-form-label">Jenis Pengadaan</label>
                        <select class="form-control" name="pengadaan_id" id="pengadaan_id" placeholder="Pilih Pengadaan">
                            <option value="">Pilih Jenis Pengadaan</option>
                            @foreach ($pengadaan as $item)
                            <option value="{{$item->id}}">{{ $item->jenis_pengadaan }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('jenis_pengadaan') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang">
                        <small class="text-danger">{{ $errors->first('barang') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Jumlah Barang">
                        <small class="text-danger">{{ $errors->first('jumlah_barang') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Satuan</label>
                        <select class="form-control" name="satuan" id="satuan" placeholder="Pilih">
                            <option>Buah</option>
                            <option>Pack</option>
                            <option>Lusin</option>
                            <option>Karton</option>
                        </select>
                        <small class="text-danger">{{ $errors->first('satuan') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Harga Satuan</label>
                        <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="1.200.000">
                        <small class="text-danger">{{ $errors->first('harga_satuan') }}</small>
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

<!-- Modal Edit Barang -->
@foreach ( $barang as $br )
<div class="modal fade" id="modalEditBarang{{$br->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditBarangLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Data Pengadaan</b></h5>
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
                <form method="POST" action="{{ url('barang/update', $br->id) }}">
                    @csrf
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Jenis Pengadaan</label>

                        <select class="form-control" name="pengadaan_id">
                            <option value="{{$br->pengadaan_id}}">{{ $br->jenis_pengadaan }} </option>
                            <option><br></option>

                            <option value="">Pilih PT</option>
                            @foreach ($pengadaan as $item)
                            <option value="{{$item->id}}">-{{ $item->jenis_pengadaan }} </option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('jenis_pengadaan') }}</small>

                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="barang" name="barang" value="{{ $br->barang }}" placeholder="Pengadaan ...">
                        <small class="text-danger">{{ $errors->first('barang') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Jumlah Barang</label>
                        <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ $br->jumlah_barang }}" placeholder="10000000">
                        <small class="text-danger">{{ $errors->first('jumlah_barang') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Satuan</label>
                        <select class="form-control" name="satuan" id="satuan" value="{{ $br->satuan }}" placeholder="Pilih">
                            <option>Buah</option>
                            <option>Pack</option>
                            <option>Lusin</option>
                            <option>Karton</option>
                        </select>
                        <small class="text-danger">{{ $errors->first('satuan') }}</small>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Harga Satuan</label>
                        <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" value="{{ $br->harga_satuan }}" placeholder="10000000">
                        <small class="text-danger">{{ $errors->first('harga_satuan') }}</small>
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

<!-- Modal Detail Barang -->
@foreach ( $barang as $detail )
<div class="modal fade" id="modalDetailBarang{{$detail->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditBarangLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Detail Data Barang</b></h5>
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
                <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12"> --}}
                    <div class="mb-4">
                        <div class="form-group">
                            <tr>
                                <td>Jenis Pengadaan</td>
                                <td>:</td>
                                <td>{{ $detail->jenis_pengadaan }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Nama Barang</td>
                                <td>:</td>
                                <td>{{ $detail->barang }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Jumlah Barang</td>
                                <td>:</td>
                                <td>{{ $detail->jumlah_barang }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Satuan</td>
                                <td>:</td>
                                <td>{{ $detail->satuan }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Harga Satuan</td>
                                <td>:</td>
                                <td>{{ $detail->harga_satuan }}</td>
                            </tr>
                        </div>
                    </div>
                </table>
            </div>
            <div class="modal-footer mt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Tabel Barang -->
<div class="stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                {{-- <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end"> --}}
                {{-- <div class="d-lg-table align-items-center justify-content-end">
                    <ul>
                   
                    <div class="justify-content-between ">
                        <h2 class="col-10">Data Masukan Barang</h2>
                    </div>
                   
                    </ul>
                    <ul>
                 
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBarang">
                            Tambah Data Barang
                        </button>
                    </div>
                  
                    </ul>
                </div> --}}
                <br>
                <div class="row ">
                    <div class="col-md-8 mb-4">
                        <div class="justify-content-between ">
                            <h2 class="col-10">Data Masukan Barang</h2>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="text-right ">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBarang">
                                Tambah Data Barang
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
                            <th>Jenis Pengadaan</th>
                            <th>Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Satuan</th>
                            <th>Harga Barang</th>
                            <th> Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $brng)
                        <tr>
                            <td>{{ $brng->jenis_pengadaan }}</td>
                            <td>{{ $brng->barang }}</td>
                            <td>{{ $brng->jumlah_barang }}</td>
                            <td>{{ $brng->satuan }}</td>
                            <td>{{ $brng->harga_satuan }}</td>

                            <td>

                                <form action="{{ route('barang.destroy',$brng->id) }}" method="POST">
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalDetailBarang{{$brng->id}}">
                                        Detail
                                    </button>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditBarang{{$brng->id}}">
                                        Edit
                                    </button>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-lg">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <a href="/input_jadwal" class="btn btn-light">Kembali</a>
            <a href="#" type="submit" class="btn btn-primary mr-2">Selesai</a>
        </div>
    </div>
</div>








@endsection
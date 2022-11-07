@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
    @section('judul')
        {{'Input Data / Belum Tersertifikasi'}}
    @endsection
    @section('title')
        {{'Input Data yang Belum Tersertifikasi'}}
    @endsection

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
   
<form action="{{ route('asets.store') }}" method="POST">
    @csrf

        <div class="card shadow mb-3 ">
            <div class="card-header py-2 " style="background-color: #40B9CB;">
                <h6 class="m-0 font-weight-bold text-white text-center">Masukkan Data Aset Belum Terferifikasi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive" >
                    <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <tr>
                                    <td>Status Aset</td>
                                    <td>
                                        <select name="status_aset" value="{{ old('status_aset') }}">
                                            <option value="">----Pilih Status Aset----</option>
                                            <option value="Tersertifikasi" >Tersertifikasi</option>
                                            <option value="Belum Tersertifikasi" selected>Belum Tersertifikasi</option>
                                        </select>
                                        <br>
                                        <small class="text-danger">{{ $errors->first('status_aset') }}</small>
                                    </td>
                                    
                                    <td>Asal Usul Aset</td>
                                    <td>
                                        <select name="asalusul_aset" value="{{ old('asalusul_aset') }}">
                                            <option value="" selected>----Pilih Asal Usul Aset----</option>
                                            <option value="Pembelian">Pembelian</option>
                                            <option value="Hibah">Hibah</option>
                                        </select>
                                        <br>
                                        <small class="text-danger">{{ $errors->first('asalusul_aset') }}</small>
                                    </td>
                                </tr> 
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <tr>
                                    <td>No Sertifikat</td>
                                    <td>
                                        <input type="text" name="no_sertifikat" value="{{ old('no_sertifikat') }}" placeholder="No Sertifikat">
                                        <br>
                                        <small class="text-danger">{{ $errors->first('no_sertifikat') }}</small>
                                    </td>
                                    
                                    <td>Kondisi Aset</td>
                                    <td>
                                        <select name="kondisi_aset" value="{{ old('kondisi_aset') }}">
                                            <option value="" selected>-----Pilih Kondisi Aset-----</option>
                                            <option value="Layak">Layak</option>
                                            <option value="Tidak Layak">Tidak Layak</option>
                                            <option value="Tidak Layak">Tidak ada bangunan</option>
                                        </select>
                                        <br>
                                        <small class="text-danger">{{ $errors->first('kondisi_aset') }}</small>
                                    </td>
                                </tr> 
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <tr>
                                    <td>Nama Aset</td>
                                    <td>
                                        <input id="text" name="nama_aset" value="{{ old('nama_aset') }}" placeholder="Nama Aset">
                                        <br>
                                        <small class="text-danger">{{ $errors->first('nama_aset') }}</small>
                                    </td> 
                                    
                                    <td>Kondisi Geografis</td>
                                    <td>
                                        <select name="kondisi_geografis" value="{{ old('kondisi_geografis') }}">
                                            <option value="" selected>--Pilih Kondisi Geografis--</option>
                                            <option value="Dataran Tinggi">Dataran Tinggi</option>
                                            <option value="Dataran Rendah">Dataran Rendah</option>
                                            <option value="Daerah Perairan">Daerah Perairan</option>
                                        </select>
                                        <br>
                                        <small class="text-danger">{{ $errors->first('kondisi_geografis') }}</small>
                                    </td>
                                </tr> 
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <tr>
                                    <td>Alamat</td>
                                    <td>
                                        <input id="w3review" name="alamat_aset" value="{{ old('alamat_aset') }}" placeholder="Alamat">
                                        <br>
                                        <small class="text-danger">{{ $errors->first('alamat_aset') }}</small>
                                    </td>
                                    
                                    <td>Tahun Rehabilitasi</td>
                                    <td>
                                        {{-- <input id="text" name="th_rehab" value="{{ old('th_rehab') }}"> --}}
                                        <input type="date" id="text" name="th_rehab" value="{{ old('th_rehab') }}" placeholder="Tahun Rehabilitasi">
                                        <br>
                                        <small class="text-danger">{{ $errors->first('th_rehab') }}</small>
                                    </td>
                                    
                                </tr> 
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <tr>
                                    <td>Luas Aset</td>
                                    <td>
                                        <input id="text" name="luas_aset" value="{{ old('luas_aset') }}" placeholder="Luas Aset">
                                        <br>
                                        <small class="text-danger">{{ $errors->first('luas_aset') }}</small>
                                    </td>
                                    
                                    <td>Tahun Kepemilikan</td>
                                    <td>
                                        <input type="date" id="text" name="th_kepemilikan" value="{{ old('th_kepemilikan') }}">
                                        {{-- <input id="text" name="th_kepemilikan" value="{{ old('th_kepemilikan') }}"> --}}
                                        <br>
                                        <small class="text-danger">{{ $errors->first('th_kepemilikan') }}</small>
                                    </td>

                                </tr> 
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <tr>
                                    <td>Keterangan Aset</td>
                                    <td>
                                        <input id="text" name="keterangan_aset" value="{{ old('keterangan_aset') }}" placeholder="Keterangan">
                                        <br>
                                        <small class="text-danger">{{ $errors->first('keterangan_aset') }}</small>
                                    </td>
                                    
                                    <td>Tahun Pembangunan</td>
                                    <td>
                                        <input type="date" id="text" name="th_pembangunan" value="{{ old('th_pembangunan') }}">
                                        {{-- <input id="text" name="th_pembangunan" value="{{ old('th_pembangunan') }}"> --}}
                                        <br>
                                        <small class="text-danger">{{ $errors->first('th_pembangunan') }}</small>
                                    </td>
                                </tr> 
                            </div>
                        </div>
                    </table>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                        <div class="form-group text-center">
                            <tr>
                                <td>
                                    <br>
                                    <button type="submit" class="btn btn-success text-center">Submit</button>
                                </td>
                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>

@endsection
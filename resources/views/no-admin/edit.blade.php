@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Edit'}}
    @endsection
    @section('title')
        {{'Edit'}}
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
  
    <form action="{{ route('asets.update',$aset->id) }}" method="POST">
        @csrf
        @method('PUT')
        
            <div class="card shadow mb-3 ">
                <div class="card-header py-2 "style="background-color: #40B9CB;">
                    <div class="row">
                        <div>
                            <h6 type="button" class="btn">
                                <a href="{{ url('asets') }}"><i class="fa-solid fa-chevron-left"></i></a>
                            </h6>
                        </div>
                        <div class="col-lg-11 m-2">
                            <h6 class="m-0 font-weight-bold text-white text-center">Masukkan Data Baru</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" >
                        <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <tr>
                                        <td>Status Aset</td>
                                        <td>
                                            <select name="status_aset" id="type">
                                                <option value="{{ $aset->status_aset }}">{{ $aset->status_aset }}</option>

                                                <option value="">----Pilih Status Aset----</option>
                                                <option value="Tersertifikasi">Tersertifikasi</option>
                                                <option value="Belum Tersertifikasi">Belum Tersertifikasi</option>
                                            </select>
                                        </td>

                                        <td>Asal Usul Aset</td>
                                        <td>
                                            <select name="asalusul_aset" value="{{ $aset->asalusul_aset }}">
                                                <option value="{{ $aset->asalusul_aset }}">{{ $aset->asalusul_aset }}</option>

                                                <option value="" >----Pilih Asal Usul Aset----</option>
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
                                            <input type="text" name="no_sertifikat" value="{{ $aset->no_sertifikat }}" placeholder="No Sertifikat">
                                            <small class="text-danger">{{ $errors->first('no_sertifikat') }}</small>
                                        </td>

                                        <td>Kondisi Aset</td>
                                        <td>
                                            <select name="kondisi_aset" value="{{ $aset->kondisi_aset }}">
                                                <option value="{{ $aset->kondisi_aset }}">{{ $aset->kondisi_aset }}</option>

                                                <option value="" >-----Pilih Kondisi Aset-----</option>
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
                                            <input id="text" name="nama_aset" value="{{ $aset->nama_aset }}" placeholder="Nama Aset">
                                            <br>
                                            <small class="text-danger">{{ $errors->first('nama_aset') }}</small>
                                        </td> 

                                        <td>Kondisi Geografis</td>
                                        <td>
                                            <select name="kondisi_geografis" value="{{ $aset->kondisi_geografis }}">
                                                <option value="{{ $aset->kondisi_geografis }}">{{ $aset->kondisi_geografis }}</option>

                                                <option value="" >--Pilih Kondisi Geografis--</option>
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
                                            <input id="text" name="alamat_aset" value="{{ $aset->alamat_aset }}" placeholder="Alamat">
                                            <br>
                                            <small class="text-danger">{{ $errors->first('alamat_aset') }}</small>
                                        </td>

                                        <td>Tahun Rehabilitasi</td>
                                        <td>
                                            <input type="date" id="text" name="th_rehab" value="{{ $aset->th_rehab }}" placeholder="Tahun Rehabilitasi">
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
                                            <input id="text" name="luas_aset" value="{{ $aset->luas_aset }}" placeholder="Luas Aset">
                                            <br>
                                            <small class="text-danger">{{ $errors->first('luas_aset') }}</small>
                                        </td>
                                        
                                        <td>Tahun Kepemilikan</td>
                                        <td>
                                            <input type="date" id="text" name="th_kepemilikan" value="{{ $aset->th_kepemilikan}}">
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
                                            <input id="text" name="keterangan_aset" value="{{ $aset->keterangan_aset}}" placeholder="Keterangan">
                                            <br>
                                            <small class="text-danger">{{ $errors->first('keterangan_aset') }}</small>
                                        </td>
                                        
                                        <td>Tahun Pembangunan</td>
                                        <td>
                                            <input type="date" id="text" name="th_pembangunan" value="{{ $aset->th_pembangunan}}">
                                            <br>
                                            <small class="text-danger">{{ $errors->first('th_pembangunan') }}</small>
                                        </td>
                                    </tr> 
                                </div>
                            </div>
                        </table>
                        {{-- Submit --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                            <div class="form-group">
                                <tr>
                                    <td>
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
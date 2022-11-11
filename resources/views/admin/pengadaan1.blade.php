@extends('layouts/index')

@section('content')
{{-- @section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
@section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection --}}

<div class="row">
    {{-- <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel 1 juta - 10 juta</h4>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
    </div>
    @endif 
    {{-- <p class="card-description">
                Add class <code>.table-bordered</code>
                </p> --}}
    <!-- {{-- <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> First name </th>
                            <th> Progress </th>
                            <th> Amount </th>
                            <th> Deadline </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>  --}} -->
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow">
            <!-- {{-- <div class="card shadow mb-3 "> --}}
            {{-- <div class="card-header py-2 "style="background-color: #40B9CB;">
                <h6 class="m-0 font-weight-bold text-white text-center">Tabel Data Aset</h6>
            </div> --}} -->
            <div class="card-body">
                <h3>Data Pengadaan <i class="fa-solid fa-less-than-equal "></i> 50 juta</h3>
                <br>
                <div class="table-responsive">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <form class="form" method="get" action="{{ route('cari1') }}">
                        <div class="form-group w-100 mb-3">
                            <label for="cari" class="d-block mr-2">Pencarian</label>
                            {{-- <input type="text" name="cari" class="form-control w-75 d-inline" id="cari" placeholder="Masukkan keyword"> --}}
                            <select class="form-control" name="cari" id="cari">
                                <option> Pilih Pengadaan </option>
                                @foreach ($pengadaan1 as $pd1)
                                <option value="{{$pd1->pengadaan_id}}">{{ $pd1->jenis_pengadaan }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        </div>
                    </form>
                    <div class="mb-4">
                        {{-- @if (Route::has('cari'))
      
                        <div class="form-group">
                            <tr>
                                <td>Nama CV Pelaksana</td>
                                <td>:</td>
                                <td>{{ $pd1->pt_pelaksana }}</td>
                            </tr>
                        </div>
                @endif

                @else
                <div class="form-group">
                    <tr>
                        <td>Nama CV Pelaksana</td>
                        <td>:</td>
                        <td>{{ Auth::pengadaan()->pd1 }}</td>
                    </tr>
                </div> --}}
                {{-- <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3>
                  <h6 class="font-weight-normal mb-0">Selamat Datang di Sistem Informasi Keuangan Bidang Data dan Statistik <br> Dinas Komunikasi dan Informatika Provinsi Jawa Timur
                    {{-- <span class="text-primary">3 unread alerts!</span> --}}
                  {{-- </h6>
                </div> --}}

                {{-- @endguest --}}


                            {{-- <div class="form-group">
                                <tr>
                                    <td>Nama CV Pelaksana</td>
                                    <td>:</td>
                                    <td>{{ $pd1->pt_pelaksana }}</td>
                                </tr>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <tr>
                                    <td>Jenis Pengadaan</td>
                                    <td>:</td>
                                    <td>{{ $pd1->jenis_pengadaan }}</td>
                                </tr>
                            </div>
                        </div> --}}
                    {{-- <table class="table table-bordered" id="data1" style="width:100%"> --}}
                    <table class="table table-bordered" id="" style="width:100%">
                        
                        <thead>
                            <tr>
                                <th>Pelaksana</th>
                                <th>Pengadaan</th>
                                <th>Kegiatan</th>
                                <th>Alokasi</th>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Nomor</th>
                                <th>Deskripsi Tanggal</th>
                                {{-- <th>NO</th> --}}
                                {{-- <th>Id Pengadaan</th>
                                <th>Nama Pengadaan</th>
                                <th>Nama Perusahaan</th>
                                <th>Harga Kontrak</th> --}}
                                {{-- <th>Alamat</th>
                                <th>Status Aset</th> --}}
                                {{-- <th>Luas Aset</th> --}}
                                {{-- <th>Kondisi Aset</th>
                                <th>Kondisi Geografis</th>
                                <th>Asal Usul</th>
                                <th>Tahun Kepemilikan</th>
                                <th>Tahun Pembangunan</th>
                                <th>Tahun Rehab</th> --}}
                                {{-- <th>Kegiatan</th> --}}
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if(count($pengadaan)<=50) --}}
                            @foreach ($pengadaan1 as $p1)
                            {{-- @foreach ($jadwal1 as $jd1) --}}
                            <tr>
                                <td>{{ $p1->pt_pelaksana }}</td>
                                <td>{{ $p1->jenis_pengadaan }}</td>
                                {{-- <td>{{ $p1->pengadaan_id }}</td> --}}
                                <td>{{ $p1->kegiatan }}</td>
                                <td>{{ $p1->alokasi }}</td>
                                <td>{{ $p1->hari }}</td>
                                <td>{{ $p1->tanggal }}</td>
                                <td>{{ $p1->nomor }}</td>
                                <td>{{ $p1->deskripsi_tgl }}</td>
                                {{-- <td>{{ $p1->pengadaan_id }}</td> --}}
                                {{-- <td>{{ ++$i }}</td> --}}
                                {{-- <td>{{ $jd1->jenis_pengadaan}}</td> --}}
                                {{-- <td>{{ $p1->jenis_pengadaan}}</td> --}}
                                {{-- <td>{{ $jd1->pt_pelaksana}}</td> --}}
                                {{-- <td>{{ $p1->pt_pelaksana}}</td> --}}
                                {{-- @foreach ($pelaksana as $pelaksana)
                                    <td>{{ $pelaksana->pt_pelaksana }}</td>
                                    @endforeach --}}
                                    {{-- <td>{{ $jd1->nilai_negosiasi }}</td> --}}
                                {{-- <td>{{ $p1->nilai_negosiasi }}</td> --}}
                                {{-- <td>{{ $p1->kegiatan}}</td> --}}

                                <td>

                                    {{-- <form action="{{ route('pengadaan.destroy1',$p1->id) }}" method="POST"> --}}
                                        {{-- <a href="#" value="{{ action() }}" class="btn btn-xs btn-info modalMd" title="Show Data" data-toggle="modal" data-target="#modalMd"><span class="glyphicon glyphicon-eye-open"></span></a> --}}
                                        {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetailPengadaan1-{{$jd1->pengadaan_id}}"> --}}
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetailPengadaan1-{{$p1->id}}">
                                            print
                                        </button>
                                        {{-- <a class="btn btn-info" href="{{ route('pengadaan.show',$p1->id) }}">Detail</a> --}}
                                        {{-- <a class="btn btn-primary" href="{{ route('pengadaan.edit',$pengadaan->id) }}">Edit</a> --}}
                                        @csrf
                                        @method('DELETE')

                                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                                    {{-- </form> --}}
                                </td>
                            </tr>
                            @endforeach
                            {{-- @endif --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MODAL --}}


@endsection
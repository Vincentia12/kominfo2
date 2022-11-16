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
                <form class="form" method="get" action="{{ route('cari1') }}">
                    <div class="form-group w-100 mb-9 mx-sm-3">
                        <label for="cari" class="d-block mr-2 ">Pencarian</label>
                        {{-- <input type="text" name="cari" class="form-control w-75 d-inline" id="cari" placeholder="Masukkan keyword"> --}}
                        <select class="form-control w-25 mb-4 d-inline" name="cari1" id="cari1">
                            <option> Pilih Pengadaan </option>
                            @foreach ($pengadaan1 as $pd1)
                            <option value="{{$pd1->pengadaan_id}}">{{ $pd1->jenis_pengadaan }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </div>
                </form>
                <div class="table-responsive">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    
                    {{-- <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                          <label for="inputPassword2" class="sr-only">Pencarian</label>
                          <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Cari</button>
                      </form> --}}
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
                                <th>Nilai Negosiasi</th>
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
                                <td>{{ $p1->nilai_negosiasi }}</td>
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
                                        {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalprint-{{$p1->id}}">
                                            print
                                        </button> --}}
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show',$p1->id) }}">Detail</a>
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
{{-- Modal Detail Pelaksana --}}
@foreach ( $pengadaan1 as $pl )
    <div class="modal fade" id="modalprint-{{$pl->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPelaksanaLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl-dialog-centered" role="document">
            <div class="modal-content">
                {{-- @yield('content') --}}

                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <table border="0" align="center">
                                <tr>
                                    <td>
                                        <center><font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA</b></font><br>
                                                <font size="3"><b>PROVINSI JAWA TIMUR<b/></font><br>
                                                <font size="3"><u>NOTA DINAS<u/></font><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="555" colspan="2"><hr></td>
                                </tr>
                            </table>
                            <br>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="80">Kepada</td>
                                    <td>:</td>
                                    <td width="475">Yth. Sdr. Pejabat Pembuat Komitmen Dinas Komunikasi dan</td>
                                </tr>
                            </table>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="80"> </td>
                                    <td width="5"> </td>
                                    <td width="475">Informatika Provinsi Jawa Timur</td>
                                </tr>
                            </table>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="80">Dari</td>
                                    <td>:</td>
                                    <td width="475">Kuasa Pengguna Anggaran</td>
                                </tr>
                            </table>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="80">Tanggal</td>
                                    <td>:</td>
                                    <td width="475">11 Agustus 2022</td>
                                </tr>
                            </table>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="80">Nomor</td>
                                    <td>:</td>
                                    <td width="475">020/654.1/114.6/2022</td>
                                </tr>
                            </table>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="80">Sifat</td>
                                    <td>:</td>
                                    <td width="475">Segera</td>
                                </tr>
                            </table>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="80">Lampiran</td>
                                    <td>:</td>
                                    <td width="475">1 (satu) berkas</td>
                                </tr>
                            </table>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="80">Perihal</td>
                                    <td>:</td>
                                    <td width="475">Kapasitas Kelembagaan Statistik Sektoral Toner Printer</td>
                                </tr>
                            </table>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="80"> </td>
                                    <td width="5"> </td>
                                    <td width="475">Informatika Provinsi Jawa Timur</td>
                                </tr>
                            </table>
                            <br>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="565">Bersama ini ini diberitahukan, bahwa DPA-SKPD Bagian Data dan Statistik pada Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran 2022, kode rekening 2.20.02.1.01.5.1.02.01.01.0029 pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dengan rincian sebagai berikut :</td>
                                </tr>
                            </table>
                            <br>
                            <table width="565px" border="1" align="center">
                                <thead>
                                    <tr align="center">
                                        <th width="50px" scope="col">No</th>
                                        <th width="265px" scope="col">Belanja Alat/Bahan Untuk Kegiatan Kantor </th>
                                        <th width="100px" scope="col">Jumlah Barang</th>
                                        <th width="100px" scope="col">Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Toner Printer Tinta Printer Epson L-1300</td>
                                        <td align="center">2</td>
                                        <td align="center">Buah</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Toner Printer Tinta Printer Epson L-1800</td>
                                        <td align="center">1</td>
                                        <td align="center">Buah</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Toner Printer Tinta Printer Epson L-6160</td>
                                        <td align="center">1</td>
                                        <td align="center">Buah</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="565">Untuk itu diminta bantuannya untuk segera diproses sesuai prosedur yang berlaku.</td>
                                </tr>
                            </table>
                            <table border="0" align="center" font-size="2">
                                <tr>
                                    <td width="565">Demikian untuk pelaksanaannya.</td>
                                </tr>
                            </table>
                            <br>
                            <table border="0" align="center">
                                <tr>
                                    <td width="300"> </td>
                                    <td>KUASA PENGGUNA ANGGARAN</td>
                                    <td width="50"> </td>
                                </tr>
                            </table>
                            <br>
                            <br>
                            <br>
                            <table border="0" align="center">
                                <tr>
                                    <td width="300"> </td>
                                    <td>Dra. Ec. NIRMALA DEWI, M.M</td>
                                    <td width="50"> </td>
                                </tr>
                            </table>
                            <table border="0" align="center">
                                <tr>
                                    <td width="300"> </td>
                                    <td>NIP. 19650909 199403 2 006</td>
                                    {{-- <td>NIP. {{ $pejabat->nip_kuasa_pengguna }}</td> --}}
                                    <td width="50"> </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endforeach

@endsection
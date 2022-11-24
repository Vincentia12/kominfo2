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
<<<<<<< HEAD
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
        {{-- <table class="table table-bordered" id="" style="width:100%">

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
                    <th>Deskripsi Tanggal</th> --}}
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
                                {{-- </tr>
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
                    <table class="table table-bordered"  style="width:100%">
                        
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
                                {{-- <th>Id Pengadaan</th> --}}
                            
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
                    <td>
                        @if ($p1->kegiatan == 'Nota Dinas dari KPA ke PPK')
                            <a class="btn btn-info" href="{{ route('pengadaan1.show1',$p1->id) }}">Detail</a>
                            {{-- <a class="btn btn-info" href="pengadaan1/notadinas1/">Print</a> --}}
                            <a class="btn btn-danger " href="{{route('pengadaan1.print1',$p1->id)}}">Print</a>
                            {{-- <a class="btn btn-info" href="{{ route('show',$p1->id) }}">Detail</a> --}}
                        @elseif($p1->kegiatan == 'Nota Dinas dari PPK ke Pejabat Pengadaan + Lampiran OE (HPS)')
                        <!-- {{-- <a class="btn btn-info" href="{{ route('show1',$p1->id) }}">Detail</a> --}} -->
                            <a class="btn btn-info" href="{{ route('pengadaan1.show2',$p1->id) }}">Detail</a>
                            <a class="btn btn-danger" href="{{route('pengadaan1.print1',$p1->id)}}">Print</a>
                        <!-- {{-- <a class="btn btn-info" name="show1">Detail</a> --}} -->
                        <!-- {{-- url('/print_notadinas1') --}} -->
                        @elseif($p1->kegiatan == 'Nota Dinas dari Pejabat Pengadaan ke PPK')
                        <!-- {{-- <a class="btn btn-info" href="{{ route('show1',$p1->id) }}">Detail</a> --}} -->
                        <a class="btn btn-info" href="{{ route('pengadaan1.show3',$p1->id) }}">Detail</a>

                        @elseif($p1->kegiatan == 'Lampiran BA. Evaluasi Dokumen Prakualifikasi')
                        <a class="btn btn-info" href="{{ route('pengadaan1.show4',$p1->id) }}">Detail</a>

                        @elseif($p1->kegiatan == 'BA. Klarifikasi/Negosiasi')
                        <a class="btn btn-info" href="{{ route('peng adaan1.show5',$p1->id) }}">Detail</a>





                        @elseif($p1->kegiatan == 'Daftar Hadir Pengembalian Dokumen Prakualifikasi')
                        <a class="btn btn-info" href="{{ route('pengadaan1.show6',$p1->id) }}">Detail</a>

                        @elseif($p1->kegiatan == 'PAKTA INTEGRITAS')
                        <a class="btn btn-info" href="{{ route('pengadaan1.show7',$p1->id) }}">Detail</a>

                        @elseif($p1->kegiatan == 'Penetapan Penyedia Jasa')
                        <a class="btn btn-info" href="{{ route('pengadaan1.show8',$p1->id) }}">Detail</a>

                        @elseif($p1->kegiatan == 'Surat Undangan Klarifikasi/Negosiasi')
                        <a class="btn btn-info" href="{{ route('pengadaan1.show9',$p1->id) }}">Detail</a>

                        @elseif($p1->kegiatan == 'Surat Undangan Permintaan Penawaran')
                        <a class="btn btn-info" href="{{ route('pengadaan1.show10',$p1->id) }}">Detail</a>

                        @elseif($p1->kegiatan == 'Penunjuk Penyedia Barang/Jasa')
                        <a class="btn btn-info" href="{{ route('pengadaan1.show11',$p1->id) }}">Detail</a>
                        <!-- {{-- <a class="btn btn-info" name="show1">Detail</a> --}} -->
                        <!-- {{-- url('/print_notadinas1') --}} -->
                        @else
                        You don't have a post!
                        @endif
                                        {{-- <a href="#" value="{{ action() }}" class="btn btn-xs btn-info modalMd" title="Show Data" data-toggle="modal" data-target="#modalMd"><span class="glyphicon glyphicon-eye-open"></span></a> --}}
                                        {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetailPengadaan1-{{$jd1->pengadaan_id}}"> --}}
                                        {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalprint-{{$p1->id}}">
                                            print
                                        </button> --}}
                        <!-- {{-- <a class="btn btn-info" href="{{ route('pengadaan1.show',$p1->id) }}">Detail</a> --}} -->
                        <!-- {{-- <a class="btn btn-primary" href="{{ route('pengadaan.edit',$pengadaan->id) }}">Edit</a> --}} -->
                        @csrf
                        @method('DELETE')

                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                        {{-- </form> --}}
                    </td>
                </tr>
                @endforeach
                {{-- @endif --}}
            </tbody>
            {{-- @foreach ($pejabat as $p)
                
            <p>{{ $p->nip_kuasa_pengguna }}</p>
            @endforeach --}}
        </table>
    </div>
</div>
</div>
</div>
</div>

{{-- MODAL --}}
{{-- Modal Detail Pelaksana --}}
{{-- @foreach ( $pengadaan1 as $pl )
    <div class="modal fade" id="modalprint-{{$pl->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPelaksanaLabel" aria-hidden="true">
<div class="modal-dialog modal-xl-dialog-centered" role="document">
    <div class="modal-content">
        @yield('content')

    </div>
</div>
</div>
@endforeach --}}

@endsection
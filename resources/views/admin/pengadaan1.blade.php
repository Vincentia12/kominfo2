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

                    <table class="table table-bordered" id="data1" style="width:100%">
                        <thead>
                            <tr>
                                {{-- <th>NO</th> --}}
                                <th>Nama Pengadaan</th>
                                <th>Nama Perusahaan</th>
                                <th>Harga Kontrak</th>
                                {{-- <th>Alamat</th>
                                <th>Status Aset</th> --}}
                                {{-- <th>Luas Aset</th> --}}
                                {{-- <th>Kondisi Aset</th>
                                <th>Kondisi Geografis</th>
                                <th>Asal Usul</th>
                                <th>Tahun Kepemilikan</th>
                                <th>Tahun Pembangunan</th>
                                <th>Tahun Rehab</th> --}}
                                <th>Kegiatan</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if(count($pengadaan)<=50) --}}
                            @foreach ($pengadaan1 as $p1)
                            {{-- @foreach ($jadwal1 as $jd1) --}}
                            <tr>
                                {{-- <td>{{ ++$i }}</td> --}}
                                <td>{{ $p1->kegiatan}}</td>
                                {{-- <td>{{ $jd1->jenis_pengadaan}}</td> --}}
                                <td>{{ $p1->jenis_pengadaan}}</td>
                                {{-- <td>{{ $jd1->pt_pelaksana}}</td> --}}
                                <td>{{ $p1->pt_pelaksana}}</td>
                                {{-- @foreach ($pelaksana as $pelaksana)
                                    <td>{{ $pelaksana->pt_pelaksana }}</td>
                                @endforeach --}}
                                {{-- <td>{{ $jd1->nilai_negosiasi }}</td> --}}
                                <td>{{ $p1->nilai_negosiasi }}</td>

                                <td>

                                    {{-- <form action="{{ route('pengadaan.destroy1',$p1->id) }}" method="POST"> --}}

                                        {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetailPengadaan1-{{$jd1->pengadaan_id}}"> --}}
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetailPengadaan1-{{$p1->id}}">
                                            Detail
                                        </button>
                                        {{-- <a class="btn btn-info" href="{{ route('pengadaan.show',$pengadaan->id) }}">Detail</a>
                                        <a class="btn btn-primary" href="{{ route('pengadaan.edit',$pengadaan->id) }}">Edit</a> --}}
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
{{-- Modal Detail Pengadaan1 --}}
@foreach ( $pengadaan1 as $pg )
{{-- @foreach ( $jadwal1 as $jd ) --}}
    <div class="modal fade" id="modalDetailPengadaan1-{{$pg->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPelaksanaLabel" aria-hidden="true">
    {{-- <div class="modal fade" id="modalDetailPengadaan1-{{$jd->pengadaan_id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPelaksanaLabel" aria-hidden="true"> --}}
        {{-- <div class="modal-dialog modal-xl-dialog-centered" role="document"> --}}
        <div class=" modal-body modal-xl-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Detail Data Pelaksana</b></h5>
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
                    {{-- <h3>{{ $pg->pt_pelaksana}}</h3>
                    <h3>{{ $pg->jenis_pengadaan}}</h3> --}}
                    <table id="data1" class="table table-bordered" cellspacing="0">
                        {{-- <table id="data1" class="table table-bordered" cellspacing="0" width="100%"> --}}
                        {{-- <table class="table table-bordered " id="data1" style="width:100%"> --}}
                        {{-- <table class="table table-bordered" id="example"> --}}
                    <br>    
                        <thead>
                            <tr>
                                <th>Kegiatan</th>
                                <th>Alokasi</th>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Nomor</th>
                                <th>Deskripsi Tanggal</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal as $jd)
                            <tr>
                                {{-- <td>{{ ++$i }}</td> --}}
                                {{-- <td>{{ $brg->id}}</td> --}}
                                {{-- <td>{{ $pg->jadwal->kegiatan }}</td>
                                <td>{{ $pg->jadwal->alokasi }}</td>
                                <td>{{ $pg->jadwal->hari }}</td>
                                <td>{{ $pg->jadwal->tanggal }}</td>
                                <td>{{ $pg->jadwal->nomor }}</td>
                                <td>{{ $pg->jadwal->deskripsi_tgl }}</td> --}}
                                <td>{{ $jd->kegiatan }}</td>
                                {{-- <td>{{ $jd->kegiatan }}</td>
                                <td>{{ $jd->alokasi }}</td>
                                <td>{{ $jd->hari }}</td>
                                <td>{{ $jd->tanggal }}</td>
                                <td>{{ $jd->nomor }}</td>
                                <td>{{ $jd->deskripsi_tgl }}</td>
     --}}
                                <td>
    
                                    {{-- <form action="{{ route('barang.destroy',$barang->id) }}" method="POST"> --}}
    
                                        {{-- <a class="btn btn-info btn-lg" href="{{ route('barang.show',$barang->id) }}">
                                            <!-- <a href="{{ route('barang.show',$barang->id) }}"> -->
                                            Detail
                                            <!-- <i class="mdi mdi-account-card-details"></i> -->
                                        </a>
                                        <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id) }}">
                                            <!-- <a href="{{ route('barang.edit',$barang->id) }}"> -->
                                            Edit
                                            <!-- <i class="mdi mdi-table-edit"></i> -->
                                        </a>
                                        @csrf
                                        @method('DELETE')
    
                                        <button type="submit" class="btn btn-danger btn-lg">
                                            <!-- <button type="submit" class="button-red"> -->
                                            Hapus
                                            <!-- <i class="mdi mdi-delete"></i> -->
                                        </button> --}}
                                    {{-- </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer mt-3">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    {{-- <button type="submit" class="btn btn-primary ">Simpan <i class="fa fa-save"></i></button> --}}
                </div>
            </div>
        </div>
    </div>
@endforeach


@endsection
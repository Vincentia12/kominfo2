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
                <h3>Data Pengadaan <i class="fa-solid fa-greater-than "></i> 50 juta</h3>
                <br>
                <form class="form" method="get" action="{{ route('cari1') }}">
                    <div class="form-group w-100 mb-9 mx-sm-3">
                        <label for="cari" class="d-block mr-2 ">Pencarian</label>
                        {{-- <input type="text" name="cari" class="form-control w-75 d-inline" id="cari" placeholder="Masukkan keyword"> --}}
                        <select class="form-control w-25 mb-4 d-inline" name="cari1" id="cari2">
                            <option> Pilih Pengadaan </option>
                            @foreach ($pengadaan2 as $pd2)
                            <option value="{{$pd2->pengadaan_id}}">{{ $pd2->jenis_pengadaan }}</option>
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
                                {{-- <th>Nama Pengadaan</th>
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
                                {{-- <th>Keterangan</th> --}}
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengadaan2 as $p2)
                            <tr>
                                <td>{{ $p2->pt_pelaksana }}</td>
                                <td>{{ $p2->jenis_pengadaan }}</td>
                                <td>{{ $p2->nilai_negosiasi }}</td>
                                <td>{{ $p2->kegiatan }}</td>
                                <td>{{ $p2->alokasi }}</td>
                                <td>{{ $p2->hari }}</td>
                                <td>{{ $p2->tanggal }}</td>
                                <td>{{ $p2->nomor }}</td>
                                <td>{{ $p2->deskripsi_tgl }}</td>
                                {{-- <td>{{ ++$i }}</td> --}}
                                {{-- <td>{{ $p2->jenis_pengadaan}}</td>
                                <td>{{ $p2->pt_pelaksana }}</td>
                                <td>{{ $p2->nilai_negosiasi }}</td> --}}
                                {{-- <td>{{ $aset->alamat_aset }}</td>
                                <td>{{ $aset->status_aset }}</td> --}}

                                {{-- <td>{{ $aset->keterangan_aset }}</td> --}}
                                <td>

                                    {{-- <form action="{{ route('pengadaan.destroy1',$p2->id) }}" method="POST"> --}}

                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetailPengadaan2{{$p2->id}}">
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
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
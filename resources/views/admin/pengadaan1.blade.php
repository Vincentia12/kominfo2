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
                                {{-- <th>Keterangan</th> --}}
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if(count($pengadaan)<=50) --}}
                            @foreach ($pengadaan as $pengadaan)
                            <tr>
                                {{-- <td>{{ ++$i }}</td> --}}
                                <td>{{ $pengadaan->jenis_pengadaan}}</td>
                                <td>{{ $pengadaan->pt_pelaksana}}</td>
                                {{-- @foreach ($pelaksana as $pelaksana)
                                    <td>{{ $pelaksana->pt_pelaksana }}</td>
                                @endforeach --}}
                                <td>{{ $pengadaan->nilai_negosiasi }}</td>

                                <td>

                                    <form action="{{ route('pengadaan.destroy',$pengadaan->pengadaan_id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('pengadaan.show',$pengadaan->id) }}">Detail</a>
                                        <a class="btn btn-primary" href="{{ route('pengadaan.edit',$pengadaan->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
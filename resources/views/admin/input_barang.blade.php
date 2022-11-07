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
                            @foreach ($pengadaan as $item)
                            <option value="{{$item->id}}">{{ $item->jenis_pengadaan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang">
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Jumlah Barang">
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Satuan</label>
                        <select class="form-control" name="satuan" id="satuan" placeholder="Pilih">
                            <option>Buah</option>
                            <option>Pack</option>
                            <option>Lusin</option>
                            <option>Karton</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Harga Satuan</label>
                        <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="1.200.000">
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



{{-- <div class="col-12 grid-margin stretch-card"> --}}
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
                        @foreach ($barang as $barang)
                        <tr>
                            {{-- <td>{{ ++$i }}</td> --}}
                            {{-- <td>{{ $brg->id}}</td> --}}
                            <td>{{ $barang->pengadaan->jenis_pengadaan }}</td>
                            <td>{{ $barang->barang }}</td>
                            <td>{{ $barang->jumlah_barang }}</td>
                            <td>{{ $barang->satuan }}</td>
                            <td>{{ $barang->harga_satuan }}</td>

                            <td>

                                <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">

                                    <a class="btn btn-info btn-lg" href="{{ route('barang.show',$barang->id) }}">
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
@extends('layouts/index')
{{-- @section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active') --}}
@section('content')

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
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <h3>Data Pengadaan <i class="fa-solid fa-less-than-equal "></i> 50 juta</h3>
                <br>

                <div class="form-group w-100 mb-9 mx-sm-1">
                    <form class="form" method="get" action="{{ route('cari1') }}">
                        <select class="form-control w-auto mb-6 d-inline" name="cari1" id="cari1">
                            {{-- <option value="{{$pilihan->pelakasana_id}}"><b>{{$pilihan->pelaksana->pt_pelaksana}}</b> Pengadaan <b>{{ $pilih->jenis_pengadaan }}</b></option> --}}

                            <option value=""> Pilih Pengadaan </option>
                            <option value=""> </option>
                            @foreach ($pilihan as $pilih)
                            <option value="{{$pilih->id}}"><b>{{$pilih->pt_pelaksana}}</b> Pengadaan <b>{{ $pilih->jenis_pengadaan }}</b></option>
                            {{-- <option value="{{$pilih->id}}">{{$pilih->id}}</option> --}}
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </form>
                </div>

                {{-- <div class="row"> --}}
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                {{-- <div class="mb-4"> --}}
                <table class="table table-bordered" id="" style="width:100%">
                    {{-- <table class="table table-bordered" id="data1" style="width:100%"> --}}
                    {{-- <table id="datatable1" class="table table-bordered" style="width:100%"> --}}
                    {{-- <table id="data1" class="table table-bordered" cellspacing="0"> --}}
                    {{-- <table id="datatable1" class="table table-bordered" cellspacing="0"> --}}
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
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if(count($pengadaan)<=50) --}}
                        @foreach ($pengadaan as $p1)
                        {{-- @foreach ($jadwal1 as $jd1) --}}
                        <tr>
                            <td>{{ $p1->pt_pelaksana }}</td>
                            <td>{{ $p1->jenis_pengadaan }}</td>
                            <td>RP. {{number_format( $p1->nilai_negosiasi )}}</td>
                            <td>{{ $p1->kegiatan }}</td>
                            <td>{{ $p1->alokasi }}</td>
                            {{-- <td>{{ $pengadaan1->tanggal->format('yyy mm dd') }}</td> --}}
                            {{-- <td>{{ $tanggal }}</td> --}}
                            {{-- <td>{{ isoFormat('l d F Y', strtotime($pengadaan->tanggal)) }}</td> --}}
                            <td>{{ date('l', strtotime($p1->tanggal)) }}</td>
                            <td>{{ date('d F Y', strtotime($p1->tanggal)) }}</td>
                            <td>{{ $p1->nomor }}</td>
                            <td>020/{{$p1->nomor}}/114.6/{{date('Y', strtotime($p1->tanggal))}}</td>
                            <td>{{ $p1->deskripsi_tgl }}</td>
                            <td>
                                @if ($p1->kegiatan == 'Nota Dinas dari KPA ke PPK')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show1',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print1',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Nota Dinas dari PPK ke Pejabat Pengadaan + Lampiran OE (HPS)')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show2',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger" href="{{route('pengadaan1.print2',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show3',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print3',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Pakta Integritas')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show4',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print4',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Surat Pernyataan Minat')
                                <P>Surat Pernyataan Minat Dari Pelaksana</P>
                                {{-- <a class="btn btn-info" href="{{ route('pengadaan1.show5',$p1->id) }}">Detail</a> --}}

                                @elseif($p1->kegiatan == 'Pemasukan Dokumen Kualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show6',$p1->id) }}">Detail</a>

                                @elseif($p1->kegiatan == 'Daftar Hadir Pengembalian Dokumen Prakualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show7',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print7',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'BA. Evaluasi Dokumen Prakualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show8',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print8',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Lampiran BA. Evaluasi Dokumen Prakualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show9',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print9',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Surat Undangan Permintaan Penawaran Harga')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show10',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print10',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'BA. Penjelasan Pekerjaan')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show11',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print11',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Pemasukan Penawaran')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show12',$p1->id) }}">Detail</a>

                                @elseif($p1->kegiatan == 'BA. Pembukaan Penawaran')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show13',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print13',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Surat Undangan Klarifikasi/Negosiasi')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show14',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print14',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'BA. Klarifikasi/Negosiasi')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show15',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print15',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Lampiran BA. Klarifikasi/Negosiasi')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show16',$p1->id) }}">Detail</a>

                                @elseif($p1->kegiatan == 'BA. Hasil Pengadaan Langsung')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show17',$p1->id) }}">Detail</a>

                                @elseif($p1->kegiatan == 'Nota Dinas dari Pejabat Pengadaan ke PPK')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show18',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print18',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Penetapan Penyedia Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show19',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print19',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Penunjukan Penyedia Barang/Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show20',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print20',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Surat Perintah Kerja')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show21',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print21',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Surat Perintah Mulai Kerja (SPMK)')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show22',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print22',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'BA. Serah Terima Hasil Pekerjaan')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show23',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print23',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Laporan Proses Pengadaan Barang/Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show27',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print27',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'BA. Penyerahan Barang/Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show24',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print24',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'BA. Hasil Pemeriksaan Administratif')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show25',$p1->id) }}">Detail</a>

                                @elseif($p1->kegiatan == 'BA. Hasil Pembayaran')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show26',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print26',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p1->kegiatan == 'Kuitansi Kontrak')
                                <a class="btn btn-info" href="{{ route('pengadaan1.show28',$p1->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan1.print28',$p1->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @else
                                You don't have a post!
                                @endif

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
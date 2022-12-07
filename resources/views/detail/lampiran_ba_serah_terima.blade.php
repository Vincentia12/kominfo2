@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
@section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
<!-- @section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection -->

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

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">Lampiran Berita Acara Serah Terima  Hasil Pekerjaan</td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="100">Nomor</td>
                    <td width="30">:</td>
                    <td width="430">020/{{$pengadaan->nomor}}/114.6/2022</td>
                <tr>
                <tr>
                    <td width="100">Tanggal</td>
                    <td width="30">:</td>
                    <td width="430">{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                <tr>
            </table>
            <br>
            <table width="800px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="30px" scope="col">No</th>
                        <th width="100px" scope="col">Banyaknya</th>
                        <th width="470px" scope="col">Uraian Spesifikasi</th>
                        <th width="100px" scope="col">Harga Satuan (Rp.)</th>
                        <th width="100px" scope="col">Total Harga (Rp.)</th>
                    </tr>
                </thead>
            </table>
            <table width="800px" border="1" align="center">
                <thead>
                    <tr>
                        <td width="31px"> </td>
                        <td width="800px">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                    </tr>
                </thead>
            </table>
            <table width="800px" border="1" align="center">
                <thead>
                    <tr>
                        <td width="30px" align="center">{{$brg->pengadaan_id}}</td>
                        <td width="570px">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                        <td width="100px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                    </tr>
                </thead>
            </table>
            <table width="800px" border="1" align="center">
                <thead>
                    <tr>
                        <td width="30px" scope="col"> </td>
                        <td width="50px" scope="col" align="center">{{$brg->jumlah_barang}}</td>
                        <td width="50px" scope="col" align="center">{{$brg->satuan}}</td>
                        <td width="470px" scope="col">{{$brg->barang}}</td>
                        <td width="100px" scope="col">{{$brg->harga_satuan}},-</td>
                        //total harga barang
                        <td width="100px" scope="col">2.490.000,-</td>
                    </tr>
                </thead>
                {{--  <thead>
                    <tr>
                        <td width="30px" scope="col"> </td>
                        <td width="50px" scope="col" align="center">1</td>
                        <td width="50px" scope="col" align="center">buah</td>
                        <td width="470px" scope="col">Tinta Printer Epson L-1800 -(2)hitam, cyan, magenta, yellow, lightcyan, lightmagenta</td>
                        <td width="100px" scope="col">1.257.000,-</td>
                        <td width="100px" scope="col">1.257.000,-</td>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <td width="30px" scope="col"> </td>
                        <td width="50px" scope="col" align="center">1</td>
                        <td width="50px" scope="col" align="center">buah</td>
                        <td width="470px" scope="col">Tinta Printer Epson L-6160 -(2)hitam, cyan, magenta, yellow</td>
                        <td width="100px" scope="col">1.250.000,-</td>
                        <td width="100px" scope="col">1.250.000,-</td>
                    </tr>
                </thead>  --}}
                <thead>
                    <tr height="25">
                        <td width="30px" scope="col"> </td>
                        <td width="50px" scope="col"> </td>
                        <td width="50px" scope="col"> </td>
                        <td width="470px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                    </tr>
                </thead>
            </table>
            //total harga barang
            <table width="800px" border="1" align="center">
                <thead>
                    <tr>
                        <th width="600px">Jumlah</th>
                        <th width="100px" scope="col"> </th>
                        <th width="100px" scope="col">4.997.000,-</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th width="600px">PPn 11%</th>
                        <th width="100px" scope="col"> </th>
                        <th width="100px" scope="col">549.670,-</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th width="600px">Jumlah Harga</th>
                        <th width="100px" scope="col"> </th>
                        <th width="100px" scope="col">5.546.670,-</th>
                    </tr>
                </thead>
            </table>
            <table width="800px" border="1" align="center">
                <thead>
                    <td>Terbilang : == Lima Juta Lima Ratus Empat Puluh Enam Ribu Enam Ratus Tujuh Puluh Rupiah==</td>
                </thead>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">PIHAK KEDUA</td>
                    <td width="280">PIHAK KESATU</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">MANUHUTU ARMAND FX</td>
                    <td width="280">I WAYAN RUDY ARTHA, S.Kom</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">Direktur</td>
                    <td width="280">NIP. 19770517 200901 1 005</td>
                </tr>
            </table>
            <br>
        </div>
    </div>
</div>
@endsection
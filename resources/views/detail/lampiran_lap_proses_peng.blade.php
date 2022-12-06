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
                    <td width="560">Lampiran Laporan Proses Pengadaan Barang/Jasa</td>
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
                        <th width="30px" scope="col">NO</th>
                        <th width="400px" scope="col">PEKERJAAN</th>
                        <th width="100px" scope="col">KUANTITAS</th>
                        <th width="70px" scope="col">SATUAN</th>
                        <th width="100px" scope="col">HARGA SATUAN</th>
                        <th width="100px" scope="col">JUMLAH HARGA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <th width="30px" scope="col">1</th>
                        <th width="400px" scope="col">2</th>
                        <th width="100px" scope="col">3</th>
                        <th width="70px" scope="col">4</th>
                        <th width="100px" scope="col">5</th>
                        <th width="100px" scope="col">6</th>
                    </tr>
                </tbody>
            </table>
            <table width="800px" border="1" align="center">
                <thead>
                    <tr height="25">
                        <td width="30px" scope="col"> </td>
                        <td width="400px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                        <td width="70px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                    </tr>
                </thead>
                <thead>
                    <tr height="25">
                        <td width="30px" scope="col"> </td>
                        <td width="400px" scope="col">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                        <td width="100px" scope="col"> </td>
                        <td width="70px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                    </tr>
                </thead>
                {{--  <thead>
                    <tr height="25">
                        <td width="30px" scope="col" align="center">1.</td>
                        <td width="400px" scope="col">Toner Printer</td>
                        <td width="100px" scope="col"> </td>
                        <td width="70px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                    </tr>
                </thead>  --}}
                <thead>
                    <tr height="25">
                        <td width="31px" scope="col" align="center"> </td>
                        <td width="400px" scope="col">{{$brg->barang}}</td>
                        <td width="100px" scope="col" align="center">{{$brg->jumlah_barang}}</td>
                        <td width="70px" scope="col" align="center">{{$brg->satuan}}</td>
                        <td width="100px" scope="col">{{$brg->harga_satuan}},-</td>
                        //total harga barang
                        <td width="100px" scope="col">2.490.000,-</td>
                    </tr>
                </thead>
                {{--  <thead>
                    <tr height="25">
                        <td width="31px" scope="col" align="center"> </td>
                        <td width="400px" scope="col">Tinta Printer Epson L-1800-(2)hitam, cyan, magenta, yellow, lightcyan, lightmagenta</td>
                        <td width="100px" scope="col" align="center">1</td>
                        <td width="70px" scope="col" align="center">buah</td>
                        <td width="100px" scope="col">1.257.000,-</td>
                        <td width="100px" scope="col">1.257.000,-</td>
                    </tr>
                </thead>
                <thead>
                    <tr height="25">
                        <td width="31px" scope="col" align="center"> </td>
                        <td width="400px" scope="col">Tinta Printer L-6160-(2)hitam,cyan,magenta,yellow</td>
                        <td width="100px" scope="col" align="center">1</td>
                        <td width="70px" scope="col" align="center">buah</td>
                        <td width="100px" scope="col">1.250.000,-</td>
                        <td width="100px" scope="col">1.250.000,-</td>
                    </tr>
                </thead>  --}}
                <thead>
                    <tr height="25">
                        <td width="30px" scope="col"> </td>
                        <td width="400px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                        <td width="70px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                    </tr>
                </thead>
                <thead>
                    <tr height="25">
                        <td width="30px" scope="col"> </td>
                        <td width="400px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                        <td width="70px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                        <td width="100px" scope="col"> </td>
                    </tr>
                </thead>
            </table>
            //total harga barang
            <table width="800px" border="1" align="center">
                <thead>
                    <tr height="25">
                        <th width="600px" scope="col">TOTAL HARGA</th>
                        <th width="100px" scope="col"> </th>
                        <th width="100px" scope="col">4.997.000,-</th>
                    </tr>
                </thead>
                <thead>
                    <tr height="25">
                        <th width="600px" scope="col">PPn 11%</th>
                        <th width="100px" scope="col"> </th>
                        <th width="100px" scope="col">549.670,-</th>
                    </tr>
                </thead>
                <thead>
                    <tr height="25">
                        <th width="600px" scope="col">TOTAL HARGA</th>
                        <th width="100px" scope="col"> </th>
                        <th width="100px" scope="col">5.546.670,-</th>
                    </tr>
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
                    <td width="280">Drs. Ec. NIRMALA DEWI, M.M</td>
                    <td width="280">I WAYAN RUDY ARTHA, S.Kom</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td width="280">NIP. 19650909 199403 2 006</td>
                    <td width="280">NIP. 19770517 200901 1 005</td>
                </tr>
            </table>
            <br>
        </div>
    </div>
</div>
@endsection
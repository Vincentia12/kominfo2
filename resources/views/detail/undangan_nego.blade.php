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
            <table border="0" align="center">
                <tr>
                    <td>
                        <img src="{{asset('img/logo_jatim.png')}}" width="70" height="70">
                    </td>
                    <td>
                        <center>
                            <font size="3"><b>PEMERINTAH PROVINSI JAWA TIMUR</b></font><br>
                            <font size="3">DINAS KOMUNIKASI DAN INFORMATIKA</font><br>
                            <font size="3">Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517</font><br>
                            <font size="3">Website : http://www.jatimprov.go.id </font><br>
                            <font size="2">Email:kominfo@jatimprov.go.id</font><br>
                            <font size="3">S U R A B A Y A-60235</font><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="270"> </td>
                    <!-- diubah. menggunakan kolom craete at tapi aku blm bisa ngubahnya -->
                    <td>Surabaya, {{$pengadaan->created_at->isoFormat('D MMMM Y')}}</td>
                    <td width="50"> </td>
                </tr>
                <tr>
                    <td width="270"> </td>
                    <td>Kepada</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Nomor</td>
                    <td>:</td>
                    <!-- diubah -->
                    <td width="250">020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</td>
                    <td width="80">Yth. Sdr. </td>
                    <!-- diubah -->
                    <td width="250">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}} {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
                <tr>
                    <td width="80">Sifat</td>
                    <td>:</td>
                    <td width="175">Segera</td>
                    <td> </td>
                    <!-- diubah -->
                    <td>{{$pengadaan->pengadaan->pelaksana->alamat}}</td>
                </tr>
                <tr>
                    <td width="80">Lampiran</td>
                    <td>:</td>
                    <td width="175">-</td>
                    <td> </td>
                    <td>di</td>
                </tr>
                <tr>
                    <td width="80">Perihal</td>
                    <td>:</td>
                    <td width="175">Undangan <br><u> Klarifikasi/Negosiasi</u></td>
                    <td></td>
                    <td><u><b>{{$pengadaan->pengadaan->pelaksana->kota}}</b></u></td>
                </tr>
            </table>

            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Mengharap dengan hormat kehadiran Saudara dalam acara Klarifikasi dan Negosiasi pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}} yang akan diadakan pada :</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="100">Hari</td>
                    <td width="10">:</td>
                    <td width="450">{{$pengadaan->tanggal->isoFormat('dddd')}}</td>
                </tr>
                <tr>
                    <td width="100">Tanggal</td>
                    <td width="10">:</td>
                    <td width="450">{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
                <tr>
                    <td width="100">Pukul</td>
                    <td width="10">:</td>
                    <td width="450">10.00 WIB</td>
                </tr>
                <tr>
                    <td width="100">Tempat</td>
                    <td width="10">:</td>
                    <td width="450">Ruang Argopuro Dinas Komunikasi Dan Informatika Provinsi</td>
                </tr>
                <tr>
                    <td width="100"> </td>
                    <td width="10"> </td>
                    <td width="450">Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Demikian untuk menjadikan periksa.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="470"> </td>
                    <td width="250" align="center">PEJABAT PENGADAAN</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            @php
                use App\Models\pejabat;
                $pejabat = Pejabat::all();
            @endphp
            @foreach ($pejabat as $pejabat)
                <table border="0" align="center">
                    <tr>
                        <td width="470"> </td>
                        <td width="250" align="center"><u>{{$pejabat->pejabat_pengadaan}}</u></td>
                    </tr>
                    <tr>
                        <td width="470"> </td>
                        <td align="center">NIP. {{$pejabat->nip_pejabat_pengadaan}}</td>
                    </tr>
                </table>
            @endforeach
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
    </div>
</div>

@endsection
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
@php
    use App\Models\pejabat;
    $pejabat = Pejabat::all();
@endphp
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
                    <td width="560">
                        <center><b>PENETAPAN PENYEDIA BARANG / JASA</b>
                    </td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="50">
                        <center>
                            <font size="2">Nomor</font>
                    </td>
                    <td>
                        <center>
                            <font size="2">:</font>
                    </td>
                    <td width="150">
                        <center>
                            <font size="2">020/{{$pengadaan->nomor}}/114.6/2022</font>
                    </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    {{-- //memanggil tanggal dan no.pengadaan --}}
                    <td width="560" style="text-indent: 45px; text-align: justify;">Berdasarkan Berita Acara Evaluasi Dokumen Prakualifikasi Tanggal {{$pengadaan->deskripsi_tgl}} Nomor : 020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}} dan Berita Acara Klarifikasi/Negosiasi Penawaran Tanggal @foreach($pejabat as $pejabat) {{$pejabat->tanggal_sk->isoFormat('D MMMM Y')}} Nomor : {{$pejabat->nomor_sk}}, Pekerjaan Pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}}, dengan ini Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur menetapkan penyedia jasa tersebut di bawah ini untuk sebagai Penyedia Barang/Jasa dengan nilai HPS sebesar Rp. {{$pengadaan->pengadaan->total_hps}},- ({{$pengadaan->pengadaan->deskripsi_hps}}) :</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="190">Nama Perusahaan</td>
                    <td width="10">:</td>
                    <td width="300">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
                <tr>
                    <td width="190">Nama Penanggung Jawab</td>
                    <td width="10">:</td>
                    <td width="300">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
                <tr>
                    <td width="190">Alamat Perusahaan</td>
                    <td width="10">:</td>
                    <td width="300">{{$pengadaan->pengadaan->pelaksana->alamat}}</td>
                </tr>
                <tr>
                    <td width="190">Nomor Pokok Wajib Pajak</td>
                    <td width="10">:</td>
                    <td width="300">{{$pengadaan->pengadaan->pelaksana->npwp}}</td>
                </tr>
                <tr>
                    <td width="190">Harga Penawaran Setelah Negosiasi</td>
                    <td width="10">:</td>
                    <td width="300">Rp. {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},-({{$pengadaan->pengadaan->deskripsi_negosiasi}})</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560" style="text-indent: 45px; text-align: justify;">Demikian atas perhatiannya diucapkan terima kasih.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td width="250" align="center">Surabaya, {{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
                <tr>
                    <td width="300"> </td>
                    <td align="center">PEJABAT PENGADAAN</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td width="250" align="center"><u>{{$pejabat->pejabat_pengadaan}}</u></td>
                </tr>
                <tr>
                    <td width="300"> </td>
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
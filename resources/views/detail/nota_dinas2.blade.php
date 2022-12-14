@extends('layouts.index')
@section('content')
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
            <div style="text-align: center">
                <font color="black" border="0" align="center" font-size="2">
                    <p align="center"><b> DINAS KOMUNIKASI DAN INFORMATIKA </b></p>
                    <p align="center"><b> PROVINSI JAWA TIMUR </b></p>
                </font>
                <hr width="630" colspan="2">
                <p align="center"><u><b> NOTA DINAS </b></u></p>
            </div>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Kepada</td>
                    <td>:</td>
                    <td width="475">Yth. Sdr. Panitia Pengadaan Dinas Komunikasi dan</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80"> </td>
                    <td width="5"> </td>
                    <td width="475">Informatika Provinsi Jawa Timur</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Dari</td>
                    <td>:</td>
                    <td width="475">Pejabat Pembuat Komitmen</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Tanggal</td>
                    <td>:</td>
                    <td width="475">{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Nomor</td>
                    <td>:</td>
                    <td width="475">020/{{$pengadaan->nomor}}/114.6/2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Sifat</td>
                    <td>:</td>
                    <td width="475">Segera</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Lampiran</td>
                    <td>:</td>
                    <td width="475">1 (satu) berkas</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Perihal</td>
                    <td>:</td>
                    {{-- <td width="475">Pemrosesan Administrasi Pengadaan {{ $pengadaan->tanggal }}</td> --}}
                    <td width="475">Pemrosesan Administrasi Pengadaan {{ $pengadaan->pengadaan->jenis_pengadaan }}</td>
                    {{-- <td width="475">Pemrosesan Administrasi Pengadaan {{ $jadwal->jenis_pengadaan }}</td> --}}
                </tr>
            </table>
            <hr width="630" colspan="2">
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565" style="text-indent: 45px; text-align: justify;">Bersama ini ini diberitahukan, bahwa DPA-SKPD Bagian Data dan Statistik pada Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('D MMMM Y')}}, kode rekening {{ $pengadaan->pengadaan->kode_rekening}} pengadaan {{ $pengadaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dengan rincian sebagai berikut :</td>
                </tr>
            </table>
            <br>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="50px" scope="col">id pengadaan</th>
                        {{-- <th width="50px" scope="col">No</th> --}}
                        <th width="265px" scope="col">Belanja Alat/Bahan Untuk Kegiatan Kantor </th>
                        <th width="100px" scope="col">Jumlah Barang</th>
                        <th width="100px" scope="col">Satuan</th>
                        <th width="100px" scope="col">Harga Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $brg)
                    <tr>
                        <th scope="row">{{$brg->pengadaan_id}}</th>
                        <td>{{$brg->barang}}</td>
                        <td align="center">{{$brg->jumlah_barang}}</ /td>
                        <td align="center">{{$brg->satuan}}</td>
                        <td align="center">Rp. {{number_format($brg->harga_satuan)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565" style="text-indent: 45px; text-align: justify;">Sehubungan dengan hal tersebut diatas, untuk penyedia Barang/Jasa ditunjuk {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}, {{$pengadaan->pengadaan->pelaksana->alamat}}. Untuk itu diminta bantuannya untuk segera diproses sesuai prosedur yang berlaku.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565" style="text-indent: 45px;">Demikian untuk pelaksanaannya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>PEJABAT PEMBUAT KOMITMEN</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>I WAYAN RUDY ARTHA, S.Kom</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>NIP. 19770517 200901 1 005</td>
                    <td width="50"> </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
    </div>
    {{-- <div class="modal-footer mt-3">
        <button type="back" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a type="submit" class="btn btn-primary " href="{{ url('/print_notadinas2')  }}">Cetak PDF <i class="fa fa-save"></i></a>
    </div> --}}
</div>

@endsection
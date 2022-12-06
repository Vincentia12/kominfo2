@extends('layouts/index')
@section('content')
{{-- @section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
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
                    <td width="300"> </td>
                    <!-- diubah. menggunakan kolom craete at tapi aku blm bisa ngubahnya -->
                    <td>Surabaya, {{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                    <td width="50"> </td>
                </tr>
                <tr>
                    <td width="300"> </td>
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
                    <td width="175">020/{{$pengadaan->nomor}}/114.6/2022</td>
                    <td width="110"> </td>
                    <!-- diubah -->
                    <td>Yth. Sdr. {{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}} {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Sifat</td>
                    <td>:</td>
                    <td width="175">Segera</td>
                    <td width="70"> </td>
                    <!-- diubah -->
                    <td>{{$pengadaan->pengadaan->pelaksana->alamat}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Lampiran</td>
                    <td>:</td>
                    <td width="265">-</td>
                    <td width="70"> </td>
                    <td width="140">di</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Perihal</td>
                    <td>:</td>
                    <td width="335">Undangan Persiapan </td>
                    <td width="140">SURABAYA</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80"> </td>
                    <td width="5"> </td>
                    <td width="475">Pengadaan Langsung</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Diberitahukan bahwa SKPD Dinas Komunikasi Dan Informatika Provinsi Jawa Timur akan melaksanakan Pengadaan Langsung, untuk :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="150">Paket Pekerjaan</td>
                    <td>:</td>
                    <!-- diubah -->
                    <td width="405">{{ $pengadaan->pengadaan->jenis_pengadaan }}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="150">Lingkup pekerjaan</td>
                    <td>:</td>
                    <td width="405">PK melalui Pejabat Pengadaan mengundang Penyedia</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="155"> </td>
                    <td> </td>
                    <td width="405"> Barang untuk menyampaikan penawaran atas paket pengadaan barang yang tercantum dalam Spesifikasi Teknis, Daftar Kuantitas dan Harga serta nomor pekerjaan yang tercantum dalam LDP. Penyedia Barang yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu dan perkiraan batas akhir waktu penyelesaian yang tercantum dalam LDP.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="150">Sumber Dana</td>
                    <td>:</td>
                    <td width="405">APBD Provinsi Jawa Timur Tahun Anggaran 2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="150">Nilai HPS</td>
                    <td>:</td>
                    <!-- diubah -->
                    <td width="405">Rp. {{$pengadaan->pengadaan->total_hps}},-</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="155"> </td>
                    <td> </td>
                    <!-- diubah -->
                    <td width="405">{{$pengadaan->pengadaan->deskripsi_hps}}</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Apabila saudara berminat untuk mengikuti paket pengadaan langsung tersebut diharap untuk menyerahkan formulir kualifikasi sebagaimana terlampir yang diisi dengan jelas dan benar, Formulir Kualifikasi tersebut paling lambat diserahkan pada :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="100">Hari/Tanggal</td>
                    <td>:</td>
                    <!-- diubah -->
                    <td width="455">{{ $pengadaan->hari }}/{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="100">Jam</td>
                    <td>:</td>
                    <td width="455">10.00 WIB</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="100">Tempat</td>
                    <td>:</td>
                    <td width="455">Ruang Argopuro lt.II Dinas Komunikasi Dan Informatika</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="105"> </td>
                    <td> </td>
                    <td width="455">Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Apabila sampai dengan jam tersebut diatas saudara tidak menyampaikan formulir prakualifikasi tersebut maka dianggap tidak berminat mengikuti pengadaan langsung. Apabila perusahaan saudara dianggap mampu maka akan diundang mengikuti proses pengadaan langsung untuk pekerjaan tersebut diatas.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Demikian disampaikan atas perhatian dan partisipasi Saudara diucapkan terima kasih.</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>PEJABAT PENGADAAN</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>ADI KURNIAWAN.S.Kom.,M.Kom</td>
                    <td width="50"> </td>
                </tr>
                <tr>
                    <td width="300"> </td>
                    <td>NIP. 19890618 201403 1 002</td>
                    <td width="50"> </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button type="back" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a type="submit" class="btn btn-primary " href="{{ url('/print_notadinas4')  }}">Cetak PDF <i class="fa fa-save"></i></a>
    </div>
</div>

@endsection
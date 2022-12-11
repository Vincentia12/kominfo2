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
                <table border="0" align="center">
                    <tr>
                        <td width="270"> </td>
                        <!-- diubah. menggunakan kolom craete at tapi aku blm bisa ngubahnya -->
                        <td>Surabaya, {{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
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
                        <td width="175">Undangan Permintaan <br><u> Penawaran Harga</u>
                        </td>
                        <td></td>
                        <td><u><b>{{$pengadaan->pengadaan->pelaksana->kota}}</b></u></td>
                    </tr>
                </table>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Bahwa dalam rangka pelaksanaan proses pengadaan langsung, untuk :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Paket Pekerjaan</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <!-- diubah -->
                    <td width="520" style="text-align: justify;">{{ $pengadaan->pengadaan->jenis_pengadaan }}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Lingkup pekerjaan</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;">PK melalui Pejabat Pengadaan mengundang Penyedia Barang untuk menyampaikan penawaran atas paket pengadaan barang yang tercantum dalam Spesifikasi Teknis, Daftar Kuantitas dan Harga serta nomor pekerjaan yang tercantum dalam LDP. Penyedia Barang yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu dan perkiraan batas akhir waktu penyelesaian yang tercantum dalam LDP.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Sumber Dana</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;"> APBD Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Nilai HPS</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;">Rp. {{$pengadaan->pengadaan->total_hps}},- {{$pengadaan->pengadaan->deskripsi_hps}}</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-align: justify; text-indent: 45px;">Diharap saudara untuk menyampaikan dokumen penawaran paling lambat pada :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Hari/Tanggal</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;">{{ $pengadaan->tanggal->isoFormat('dddd')}} / {{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Jam</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;">10.00 WIB</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Tempat</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;">Ruang Argopuro lt.II Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style=" text-align: justify;">Sebelum batas waktu penyampaian dokumen penawaran apabila dalam dokumen Pengadaan Langsung sebagaimana terlampir terdapat hal yang tidak jelas atau perlu penjelasan maka dapat ditanyakan kepada Pejabat Pengadaan.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Demikian disampaikan atas perhatian dan partisipasi Saudara diucapkan terima kasih.</td>
                </tr>
            </table>
            <br>
            <div class="center">
            @php
            use App\Models\pejabat;
            $pejabat = Pejabat::all();
            @endphp
            @foreach ($pejabat as $pejabat)
                <table border="0" align="center" width="650">
                    <tr>
                        <td width="325"> </td>
                        <td width="325" align="center">PEJABAT PENGADAAN</td>
                        {{-- <td width="50"> </td> --}}
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <table border="0" align="center" width="650">
                    <tr>
                        <td  width="325"> </td>
                        <td  width="325" align="center"><u>{{$pejabat->pejabat_pengadaan}}</u></td>
                    </tr>
                    <tr>
                        <td  width="325"> </td>
                        <td  width="325" align="center">NIP. {{$pejabat->nip_pejabat_pengadaan}}</td>
                    </tr>
                </table>
            @endforeach
            </div>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
    </div>
</div>

@endsection
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
                    <td width="175">Penunjukan Penyedia<br><u>Barang/Jasa</u>
                    </td>
                    <td></td>
                    <td><u><b>{{$pengadaan->pengadaan->pelaksana->kota}}</b></u></td>
                </tr>
            </table>
            @php
                use App\Models\Jadwal;
                use App\Models\pejabat;

                $png = $pengadaan->pengadaan_id;
                $NotaDinasDariPejabatPengadaanPPK = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
                ->where('jadwals.kegiatan', '=', 'Nota Dinas dari Pejabat Pengadaan ke PPK')
                ->get();

                $pejabat = Pejabat::all();
            @endphp
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="660" style="text-align: left ;text-align: justify; text-indent: 45px;">Sesuai dengan Surat Penawaran Saudara tanggal 24 Agustus 2022 Nomor : 233/PEN/PN/IX/2022 dan Nota Dinas @foreach ($NotaDinasDariPejabatPengadaanPPK as $ndpp) tanggal {{$ndpp->tanggal->isoFormat('D MMMM Y')}} Nomor : 020/{{$ndpp->nomor}}/114.6/{{$ndpp->tanggal->format('Y')}} @endforeach perihal Penyampaian Berita Acara Proses Pengadaan Langsung maka Pekerjaan Pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}} kami menunjuk:</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2" width="660">
                <tr>
                    <td width="190">Nama Perusahaan</td>
                    <td width="10">:</td>
                    <td width="330">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
                <tr>
                    <td width="190">Nama Penanggung Jawab</td>
                    <td width="10">:</td>
                    <td width="360">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
                <tr>
                    <td width="190">Alamat Perusahaan</td>
                    <td width="10">:</td>
                    <td width="360">{{$pengadaan->pengadaan->pelaksana->alamat}}</td>
                </tr>
                <tr>
                    <td width="190">Nomor Pokok Wajib Pajak</td>
                    <td width="10">:</td>
                    <td width="360">{{$pengadaan->pengadaan->pelaksana->npwp}}</td>
                </tr>
                <tr>
                    <td width="190">Harga Penawaran Setelah Negosiasi</td>
                    <td width="10">:</td>
                    <td width="360">Rp. {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},-({{$pengadaan->pengadaan->deskripsi_negosiasi}})</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="660" style="text-align: left ;text-align: justify; text-indent: 45px;">Dengan ketentuan bahwa, pekerjaan dimaksud dilaksanakan terhitung sejak ditandatangani Surat Perintah Mulai Kerja.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Demikian untuk menjadi maklum.</td>
                </tr>
            </table>
            @foreach ($pejabat as $pjb)
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
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                </tr>
                <tr>
                    <td width="300"> </td>
                    <td>NIP. {{$pjb->nip_pejabat_komitmen}}</td>
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
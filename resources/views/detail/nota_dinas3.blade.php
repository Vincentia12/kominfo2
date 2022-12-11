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
            <div style="text-align: center">
                <font color="black" border="0" align="center" font-size="2">
                    <p align="center"><b> DINAS KOMUNIKASI DAN INFORMATIKA </b></p>
                    <p align="center"><b> PROVINSI JAWA TIMUR </b></p>
                </font>
                <hr width="630" colspan="2">
                <p align="center"><u><b> NOTA DINAS </b></u></p>
            </div>
            <br>
            <div style="font-family: Arial;">
                <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80">Kepada</td>
                        <td>:</td>
                        <td width="475">Yth. Sdr. Panitia Pengadaan Dinas Komunikasi dan</td>
                    </tr>
                    <tr>
                        <td width="80">Dari</td>
                        <td>:</td>
                        <td width="475">Pejabat Pengadaan</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
        
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->format('Y')}}</td>
                    </tr>
                    <tr>
                        <td>Sifat</td>
                        <td>:</td>
                        <td>Segera</td>
                    </tr>
                    <tr>
                        <td>Lampiran</td>
                        <td>:</td>
                        <td>1 (satu) berkas</td>
                    </tr>
                    <tr>
                        <td width="80">Perihal</td>
                        <td>:</td>
                        <td width="475">Penyampaian Berita Acara Proses Pengadaan Langsung</td>
                    </tr>
                </table>
                <br>
            </div>
            <hr width="630" colspan="2">
            @php
            use App\Models\Jadwal;
            use App\Models\pejabat;
        
            $png = $pengadaan->pengadaan_id;
        
            $BeritaAcaraHasilPengadaanLangsung = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
            ->where('jadwals.kegiatan', '=', 'BA. Hasil Pengadaan Langsung')
            ->get();
            $pejabat = Pejabat::all();
        
            @endphp
            <br>
            
            <table border="0" align="center" font-size="2" width="600">
                <tr>
                    <td style="text-align: left ;text-align: justify; text-indent: 45px;"> @foreach ($BeritaAcaraHasilPengadaanLangsung as $bahpl) Sesuai dengan Berita Acara Hasil Pengadaan Langsung Nomor : 020/{{$bahpl->nomor}}/114.6/{{$bahpl->tanggal->format('Y')}} Tanggal {{$bahpl->tanggal}}@endforeach untuk pengadaan{{$pengadaan->pengadaan->jenis_pengadaan}} Printer maka bersama ini kami sampaikan administrasi proses pengadaan langsung yang telah selesai dilaksanakan terhadap:</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="150">Nama Perusahaan</td>
                    <td>:</td>
                    <td>{{ $pengadaan->pengadaan->pelaksana->pt_pelaksana }}</td>
                </tr>
                <tr>
                    <td width="150">Alamat</td>
                    <td>:</td>
                    <td>{{ $pengadaan->pengadaan->pelaksana->alamat }}, {{ $pengadaan->pengadaan->pelaksana->kota }}</td>
                </tr>
                <tr>
                    <td width="150">NPWP</td>
                    <td>:</td>
                    <td>{{ $pengadaan->pengadaan->pelaksana->npwp }}</td>
                </tr>
                <tr>
                    <td width="150">Harga Penawaran Setelah Negosiasi</td>
                    <td>:</td>
                    <td>Rp. {{ number_format($pengadaan->pengadaan->nilai_negosiasi)}},-({{ $pengadaan->pengadaan->deskripsi_negosiasi}})</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="1" width="600">
                <tr>
                    <td style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian atas perhatiannya diucapkan terima kasih.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="350"> </td>
                    <td align="center" width="260">PEJABAT PENGADAAN</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            @foreach ($pejabat as $pejabat)
                <table border="0" align="center">
                    <tr>
                        <td width="350"> </td>
                        <td align="center" width="260"><u>{{$pejabat->pejabat_pengadaan}}</u></td>
                    </tr>
                    <tr>
                        <td width="350"> </td>
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
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
            <div class="row">
                <table border="0" align="center">
                    <tr>
                        <td style="text-align: center">
                            <b>TERM OF REFFERENCE <br> (TOR) </b>
                        </td>
                    <tr>
                </table>
            </div>
            <div class="row">
                <table border="0" align="center">
                    <tr>
                        <td style="vertical-align:top" style="text-align: center; text-transform: uppercase;">
                            <b>Kegiatan Pengadaan Belanja {{$pengadaan->pengadaan->jenis_pengadaan}}</b>
                        </td>
                    <tr>
                </table>

            </div>

            <br>
            <div class="row">
                <table width="880" border="0" align="center">
                    <tr>
                        <!-- <td width="8"></td> -->
                        <td style="text-align: left ;text-align: justify; text-transform: uppercase;"><b>latar belakang</b></td>
                    </tr>
                    <tr>
                        <td style="text-align:justify;">
                            Alat Tulis Kantor (ATK) adalah sarana penunjang yang mempunyai peranan penting dalam menjalankan fungsi kegiatan pelayanan, tugas dan administrasi sebuah organisasi khususnya di Dinas Komunikasi dan Informatika Provinsi Jawa Timur. Untuk memenuhi kebutuhan administrasi sehari - hari maka, ATK toner Printer ini telah dianggarkan pada kegiatan Peningkatan Kapasitas Kelembagaan Statistik Sektoral Sub Belanja Alat/ Bahan Untuk Kegiatan Kantor.
                        </td>
                    </tr>
                </table>
            </div>

            <br>
            <div class="row">
                <table width="880" border="0" align="center">
                    <tr>
                        <!-- <td width="8"></td> -->
                        <td style="text-align: left ;text-align: justify; text-transform: uppercase;"><b>tujuan</b></td>
                    </tr>
                    <tr>
                        <td style="text-align:justify;">
                            Tujuan Penyediaan Alat Tulis Kantor adalah untuk menunjang kebutuhan kerja Dinas Komunikasi dan Informatika Provinsi Jawa Timur dan harapannya agar dapat meningkatkan kinerja pegawai sehingga dapat memenuhi target kinerja organisasi yang sudah ditetapkan.
                        </td>
                    </tr>
                </table>
            </div>

            <br>
            <div class="row">
                <table width="880" border="0" align="center">
                    <tr>
                        <!-- <td width="8"></td> -->
                        <td style="text-align: left ;text-align: justify; text-transform: uppercase;"><b>nama kegiatan</b></td>
                    </tr>
                    <tr>
                        <td style="text-align:justify;">
                            “{{$pengadaan->pengadaan->jenis_pengadaan}}“
                        </td>
                    </tr>
                </table>
            </div>

            <div class="row">
                <table width="880" border="1" align="center" style="color: #000000; border-color: #000000; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <td style="vertical-align:top">
                                <center><b>NO.</b></center>
                            </td>
                            <td style="vertical-align:top">
                                <center><b>PEKERJAAN</b> </center>
                            </td>
                            <td style="vertical-align:top">
                                <center><b>KUANTITAS</b> </center>
                            </td>
                            <td style="vertical-align:top">
                                <center><b>SATUAN</b> </center>
                            </td>
                            <td style="vertical-align:top">
                                <center><b>HARGA SATUAN</b> </center>
                            </td>
                            <td style="vertical-align:top">
                                <center><b>JUMLAH HARGA</b> </center>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" style="background-color: darkgrey;">
                                <center><b>1</b></center>
                            </td>
                            <td style="vertical-align:top" style="background-color: lightgrey;">
                                <center><b>2</b></center>
                            </td>
                            <td style="vertical-align:top" style="background-color: lightgrey;">
                                <center><b>3</b></center>
                            </td>
                            <td style="vertical-align:top" style="background-color: lightgrey;">
                                <center><b>4</b></center>
                            </td>
                            <td style="vertical-align:top" style="background-color: lightgrey;">
                                <center><b>5</b></center>
                            </td>
                            <td style="vertical-align:top" style="background-color: lightgrey;">
                                <center><b>6</b></center>
                            </td>
                        </tr>
                    </thead>
                    <tr>
                        <td style="vertical-align:top" height="20"></td>
                        <td style="vertical-align:top" height="20"></td>
                        <td style="vertical-align:top" height="20"></td>
                        <td style="vertical-align:top" height="20"></td>
                        <td style="vertical-align:top" height="20"></td>
                        <td style="vertical-align:top" height="20"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top">1</td>
                        <td style="vertical-align:top" colspan="5">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                    </tr>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($barang as $brg)
                        <tr>
                            <td></td>
                            <td style="vertical-align:top">{{$brg->barang}}</td>
                            <td style="vertical-align:top">{{$brg->jumlah_barang}}</td>
                            <td style="vertical-align:top">{{$brg->satuan}}</td>
                            <td style="vertical-align:top">Rp. {{number_format($brg->harga_satuan)}}</td>
                            <td style="vertical-align:top">Rp. {{number_format($brg->jumlah_harga)}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td style="vertical-align:top" style="text-align:right" colspan="5"><b>Total</b></td>
                            @php
                            $png = $pengadaan->pengadaan_id;
                            $sum = DB::table('barangs')
                            ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                            ->sum('jumlah_harga');
                            $ppn = $sum * 0.11;
                            @endphp
                            <td style="vertical-align:top">Rp. {{number_format($sum)}}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" style="text-align:right" colspan="5"><b>PPN 11%</b></td>
                            <td style="vertical-align:top">Rp. {{number_format($ppn)}}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" style="text-align:right" colspan="5"><b> Jumlah Total</b></td>
                            <td style="vertical-align:top">Rp. {{number_format($pengadaan->pengadaan->nilai_negosiasi)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <br>
            <div class="row">
                <table width="880" border="0" align="center">
                    <tr>
                        <!-- <td width="8"></td> -->
                        <td style="text-align: left ;text-align: justify; text-transform: uppercase;"><b>pelaksanaan</b></td>
                    </tr>
                </table>
            </div>
            <div class="row">
                <table width="880" border="0" align="center">
                    <tr>
                        <td width="50">Hari</td>
                        <td width="10">:</td>
                        <td width="470">{{$pengadaan->tanggal->isoFormat('dddd')}}</td>
                    </tr>
                    <tr>
                        <td width="50">Tanggal</td>
                        <td width="10">:</td>
                        <td width="470">{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                    </tr>
                    <tr>
                        <td width="50">Tempat</td>
                        <td width="10">:</td>
                        <td width="470">Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
                    </tr>
                </table>
            </div>

            <br>
            <div class="row">
                <table width="880" border="0" align="center">
                    <tr>
                        <!-- <td width="8"></td> -->
                        <td style="text-align: left ;text-align: justify; text-transform: uppercase;"><b>output kegiatan</b></td>
                    </tr>
                    <tr>
                        <!-- <td width="8"></td> -->
                        <td style="text-align: left ;text-align: justify; ">Tersedianya {{$pengadaan->pengadaan->jenis_pengadaan}} tepat waktu sesuai jadwal yang ada</td>
                    </tr>
                </table>
            </div>

            <br>
            <div class="row">
                <table width="880" border="0" align="center">
                    <tr>
                        <!-- <td width="8"></td> -->
                        <td style="text-align: left ;text-align: justify; text-transform: uppercase;"><b>metode kegiatan</b></td>
                    </tr>
                </table>
            </div>
            <div class="row">
                <table width="880" border="0" align="center">
                    <tr>
                        <td width="20">1.</td>
                        <td width="470">Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
                    </tr>
                </table>
            </div>

            <br>
            <div class="row">
                <table width="880" border="0" align="center">
                    <tr>
                        <td style="text-transform: uppercase;" width="540"><u><i><b>RINCIAN RENCANA ANGGARAN BIAYA</b></i></u></td>
                    </tr>
                    <tr>
                        <td width="540">Dari dana APBD Dinas Kominfo Prov. Jawa Timur Tahun {{$pengadaan->tanggal->isoFormat('Y')}} dengan kode rekening {{$pengadaan->pengadaan->kode_rekening}}
                        </td>
                    </tr>
                </table>
            </div>

            <br>
            @php
            use App\Models\Jadwal;
            use App\Models\pejabat;

            $png = $pengadaan->pengadaan_id;

            $KuitansiKontrak = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
            ->where('jadwals.kegiatan', '=', 'Kuitansi Kontrak')
            ->get();

            $pejabat = Pejabat::all();

            @endphp
            @foreach ($pejabat as $pjb)


            <br>
            <div style="text-align:center ;">
                <table style="text-align: center" border="0" font-size="0" width="880" align="center">
                    <tr>
                        <td style="vertical-align:top" width="250"></td>
                        <td style="vertical-align:top" width="250">PEJABAT PEMBUAT KOMITMEN</td>
                    </tr>
                </table>
            </div>
            <br><br><br><br>
            <div style="text-align:center ;">
                <table style="text-align: center" border="0" font-size="0" width="880" align="center">
                    <tr>
                        <td style="vertical-align:top" width="250"></td>
                        <td style="vertical-align:top" width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top" width="250"></td>
                        <td style="vertical-align:top" width="250">{{$pjb->nip_pejabat_komitmen}}</td>
                    </tr>
                </table>
            </div>
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
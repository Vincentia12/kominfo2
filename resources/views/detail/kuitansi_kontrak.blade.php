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
            <table border="0" width="700" align="center" align="center">
                <tr>
                    <td>
                        <img src="{{asset('img/logo_jatim.png')}}" width="70" height="70">
                    </td>
                    <td>
                        
                            <font size="<b>PEMERINTAH PROVINSI JAWA TIMUR</b></font><br>
                            <fontze="3">DINAS KOMUNIKASI DAN INFORMATIKA</fontze=><br>
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
            <table border="0" width="0" align="center">
                <tr>
                    <td width="150">Tahun Anggaran</td>
                    <td width="5">:</td>
                    <td width="200">{{$pengadaan->tanggal->isoFormat('Y')}}</td>
                </tr>
                <tr>
                    <td width="150">Nomor Bukti</td>
                    <td width="5">:</td>
                    <td width="200">020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</td>
                </tr>
                <tr>
                    <td width="150">Mata Anggaran</td>
                    <td width="5">:</td>
                    <td width="200">{{$pengadaan->pengadaan->kode_rekening}}</td>
                </tr>
            </table>
            <br>
            <div style="text-align: center">
                {{-- <font color="black">  --}}
                <p align="center"><b> KUITANSI KONTRAK </b></p>
            </div>
            <br>
            <div>
                <div>
                    <table border="0" width="700" align="center">
                        <tr>
                            <td width="150">Sudah Terima Dari</td>
                            <td width="5">:</td>
                            <td width="420">Pejabat Pembuat Komitmen Diskominfo Prov. Jatim</td>
                        </tr>
                        <tr>
                            <td width="150">
                                Jumlah Uang
                            </td>
                            <td width="5">:</td>
                            <td width="420">Rp. {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},-</td>
                        </tr>
                        <tr>
                            <td width="150">Terbilang</td>
                            <td width="5">:</td>
                            <td width="420">({{$pengadaan->pengadaan->deskripsi_negosiasi}})</td>
                        </tr>
                        <tr>
                            <td width="150">Untuk Pembayaran</td>
                            <td width="5">:</td>
                            <td width="420">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                        </tr>
                    </table>
                </div>
        
                <br>
                <div>
                    <table border="0" width="700" align="center">
                        <tr>
                            <td >Lingkup Pekerjaan /Pengadaan barang / jasa :</td>
                        </tr>
                    </table>
                </div>
                @php
                use App\Models\Jadwal;
                use App\Models\pejabat;
        
                $png = $pengadaan->pengadaan_id;
                // $jdwl = DB::table('jadwals')
                // ->where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
                // // ->where('jadwals.kegiatan', '=', 'Surat Undangan Permintaan Penawaran Harga')
                // ->get();
                $SuratUndanganPermintaanPenawaranHarga = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
                ->where('jadwals.kegiatan', '=', 'Surat Undangan Permintaan Penawaran Harga')
                ->get();
                $SuratPenawaranHarga = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
                ->where('jadwals.kegiatan', '=', 'Surat Penawaran Harga')
                ->get();
                $BeritaAcaraHasilKlarifikasiNegosiasi = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
                ->where('jadwals.kegiatan', '=', 'BA. Klarifikasi/egosiasi')
                ->get();
                $BeritaAcaraHasilPengadaanLangsung = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
                ->where('jadwals.kegiatan', '=', 'BA. Hasil Pengadaan Langsung')
                ->get();
                $SuratPerintahMulaiKerja = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
                ->where('jadwals.kegiatan', '=', 'Surat Perintah Mulai Kerja (SPMK)')
                ->get();
                $BeritaAcaraSerahTerimaHasilPekerjaan = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
                ->where('jadwals.kegiatan', '=', 'BA Serah Terima Hasil Pekerjaan')
                ->get();
                $pejabat = Pejabat::all();
                @endphp
                <br>
                <div>
                    <table width="700" align="center" border="1" style="color: #000000; border-color: #000000; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td style="text-align: center"><b>NO.</b></td>
                                <td style="text-align: center"><b>JENIS BARANG / PEKERJAAN</b> </td>
                                <td style="text-align: center"><b>KUANTITAS</b> </td>
                                <td style="text-align: center"><b>SATUAN</b> </td>
                                <td style="text-align: center"><b>HARGA SATUAN (Rp.)</b> </td>
                                <td style="text-align: center"><b>JUMLAH HARGA (Rp.)</b> </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: lightgrey;"><b>1</b></td>
                                <td style="text-align: center; background-color: lightgrey;"><b>2</b></td>
                                <td style="text-align: center; background-color: lightgrey;"><b>3</b></td>
                                <td style="text-align: center; background-color: lightgrey;"><b>4</b></td>
                                <td style="text-align: center; background-color: lightgrey;"><b>5</b></td>
                                <td style="text-align: center; background-color: lightgrey;"><b>6</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td colspan="6">PENGADAAN BELANJA ALAT/BAHAN UNTUK KEGIATAN KANTOR</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td colspan="5">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach ($barang as $brg)
                            <tr>
                                <td></td>
                                <td>{{$brg->barang}}</td>
                                <td>{{ $brg->jumlah_barang}}</td>
                                <td>{{$brg->satuan}}</td>
                                <td>Rp. {{number_format($brg->harga_satuan)}}</td>
                                <td>Rp. {{number_format($brg->jumlah_harga)}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td style="text-align:right" colspan="5"><b>Total</b></td>
                                @php
                                $png = $pengadaan->pengadaan_id;
                                $sum = DB::table('barangs')
                                ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                                ->sum('jumlah_harga');
                                $ppn = $sum * 0.11;
                                @endphp
                                <td>Rp. {{number_format($sum)}}</td>
                            </tr>
                            <tr>
                                <td style="text-align:right" colspan="5"><b>PPN 11%</b></td>
                                <td>Rp. {{number_format($ppn)}}</td>
                            </tr>
                            <tr>
                                <td style="text-align:right" colspan="5"><b> Jumlah Total</b></td>
                                <td>Rp. {{number_format($pengadaan->pengadaan->nilai_negosiasi)}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table border="0" width="700" align="center">
                        <tr>
                            <td style="vertical-align: top;">1.</td>
                            <td width="5"></td>
                            <td style="text-align: justify;">Pembayaran dengan Sumber Dana APBD Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}}, dibebankan pada DP A - SKPD Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}} Kode Rekening {{$pengadaan->pengadaan->kode_rekening}}
                            </td>
                        </tr>
        
                        <br>
                        <tr>
                            <td style="vertical-align: top;">2.</td>
                            <td width="5"></td>
                            <td style="text-align: justify;">Jangka Waktu Pelaksanaan {{$pengadaan->alokasi}} hari kalender, tanggal pelaksanaan yaitu Tanggal 13 September – 20 September 2022</td>
                        </tr>
                    </table>
                    <br>
                    <table border="0" width="700" align="center">
                        <tr>
                            <td style="text-align: justify; text-indent: 45px;">Demikian Surat Perintah Kerja ini dibuat dengan sebenarnya pada hari, tanggal dan bulan tersebut diatas dalam rangkap 4 (empat), 2 lembar dibubuhi materai yang cukup dan mempunyai kekuatan hukum yang sama.</td>
                        </tr>
                    </table>
                </div>
        
                <br>
                <br>
                {{-- Pejabat --}}
                <div style="text-align:center ;">
                    @foreach ($pejabat as $pjb)
                    <table style="text-align: center" border="0" font-size="0" width="700" align="center">
                        <tr>
                            <td width="20"> </td>
                            <td width="250">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                            <td width="250">PEJABAT PENGADAAN</td>
                            <td width="20"> </td>
                        </tr>
                    </table>
                </div>
                <br><br><br><br>
                <div style="text-align:center ;">
                    <table style="text-align: center" border="0" font-size="0" width="700" align="center">
                        <tr>
                            <td width="20"> </td>
                            <td width="250"><u>{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                            <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                            <td width="20"> </td>
                        </tr>
                        <tr>
                            <td width="20"> </td>
                            <td width="250">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}} </td>
                            <td width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                            <td width="20"> </td>
                        </tr>
                    </table>
                    @endforeach
                </div>
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
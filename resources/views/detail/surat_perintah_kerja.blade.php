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
        use App\Models\Jadwal;
        use App\Models\pejabat;

        $png = $pengadaan->pengadaan_id;
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
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            @foreach ($pejabat as $pj)
            <table border="0" align="center">
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top">
                        <img src="{{asset('img/logo_jatim.png')}}" width="70" height="70">
                    </td>
                    <td style="vertical-align:top" style="vertical-align:top">
                        <center><font size="3"><b>PEMERINTAH PROVINSI JAWA TIMUR</b></font><br>
                                <font size="3">DINAS KOMUNIKASI DAN INFORMATIKA</font><br>
                                <font size="3">Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517</font><br>
                                <font size="3">Website : http://www.jatimprov.go.id </font><br>
                                <font size="2">Email:kominfo@jatimprov.go.id</font><br>
                                <font size="3">S U R A B A Y A-60235</font><br>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;"><hr></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top" width="570"><center><b>SURAT PERINTAH KERJA</b></td>
                <tr>
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top" width="570"><center><font size="2"><b>Nomor : 020/{{$pengadaan->nomor}}/114.6/2022</font></b></td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top" width="600" style="text-indent: 45px; ">Pada hari ini {{$pengadaan->created_at->isoFormat('dddd')}} {{$pengadaan->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
                </tr>
            </table>
            <table border="0" align="center" width="570">
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top">1.</td>
                    <td style="vertical-align:top" style="vertical-align:top">Nama</td>
                    <td style="vertical-align:top" style="vertical-align:top">:</td>
                    {{-- Ambil dari tabel pejabat --}}
                    <td style="vertical-align:top" style="vertical-align:top">{{$pj->pejabat_pembuatan_komitmen}}</td>
                    <td style="vertical-align:top">NIP. {{$pj->nip_pejabat_komitmen}} </td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top"> </td>
                    <td style="vertical-align:top" style="vertical-align:top">Jabatan</td>
                    <td style="vertical-align:top" style="vertical-align:top" width="3">:</td>
                    <td style="vertical-align:top" style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;">Pejabat Pembuat Komitmen Dinas Komunikasi Dan Informatika Provinsi Jawa Timur</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top"> </td>
                    <td style="vertical-align:top" style="vertical-align:top">Alamat Kantor</td>
                    <td style="vertical-align:top" style="vertical-align:top">:</td>
                    <td style="vertical-align:top" style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;">Jl. Ahmad Yani 242 - 244 Surabaya</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top" colspan="5">Bertindak untuk dan atas nama Pemerintah Provinsi Jawa Timur, selanjutnya disebut <b>PIHAK KESATU</b></td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top">2.</td>
                    <td style="vertical-align:top" style="vertical-align:top">Nama</td>
                    <td style="vertical-align:top" style="vertical-align:top">:</td>
                    <td style="vertical-align:top" style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top"> </td>
                    <td style="vertical-align:top" style="vertical-align:top">Jabatan</td>
                    <td style="vertical-align:top" style="vertical-align:top" width="3">:</td>
                    <td style="vertical-align:top" style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top"> </td>
                    <td style="vertical-align:top" style="vertical-align:top">Nama Perusahaan</td>
                    <td style="vertical-align:top" style="vertical-align:top" width="3">:</td>
                    <td style="vertical-align:top" style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top"> </td>
                    <td style="vertical-align:top" style="vertical-align:top">Alamat Kantor</td>
                    <td style="vertical-align:top" style="vertical-align:top">:</td>
                    <td style="vertical-align:top" style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;">{{$pengadaan->pengadaan->pelaksana->alamat}} {{$pengadaan->pengadaan->pelaksana->kota}}</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top" colspan="5">Bertindak untuk dan atas nama Pemerintah Provinsi Jawa Timur, selanjutnya disebut <b>PIHAK KEDUA</b></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" width="570">
                <tr>
                    <td style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;">Berdasarkan :</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" width="3">1.</td>    
                    <td style="vertical-align:top">Surat Permintaan Penawaran Nomor :
                        @foreach ($SuratUndanganPermintaanPenawaranHarga as $supph)
                        020/{{$supph->nomor}}/114.6/{{$supph->tanggal->format('Y')}} Tanggal {{$supph->tanggal}}
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">2.</td>
                    {{-- no surat lain --}}
                    <td style="vertical-align:top">Surat Penawaran Harga Nomor :
                        @foreach ($SuratPenawaranHarga as $sph)
                        {{$sph->nomor}} Tanggal {{$sph->tanggl}}
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">3.</td>
                    {{-- no surat lain --}}
                    <td style="vertical-align:top">Berita Acara Hasil Klarifikasi dan Negosiasi Nomor :
                        @foreach ($BeritaAcaraHasilKlarifikasiNegosiasi as $bahkn)
                        020/{{$bahkn->nomor}}/114.6/{{$bahkn->tanggal->format('Y')}} Tanggal {{$bahkn->tanggal}}
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">4.</td>
                    {{-- no surat lain --}}
                    <td style="vertical-align:top">Berita Acara Hasil Pengadaan Langsung Nomor :
                        @foreach ($BeritaAcaraHasilPengadaanLangsung as $bahpl)
                        020/{{$bahpl->nomor}}/114.6/{{$bahpl->tanggal->format('Y')}} Tanggal {{$bahpl->tanggal}}
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;">Maka PIHAK KESATU menerbitkan Surat Perintah Kerja, dengan ketentuan </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">5.</td>
                    {{-- no surat lain --}}
                    <td style="vertical-align:top">Lingkup Pekerjaan :</td>
                </tr>
            </table>
            <table border="1" align="center" style="color: #333333;border-color: #333333;border-collapse: collapse;" width="570">
                <thead>
                    <tr>
                        <td style="vertical-align:top">NO</td>
                        <td style="vertical-align:top">JENIS BARANG / PEKERJAAN</td>
                        <td style="vertical-align:top">SPESIFIKASI</td>
                        <td style="vertical-align:top">KUANTITAS</td>
                        <td style="vertical-align:top">SATUAN</td>
                        <td style="vertical-align:top">HARGA SATUAN (Rp.)</td>
                        <td style="vertical-align:top">JUMLAH HARGA (Rp.)</td>
                    </tr>
                    <tr style="background-color: lightgrey;">
                        <td style="vertical-align:top">1</td>
                        <td style="vertical-align:top">2</td>
                        <td style="vertical-align:top">3</td>
                        <td style="vertical-align:top">4</td>
                        <td style="vertical-align:top">5</td>
                        <td style="vertical-align:top">6</td>
                        <td style="vertical-align:top">7</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top" colspan="7">PENGADAAN BELANJA ALAT/BAHAN UNTUK KEGIATAN KANTOR</td>
                    </tr>
                </thead>
                <tr>
                    <td style="vertical-align:top">1</td>
                    <td style="vertical-align:top">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                    {{-- <td style="vertical-align:top">{{$barang->jenis_pengadaan}}</td> --}}
                    <td style="vertical-align:top"></td>
                    <td style="vertical-align:top"></td>
                    <td style="vertical-align:top"></td>
                    <td style="vertical-align:top"></td>
                    <td style="vertical-align:top"></td>
                </tr>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($barang as $brg)
                    <tr>
                        {{-- <td style="vertical-align:top">{{$no++}}</td> --}}
                        <td style="vertical-align:top"></td>
                        <td style="vertical-align:top"></td>
                        {{-- <td style="vertical-align:top">{{$brg->pengadaan->jenis_pengadaan}}</td> --}}
                        <td style="vertical-align:top">{{$brg->barang}}</td>
                        <td style="vertical-align:top">{{$brg->jumlah_barang}}</td>
                        <td style="vertical-align:top">{{$brg->satuan}}</td>
                        <td style="vertical-align:top">{{$brg->harga_satuan}}</td>
                        <td style="vertical-align:top">{{$brg->jumlah_harga}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td style="vertical-align:top" style="text-align:right" colspan="6">Total</td>
                        @php
                        $png = $pengadaan->pengadaan_id;
                        $sum = DB::table('barangs')
                        ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                        ->sum('jumlah_harga');
                        $ppn = $sum * 0.11;
                        @endphp
                        <td style="vertical-align:top">{{$sum}}</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top" style="text-align:right" colspan="6">PPN 11%</td>
                        <td style="vertical-align:top">{{$ppn}}</td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top" style="text-align:right" colspan="6">Jumlah Total</td>
                        <td style="vertical-align:top">{{$pengadaan->pengadaan->nilai_negosiasi}}</td>
                    </tr>
                </tbody>
            </table>
            <table border="0" width="570" align="center" >
                <tr>
                    <td style="vertical-align:top">6.</td>
                    <td style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;" style="text-align: left ;text-align: justify; ">Pembayaran dengan Sumber Dana APBD Provinsi Jawa Timur Tahun Anggaran {{date('Y', strtotime($pj->tanggal_sk))}},dibebankan pada DPA - SKPD Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{date('Y', strtotime($pj->tanggal_sk))}}, Kode Rekening {{$pengadaan->pengadaan->pelaksana->kode_rekening}}
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">7.</td>
                    <td style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;">Jangka Waktu Pelaksanaan
                        @foreach ($SuratPerintahMulaiKerja as $spmk)
                        {{$spmk->alokasi}} hari kalender, tanggal pelaksanaan yaitu Tanggal {{$spmk->tanggal}}
                        @endforeach -
                        @foreach ($BeritaAcaraSerahTerimaHasilPekerjaan as $basrhp)
                        {{$basrhp->tanggal}}
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top">8.</td>
                    <td style="vertical-align:top" colspan="2" style="text-align: left ;text-align: justify;">Instruksi kepada PIHAK KEDUA :</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" rowspan="3"> </td>
                    <td style="vertical-align:top" width="3">A.</td>
                    <td style="vertical-align:top">Penagihan hanya dapat dilakukan setelah penyelesaian pekerjaan yang diperintahkan dalam SPK ini dan dibuktikan dengan Berita Acara Serah Terima.</td>
                </tr>
                <tr>
                    <td style="vertical-align:top">B.</td>
                    <td style="vertical-align:top">Jika pekerjaan tidak dapat diselesaikan dalam jangka waktu pelaksanaan pekerjaan karena kesalahan atau kelalaian penyedia maka penyedia berkewajiban untuk membayar denda kepada PPK sebesar 1/1000 (satu per seribu) dari nilai SPK sebelum PPn setiap hari kalender keterlambatan.</td>
                </tr>
                <tr>
                    <td style="vertical-align:top">C.</td>
                    <td style="vertical-align:top">Selain tunduk kepada ketentuan dalam SPK ini, penyedia berkewajiban untuk mematuhi Standar Ketentuan dan Syarat Umum SPK terlampir.</td>
                </tr>
                <br>
                <tr>
                    <td style="vertical-align:top" colspan="3" style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian Surat Perintah Kerja ini dibuat dengan sebenarnya pada hari, tanggal dan bulan tersebut diatas dalam rangkap 4 (empat), 2 lembar dibubuhi materai yang cukup dan mempunyai kekuatan hukum yang sama.</td>
                </tr>
            </table>
            
            <br>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <br>
            <table border="0" align="center">
                <tr>
                    <td style="vertical-align:top" style="vertical-align:top" width="570">Demikian Surat Perintah Kerja ini dibuat dengan sebenarnya pada hari, tanggal dan bulan tersebut diatas dalam rangkap 4 (empat), 2 lembar dibubuhi materai yang cukup dan mempunyai kekuatan hukum yang sama.</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td style="vertical-align:top" style="vertical-align:top" width="280">PIHAK KEDUA</td>
                    <td style="vertical-align:top" style="vertical-align:top" width="280">Menyetujui :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td style="vertical-align:top" style="vertical-align:top" width="280">Penyedia Barang/Jasa</td>
                    <td style="vertical-align:top" style="vertical-align:top" width="280">PIHAK KESATU</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td style="vertical-align:top" style="vertical-align:top" width="280">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td style="vertical-align:top" style="vertical-align:top" width="280">PEJABAT PEMBUAT KOMITMEN</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td style="vertical-align:top" style="vertical-align:top" width="280">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                    <td style="vertical-align:top" style="vertical-align:top" width="280">{{$pj->pejabat_pembuatan_komitmen}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td style="vertical-align:top" style="vertical-align:top" width="280">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                    <td style="vertical-align:top" style="vertical-align:top" width="280">NIP. {{$pj->nip_pejabat_komitmen}}</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td style="vertical-align:top" style="vertical-align:top" width="570">Mengetahui :</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td style="vertical-align:top" style="vertical-align:top" width="570">KUASA PENGGUNA ANGGARAN</td>
                <tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td style="vertical-align:top" style="vertical-align:top" width="570">{{$pj->kuasa_pengguna_anggaran}}</td>
                <tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr align="center">
                    <td style="vertical-align:top" style="vertical-align:top" width="570">NIP. {{$pj->nip_kuasa_pengguna}}</td>
                <tr>
            </table>
            <br>
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
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

<div>
    {{-- /BA/BERITA ACARA --}}
    <div style="text-align: center;">
        {{-- //kopsurat --}}
        <div>
            <table class="table" border="0" align="center">
                <tr>
                    <td>
                        <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                    </td>
                    <td width="40"> </td>
                    <td style="text-align: center" width="500px">
                        <font color="black">
                            <p align="center">
                                <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                                <br> DINAS KOMUNIKASI DAN INFORMATIKA
                                <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                                <br> Website : http://www.jatimprov.go.id
                                <br> Email:kominfo@jatimprov.go.id
                                <br> S U R A B A Y A-60235
                            </p>
                        </font>
                    </td>
                </tr>
            </table>
            <hr>
        </div>
        <br>
        <table border="0">
            <tr>
                <td width="180"></td>
                <td width="100">Tahun Anggaran</td>
                <td width="5">:</td>
                <td width="200">{{$pengadaan->tanggal->isoFormat('Y')}}</td>
            </tr>
            <tr>
                <td width="180"></td>
                <td width="100">Nomor Bukti</td>
                <td width="5">:</td>
                <td width="200">020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</td>
            </tr>
            <tr>
                <td width="180"></td>
                <td width="100">Mata Anggaran</td>
                <td width="5">:</td>
                <td width="200">{{$pengadaan->pengadaan->kode_rekening}}</td>
            </tr>
        </table>
        {{-- judul --}}


        <div style="text-align: center">
            {{-- <font color="black">  --}}
            <p align="center"><b> KUITANSI KONTRAK </b></p>
        </div>
    </div>

    {{-- isi --}}
    <div>
        <div>
            <table border="0">
                <tr>
                    <td width="100">Sudah Terima Dari</td>
                    <td>:</td>
                    <td width="420">Pejabat Pembuat Komitmen Diskominfo Prov. Jatim</td>
                </tr>
                <tr>
                    <td width="100">
                        Jumlah Uang
                    </td>
                    <td>:</td>
                    <td width="420">{{$pengadaan->pengadaan->nilai_negosiasi}}</td>
                </tr>
                <tr>
                    <td width="100">Terbilang</td>
                    <td>:</td>
                    <td width="420">({{$pengadaan->pengadaan->deskripsi_negosiasi}})</td>
                </tr>
                <tr>
                    <td width="100">Untuk Pembayaran</td>
                    <td>:</td>
                    <td width="420">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                </tr>
            </table>
        </div>

        <br>
        <div>
            <table border="0">
                <tr>
                    <td width="530">Lingkup Pekerjaan /Pengadaan barang / jasa :</td>
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
        // if ($jdwl->kegiatan = 'Surat Undangan Permintaan Penawaran Harga') {
        // $idlain = DB::table('jadwals')
        // // ->where('jadwals.pengadaan_id', '=', $jdwl->id )
        // ->get();
        // // $idlain = Jadwal::all();
        // // Jadwal::all();
        // }else {
        // # code...
        // }

        // if ($jdwl->kegiatan = 'Surat Undangan Permintaan Penawaran Harga')
        // elseif (condition) {
        // # code...
        // }
        // endif
        // return $jdwl;
        @endphp
        <br>
        <div>
            <table border="1" align="center" style="color: #000000; border-color: #000000; border-collapse: collapse;">
                <thead>
                    <tr>
                        <td>
                            <center><b>NO.</b></center>
                        </td>
                        <td>
                            <center><b>JENIS BARANG / PEKERJAAN</b> </center>
                        </td>
                        <td>
                            <center><b>KUANTITAS</b> </center>
                        </td>
                        <td>
                            <center><b>SATUAN</b> </center>
                        </td>
                        <td>
                            <center><b>HARGA SATUAN (Rp.)</b> </center>
                        </td>
                        <td>
                            <center><b>JUMLAH HARGA (Rp.)</b> </center>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: lightgrey;">
                            <center><b>1</b></center>
                        </td>
                        <td style="background-color: lightgrey;">
                            <center><b>2</b></center>
                        </td>
                        <td style="background-color: lightgrey;">
                            <center><b>3</b></center>
                        </td>
                        <td style="background-color: lightgrey;">
                            <center><b>4</b></center>
                        </td>
                        <td style="background-color: lightgrey;">
                            <center><b>5</b></center>
                        </td>
                        <td style="background-color: lightgrey;">
                            <center><b>6</b></center>
                        </td>
                    </tr>
                    <tr colspan="7">PENGADAAN BELANJA ALAT/BAHAN UNTUK KEGIATAN KANTOR</tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($barang as $brg)
                    <tr>
                        <td></td>
                        <td>{{$brg->barang}}</td>
                        <td>{{$brg->jumlah_barang}}</td>
                        <td>{{$brg->satuan}}</td>
                        <td>{{$brg->harga_satuan}}</td>
                        {{-- @php
                        // $jumlahbarang = $barang["jumlah_barang"];
                        $jumlahbarang = $brg->jumlah_barang;
                        $hargabarang = $brg->harga_satuan;
                        // $hargabarang = $barang["harga_barang"];

                        $jumlah_harga = $jumlahbarang * $hargabarang;
                        @endphp --}}
                        <td>{{$brg->jumlah_harga}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td style="text-align:right" colspan="4"><b>Total</b></td>
                        @php
                        $png = $pengadaan->pengadaan_id;
                        $sum = DB::table('barangs')
                        ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                        ->sum('jumlah_harga');
                        $ppn = $sum * 0.11;
                        @endphp
                        <td></td>
                        <td>{{$sum}}</td>
                    </tr>
                    <tr>
                        <td style="text-align:right" colspan="4"><b>PPN 11%</b></td>
                        <td></td>
                        <td>{{$ppn}}</td>
                    </tr>
                    <tr>
                        <td style="text-align:right" colspan="4"><b> Jumlah Total</b></td>
                        <td></td>
                        <td>{{$pengadaan->pengadaan->nilai_negosiasi}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0">
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
                    <td style="text-align: justify;">Jangka Waktu Pelaksanaan {{$pengadaan->alokasi}} hari kalender, tanggal pelaksanaan yaitu Tanggal 13 September – 20 September 2022
                    </td>
                </tr>
            </table>
            <br>
            <table border="0">
                <tr>
                    <td style="text-align: justify; text-indent: 45px;">Demikian Surat Perintah Kerja ini dibuat dengan sebenarnya pada hari, tanggal dan bulan tersebut diatas dalam rangkap 4 (empat), 2 lembar dibubuhi materai yang cukup dan mempunyai kekuatan hukum yang sama.
                    </td>
                </tr>
            </table>
        </div>

        <br>
        <br>
        {{-- Pejabat --}}
        <div style="text-align:center ;">
            @foreach ($pejabat as $pjb)
            <table style="text-align: center" border="0" font-size="0">
                <tr>
                    <td width="20"> </td>
                    <td width="250">Direktur</td>
                    <td width="250">PEJABAT PENGADAAN</td>
                    <td width="20"> </td>
                </tr>
            </table>
        </div>
        <div style="text-align:center ;">
            <table style="text-align: center" border="0" font-size="0">
                <tr>
                    <td width="20"> </td>
                    <td width="250">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td width="250"> </td>
                    <td width="20"> </td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <div style="text-align:center ;">
            <table style="text-align: center" border="0" font-size="0">
                <tr>
                    <td width="20"> </td>
                    <td width="250"><u>{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                    <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                    <td width="20"> </td>
                </tr>
            </table>
        </div>
        <div style="text-align:center ;">
            <table style="text-align: center" border="0" font-size="0">
                <tr>
                    <td width="20"> </td>
                    <td width="250"> </td>
                    <td width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                    <td width="20"> </td>
                </tr>
            </table>
            @endforeach
        </div>

    </div>
</div>
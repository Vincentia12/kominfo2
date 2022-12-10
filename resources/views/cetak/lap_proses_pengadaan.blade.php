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
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <u><b>LAPORAN PROSES PENGADAAN BARANG/JASA</b></u>
                </td>
            <tr>
        </table>
    </div>

    @php
    use App\Models\Jadwal;
    use App\Models\pejabat;

    $png = $pengadaan->pengadaan_id;

    $KuitansiKontrak = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Kuitansi Kontrak')
    ->get();
    $pejabat = Pejabat::all();

    @endphp

    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <font size="3">Nomor</font>
                </td>
                <td style="text-align: center">
                    <font size="3">:</font>
                </td>
                <td style="text-align: center">
                    <font size="3">020/654.{{$pengadaan->nomor}} /114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</font>
                </td>
                </td>
            <tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}}, Tanggal {{$pengadaan->deskripsi_tgl}} Kami yang bertanda tangan dibawah ini :</td>
            </tr>
        </table>
    </div>

    @foreach ($pejabat as $pjb)
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">I.</td>
                <td width="100">Nama</td>
                <td>:</td>
                <td width="370">{{$pjb->pejabat_pembuatan_komitmen}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">NIP</td>
                <td>:</td>
                <td width="370">{{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Jabatan</td>
                <td>:</td>
                <td width="370">Pejabat Pembuat Komitmen</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Alamat</td>
                <td>:</td>
                <td width="370">Jl. A. Yani No. 242-244 Surabaya</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="470">Yang selanjutnya disebut <b>PIHAK KESATU</b> </td>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">II.</td>
                <td width="100">Nama</td>
                <td>:</td>
                <td width="370">{{$pjb->kuasa_pengguna_anggaran}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">NIP</td>
                <td>:</td>
                <td width="370">{{$pjb->nip_kuasa_pengguna}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Jabatan</td>
                <td>:</td>
                <td width="370">Kuasa Pengguna Anggaran</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Alamat</td>
                <td>:</td>
                <td width="370">Jl. Ahmad Yani 242 - 244 Surabaya</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="470">Yang selanjutnya disebut <b>PIHAK KEDUA</b> </td>
        </table>
    </div>
    @endforeach


    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="160">Dengan ini menyatakan bahwa :</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">1.</td>
                <td width="370"> <b>PIHAK KESATU</b> telah melaporkan pekerjaan sesuai dengan :</td>
            </tr>
        </table>
    </div>
    @foreach ($KuitansiKontrak as $kk)
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="120">Kuitansi Kontrak nomor</td>
                <td>:</td>
                <td width="370"> 020/{{$kk->nomor}}/114.6/{{$kk->tanggal->format('Y')}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="120">Tanggal</td>
                <td>:</td>
                <td width="370"> {{$kk->tanggal}}</td>
            </tr>
        </table>
    </div>
    @endforeach
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="120">Pekerjaan</td>
                <td>:</td>
                <td width="370"> {{$pengadaan->pengadaan->jenis_pengadaan}}</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15" style="vertical-align: top;">2.</td>
                <td style="text-align: left ;text-align: justify;"><b>PIHAK KEDUA</b> telah memeriksa dan menerima dengan baik kemajuan hasil pekerjaan tersebut, dengan rincian jumlah, jenis dan spesifikasi barang/jasa sebagaimana daftar terlampir.</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15"></td>
                <td style="text-align: left ;text-align: justify;">Demikian Berita Acara ini dibuat untuk dipergunakan seperlunya.
                </td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" font-size="0">
            <tr>
                <td width="340"> </td>
                <td>Surabaya, {{$pengadaan->created_at->isoFormat('D MMMM Y')}}</td>
                {{-- <td width="50"> </td> --}}
            </tr>
        </table>
    </div>

    <br>
    @foreach ($pejabat as $pjb)
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"><b>PIHAK KEDUA</b></td>
                <td width="250"><b>PIHAK KESATU</b></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <br><br><br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"><u>{{$pjb->kuasa_pengguna_anggaran}}</u></td>
                <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">NIP. {{$pjb->nip_kuasa_pengguna}} </td>
                <td width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    @endforeach
    <br><br><br><br><br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="8"></td>
                <td>Lampiran Laporan Proses Pengadaan Barang/Jasa</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" font-size="0">
            <tr>
                <td width="8"></td>
                <td>Nomor</td>
                <td width="10">:</td>
                <td width="250">020/{{$pengadaan->nomor}} /114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td>Tanggal</td>
                <td width="10">:</td>
                <td width="250">{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <table border="1" align="center" style="color: #000000; border-color: #000000; border-collapse: collapse;">
            <thead>
                <tr>
                    <td>
                        <center><b>NO.</b></center>
                    </td>
                    <td>
                        <center><b>PEKERJAAN</b> </center>
                    </td>
                    <td>
                        <center><b>KUANTITAS</b> </center>
                    </td>
                    <td>
                        <center><b>SATUAN</b> </center>
                    </td>
                    <td>
                        <center><b>HARGA SATUAN</b> </center>
                    </td>
                    <td>
                        <center><b>JUMLAH HARGA</b> </center>
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
            </thead>
            <tr>
                <td height="20"></td>
                <td height="20"></td>
                <td height="20"></td>
                <td height="20"></td>
                <td height="20"></td>
                <td height="20"></td>
            </tr>
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
    </div>
    <br>
    @foreach ($pejabat as $pjb)
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"><b>PIHAK KEDUA</b></td>
                <td width="250"><b>PIHAK KESATU</b></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <br><br><br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"><u>{{$pjb->kuasa_pengguna_anggaran}}</u></td>
                <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">NIP. {{$pjb->nip_kuasa_pengguna}} </td>
                <td width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    @endforeach



</div>
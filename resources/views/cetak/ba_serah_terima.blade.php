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
                    <u><b>BERITA ACARA SERAH TERIMA HASIL PEKERJAAN</b></u>
                </td>
            <tr>
        </table>
    </div>

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
    @endforeach
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
                <td width="370">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Jabatan</td>
                <td>:</td>
                <td width="370">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Alamat</td>
                <td>:</td>
                <td width="370">{{$pengadaan->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
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
                <td width="370"> <b>PIHAK KEDUA</b> telah menyerahkan pekerjaan sesuai dengan :</td>
            </tr>
        </table>
    </div>
    <div>
        @foreach ($KuitansiKontrak as $kk)
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
                <td width="370"> {{$kk->tanggal->format('d F Y')}}</td>
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
                <td width="15">2.</td>
                <td style="text-align: left ;text-align: justify;"><b>PIHAK KESATU</b> telah memeriksa dan menerima dengan baik kemajuan hasil pekerjaan tersebut, dengan rincian jumlah, jenis dan spesifikasi barang/jasa sebagaimana daftar terlampir.</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">3.</td>
                <td style="text-align: left ;text-align: justify;">Apabila dikemudian hari berdasarkan hasil audit terjadi :</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="30">a.</td>
                <td style="text-align: left ;text-align: justify;">Ketidaksesuaian perhitungan volume hasil pekerjaan dengan kontrak; dan/atau</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="30">b.</td>
                <td style="text-align: left ;text-align: justify;">Penyerahan barang/jasa yang kualitasnya tidak sesuai dengan kontrak;</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td style="text-align: left ;text-align: justify;">Maka penyedia dikenakan ganti kerugian sebesar nilai kerugian yang ditimbulkan .</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15"></td>
                <td style="text-align: left ;text-align: justify;">Demikian Berita Acara ini dibuat untuk dipergunakan seperlunya.</td>
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
    @foreach ($pejabat as $pjb)
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
                <td width="250">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}} </td>
                <td width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    @endforeach

    <br><br>

    <!-- lampiran -->
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="8"></td>
                <td>Lampiran Berita Acara Serah Terima Hasil Pekerjaan</td>
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
                    <td colspan="2">
                        <center><b>Banyaknya</b> </center>
                    </td>
                    <td>
                        <center><b>Uraian dan Spesifikasi</b> </center>
                    </td>
                    <td>
                        <center><b>HARGA SATUAN (Rp.)</b> </center>
                    </td>
                    <td>
                        <center><b>JUMLAH HARGA (Rp.)</b> </center>
                    </td>
                </tr>
                <tr>
                    <td height="20">

                    </td>
                    <td>

                    </td>
                    <td>
                    </td>

                    <td>
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
                <tr colspan="7">PENGADAAN BELANJA ALAT/BAHAN UNTUK KEGIATAN KANTOR</tr>
            </thead>
            <tr>
                <td>1</td>
                <td colspan="3">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                <td></td>
                <td></td>
            </tr>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($barang as $brg)
                <tr>
                    <td></td>

                    <td>{{$brg->jumlah_barang}}</td>
                    <td>{{$brg->satuan}}</td>
                    <td>{{$brg->barang}}</td>
                    <td>{{$brg->harga_satuan}},-</td>
                    {{-- @php
                        // $jumlahbarang = $barang["jumlah_barang"];
                        $jumlahbarang = $brg->jumlah_barang;
                        $hargabarang = $brg->harga_satuan;
                        // $hargabarang = $barang["harga_barang"];

                        $jumlah_harga = $jumlahbarang * $hargabarang;
                        @endphp --}}
                    <td>{{$brg->jumlah_harga}},-</td>
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
                    <td>{{$sum}},-</td>
                </tr>
                <tr>
                    <td style="text-align:right" colspan="4"><b>PPN 11%</b></td>
                    <td></td>
                    <td>{{$ppn}},-</td>
                </tr>
                <tr>
                    <td style="text-align:right" colspan="4"><b> Jumlah Total</b></td>
                    <td></td>
                    <td>{{$pengadaan->pengadaan->nilai_negosiasi}},-</td>
                </tr>
                <tr>
                    <td colspan="6">Terbilang : =={{$pengadaan->pengadaan->deskripsi_negosiasi}}==</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br>
    <br>
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
    @foreach ($pejabat as $pjb)
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
                <td width="250">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}} </td>
                <td width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    @endforeach



</div>
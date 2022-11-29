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
                    <u><b>BERITA ACARA PENYERAHAN BARANG/JASA</b></u>
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
                    <font size="3">020/654.{{$pengadaan1->jadwal}} /114.6/2022</font>
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
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan1->hari}}, Tanggal {{$pengadaan1->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
            </tr>
        </table>
    </div>

    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">I.</td>
                <td width="100">Nama</td>
                <td>:</td>
                <td width="370">I WAYAN RUDY ARTHA, S.Kom</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">NIP</td>
                <td>:</td>
                <td width="370">19770517 200901 1 005</td>
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
                <td width="370">AGUS SUNARYO</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">NIP</td>
                <td>:</td>
                <td width="370">19660717 201001 1 003</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Jabatan</td>
                <td>:</td>
                <td width="370">Pengurus Barang Persediaan</td>
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
                <td style="text-align: left ;text-align: justify;"><b>PIHAK KESATU</b> telah menyerahkan barang/jasa hasil pekerjaan pengadaan {{$pengadaan1->pengadaan->jenis_pengadaan}} hasil pekerjaan sesuai dengan Kwitansi Kontrak nomor : 020/654.14/114.6/2022, Tanggal 9 September 2022;</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">2.</td>
                <td style="text-align: left ;text-align: justify;"><b>PIHAK KEDUA</b> telah menerima dengan baik penyerahan barang/jasa tersebut sebagaimana daftar terlampir.</td>
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
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">PENGURUS BARANG PERSEDIAAN</td>
                <td width="250">PEJABAT PEMBUAT KOMITMEN</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <br><br><br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"><u>AGUS SUNARYO</u></td>
                <td width="250"><u>I WAYAN RUDY ARTHA, S.Kom</u></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">NIP. 19660717 201001 1 003 </td>
                <td width="250">NIP. 19770517 200901 1 005</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>

</div>
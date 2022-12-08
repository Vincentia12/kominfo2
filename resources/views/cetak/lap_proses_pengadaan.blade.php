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
                <td width="370">Drs. Ec. NIRMALA DEWI, M.M</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">NIP</td>
                <td>:</td>
                <td width="370">19650909 199403 2 006</td>
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
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="120">Kuitansi Kontrak nomor</td>
                <td>:</td>
                <td width="370"> 020/654.14/114.6/2022</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="120">Tanggal</td>
                <td>:</td>
                <td width="370"> 020/654.14/114.6/2022</td>
            </tr>
        </table>
    </div>
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
                <td width="250"><u>Drs. Ec. NIRMALA DEWI, M.M</u></td>
                <td width="250"><u>I WAYAN RUDY ARTHA, S.Kom</u></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">NIP. 19650909 199403 2 006 </td>
                <td width="250">NIP. 19770517 200901 1 005</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>



</div>
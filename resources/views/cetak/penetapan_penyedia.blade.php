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
    <!-- Kop Surat -->
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

    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <u><b> PENETAPAN PENYEDIA BARANG / JASA</b></u>
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
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Berdasarkan Berita Acara Evaluasi Dokumen Prakualifikasi Tanggal 18 Agustus 2022 Nomor : 020/654.4/114.6/2022 dan Berita Acara Klarifikasi/Negosiasi Penawaran Tanggal 1 September 2022 Nomor : 020/654.9/114.6/2022, Pekerjaan Pengadaan {{$pengadaan1->pengadaan->jenis_pengadaan}} , dengan ini Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur menetapkan penyedia jasa tersebut di bawah ini untuk sebagai Penyedia Barang/Jasa dengan nilai HPS sebesar Rp. {{$pengadaan1->pengadaan->total_hps}},- ({{$pengadaan1->pengadaan->deskripsi_hps}}) :</td>
            </tr>
        </table>
    </div>

    <br>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="30"></td>
                <td width="70">Nama Perusahaan</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan1->pengadaan->pelaksana->pt_pelaksana }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">Nama Penanggung Jawab</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan1->pengadaan->pelaksana->nama_pelaksana }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">Alamat</td>
                <td>:</td>
                <td>{{ $pengadaan1->pengadaan->pelaksana->alamat }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">NPWP</td>
                <td>:</td>
                <td>{{ $pengadaan1->pengadaan->pelaksana->npwp }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">Harga Penawaran Setelah Negosiasi</td>
                <td>:</td>
                <td>Rp. {{ $pengadaan1->pengadaan->nilai_negosiasi}},-({{ $pengadaan1->pengadaan->deskripsi_negosiasi}})</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="42"></td>
                <td>Demikian atas perhatiannya diucapkan terima kasih.</td>
            </tr>
        </table>
    </div>

    <br>
    <br><br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="300"> </td>
                <td>PEJABAT PENGADAAN</td>
                {{-- <td width="50"> </td> --}}
            </tr>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td width="300"> </td>
                <td width="250">ADI KURNIAWAN.S.Kom.,M.Kom</td>
                {{-- <td width="50"> </td> --}}
            </tr>
            <tr>
                <td width="300"> </td>
                <td>NIP. 19890618 201403 1 002</td>
                {{-- <td width="50"> </td> --}}
            </tr>
        </table>
    </div>



</div>
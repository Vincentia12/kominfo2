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
                    <u><b> BERITA ACARA KLARIFIKASI / NEGOSIASI</b></u>
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
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan1->hari}}, Tanggal {{$pengadaan1->deskripsi_tgl}} kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur selaku Pengguna Anggaran tanggal {{$pengadaan1->tanggal}} Nomor : 188/19/114.1/2022, melaksanakan klarifikasi dan negosiasi untuk pelaksanaan {{$pengadaan1->pengadaan->jenis_pengadaan}}, dibiayai dari dana APBD Tahun Anggaran 2022 pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening 2.20.02.1.01.5.1.02.01.01.0029 dengan Harga Perkiraan Sendiri (HPS) sebesar Rp. {{$pengadaan1->pengadaan->total_hps}},- ({{$pengadaan1->pengadaan->deskripsi_hps}}).</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Melakukan klarifikasi dan negosiasi terhadap penawaran yang diajukan oleh : {{$pengadaan1->pengadaan->pelaksana->pt_pelaksana}} {{$pengadaan1->pengadaan->pelaksana->alamat}} dengan hasil terlampir.</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="45"></td>
                <td>Dari hasil klarifikasi dan negosiasi harga, ditetapkan sebagai penyedia yaitu :</td>
            </tr>
        </table>
    </div>

    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">Nama Perusahaan</td>
                <td>:</td>
                <td width="370">{{$pengadaan1->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">Nama Penanggung Jawab</td>
                <td>:</td>
                <td width="370">{{$pengadaan1->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">Alamat Perusahaan</td>
                <td>:</td>
                <td width="370">{{$pengadaan1->pengadaan->pelaksana->alamat}}</td>
            </tr>
        </table>
    </div>

    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">Nomomr Pokok Wajib Pajak</td>
                <td>:</td>
                <td width="370">{{$pengadaan1->pengadaan->pelaksana->npwp}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">Pekerjaan</td>
                <td>:</td>
                <td width="370">{{$pengadaan1->pengadaan->jenis_pengadaan}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">Dengan Harga</td>
                <td>:</td>
                <td width="370">RP. {{$pengadaan1->pengadaan->nilai_negosiasi}},- ({{$pengadaan1->pengadaan->deskripsi_negosiasi}})</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Dengan pertimbangan bahwa spesifikasi teknis sesuai dengan ketentuan dan harga dapat dipertanggungjawabkan dan menguntungkan Pemerintah Provinsi Jawa Timur.</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian Berita Acara ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan pengadaan langsung.</td>
            </tr>
        </table>
    </div>


    <div style="text-align:center ;">
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
                <td width="250">{{$pengadaan1->pengadaan->pelaksana->pt_pelaksana}}</td>
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
                <td width="250"><u>{{$pengadaan1->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                <td width="250"><u>ADI KURNIAWAN.S.Kom.,M.Kom</u></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"> </td>
                <td width="250">NIP. 19890618 201403 1 002</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>


</div>
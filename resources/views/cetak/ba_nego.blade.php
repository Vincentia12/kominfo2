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
        @php
        use App\Models\pejabat;
        $pejabat = Pejabat::all();
        @endphp
        <table border="0" align="center">
            @foreach ($pejabat as $pjb)
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
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}}, Tanggal {{$pengadaan->deskripsi_tgl}} kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur selaku Pengguna Anggaran tanggal {{date('D Y', strtotime($pjb->tanggal_sk))}} Nomor : {{$pjb->nomor_sk}}, melaksanakan klarifikasi dan negosiasi untuk pelaksanaan {{$pengadaan->pengadaan->jenis_pengadaan}}, dibiayai dari dana APBD Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}} pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening 2.20.02.1.01.5.1.02.01.01.0029 dengan Harga Perkiraan Sendiri (HPS) sebesar Rp. {{$pengadaan->pengadaan->total_hps}},- ({{$pengadaan->pengadaan->deskripsi_hps}}).</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Melakukan klarifikasi dan negosiasi terhadap penawaran yang diajukan oleh : {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}} {{$pengadaan->pengadaan->pelaksana->alamat}} {{$pengadaan->pengadaan->pelaksana->kota}} dengan hasil terlampir.</td>
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
                <td width="180">Nama Perusahaan</td>
                <td>:</td>
                <td width="330">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="180">Nama Penanggung Jawab</td>
                <td>:</td>
                <td width="330">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="180">Alamat Perusahaan</td>
                <td>:</td>
                <td width="330">{{$pengadaan->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
            </tr>
        </table>
    </div>

    <div>
        <table border="0" align="center">
            <tr>
                <td width="180">Nomomr Pokok Wajib Pajak</td>
                <td>:</td>
                <td width="330">{{$pengadaan->pengadaan->pelaksana->npwp}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="180" style="vertical-align: top;">Pekerjaan</td>
                <td style="vertical-align: top;">:</td>
                <td width="330" style="text-align: justify;">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="180">Dengan Harga</td>
                <td>:</td>
                <td width="330">RP. {{$pengadaan->pengadaan->nilai_negosiasi}},- ({{$pengadaan->pengadaan->deskripsi_negosiasi}})</td>
            </tr>
        </table>
    </div>
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
                <td width="250"><u>{{$pjb->pejabat_pengadaan}}</u></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"> </td>
                <td width="250">NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    @endforeach


</div>
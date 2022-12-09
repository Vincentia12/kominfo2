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
        <br>
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <u><b>BERITA ACARA EVALUASI DOKUMEN PRAKUALIFIKASI</b></u>
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
                    <font size="3">020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</font>
                </td>
                </td>
            <tr>
        </table>
    </div>
    @php
    use App\Models\pejabat;
    $pejabat = Pejabat::all();
    @endphp
    <br><br>
    <div class="row">
        <table>
            @foreach ($pejabat as $pjb)
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}} Tanggal {{$pengadaan->deskripsi_tgl}}, bertempat di Ruang Argopuro Dinas Komunikasi Dan Informatika Provinsi Jawa Timur, kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}} yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur tanggal {{date('D MMM Y', strtotime($pjb->tanggal_sk))}} Nomor : {{$pjb->nomor_sk}}, telah melakukan penilaian dokumen prakualifikasi penunjukan langsung Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer , dibiayai dari dana APBD Tahun Anggaran {{date('Y', strtotime($pjb->tanggal_sk))}} pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening {{$pengadaan->pengadaan->pelaksana->kode_rekening}} yang telah diserahkan oleh :</td>
            </tr>
        </table>
        @endforeach
    </div>

    <br>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">NAMA PERUSAHAAN</td>
                <td width="10">:</td>
                <td width="370">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">ALAMAT</td>
                <td width="10">:</td>
                <td width="370">{{$pengadaan->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
            </tr>
        </table>
    </div>

    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">NOMOR POKOK WAJIB PAJAK</td>
                <td width="10">:</td>
                <td width="370">{{$pengadaan->pengadaan->pelaksana->npwp}}</td>
            </tr>
        </table>
    </div>

    <br><br>
    <div>
        <table border="0" align="center" font-size="2">
            <tr>
                <td width="8"></td>
                <td width="560">Dengan hasil sebagai berikut :</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Setelah mengadakan penelitian dan penilaian secara seksama terhadap dokumen prakualifikasi yang diserahkan penyedia barang/jasa, maka Pejabat Pengadaan Barang/Jasa di Lingkungan Dinas Komunikasi dan Informatika provinsi Jawa Timur memutuskan bahwa calon penyedia barang/jasa tersebut memenuhi syarat untuk melanjutkan kegiatan penunjukan langsung selanjutnya.</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian Berita Acara evaluasi dokumen prakualifikasi ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan selanjutnya.</td>
            </tr>
        </table>
    </div>

    <br><br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            @foreach ($pejabat as $pjb)
            <tr>
                <td width="300"> </td>
                <td>PEJABAT PENGADAAN</td>
            </tr>
            <br>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td width="300"> </td>
                <td width="250"><u>{{$pjb->pejabat_pengadaan}}</u></td>
            </tr>
            <tr>
                <td width="300"> </td>
                <td>NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

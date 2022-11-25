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

    <div>
        <table>
            <tr>
                <td width="280"> </td>
                <!-- diubah. menggunakan kolom craete at tapi aku blm bisa ngubahnya -->
                <td>Surabaya, 22 Agustus 2022</td>
                <td width="50"> </td>
            </tr>
            <tr>
                <td width="280"> </td>
                <td>Kepada</td>
                <td width="50"> </td>
            </tr>
        </table>
    </div>
    {{-- <br> --}}
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="80">Nomor</td>
                <td>:</td>
                <!-- diubah -->
                <td width="175">020/{{$pengadaan1->nomor}}/114.6/2022</td>
                <td width="50">Yth. Sdr. </td>
                <!-- diubah -->
                <td width="175">{{$pengadaan1->pengadaan->pelaksana->jabatan_pelaksana}} {{$pengadaan1->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
            <tr>
                <td width="80">Sifat</td>
                <td>:</td>
                <td width="175">Segera</td>
                <td> </td>
                <!-- diubah -->
                <td>{{$pengadaan1->pengadaan->pelaksana->alamat}}</td>
            </tr>
            <tr>
                <td width="80">Lampiran</td>
                <td>:</td>
                <td width="175">-</td>
                <td> </td>
                <td>di</td>
            </tr>
            <tr>
                <td width="80">Perihal</td>
                <td>:</td>
                <td width="175">Undangan Permintaan <br><u> Penawaran Harga</u></td>
                <td></td>
                <td><u>SURABAYA</u></td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Bahwa dalam rangka pelaksanaan proses pengadaan langsung, untuk :</td>

            </tr>
        </table>
    </div>
    {{-- <br> --}}
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td width="100">Paket Pekerjaan</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan1->pengadaan->jenis_pengadaan }}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50">Lingkup pekerjaan</td>
                <td>:</td>
                <td>PK melalui Pejabat Pengadaan mengundang Penyedia</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50"> </td>
                <td> </td>
                <td style="text-align: justify;"> Barang untuk menyampaikan penawaran atas paket pengadaan barang yang tercantum dalam Spesifikasi Teknis, Daftar Kuantitas dan Harga serta nomor pekerjaan yang tercantum dalam LDP. Penyedia Barang yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu dan perkiraan batas akhir waktu penyelesaian yang tercantum dalam LDP.</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50">Sumber Dana</td>
                <td>:</td>
                <td>APBD Provinsi Jawa Timur Tahun Anggaran 2022</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50">Nilai HPS</td>
                <td>:</td>
                <!-- diubah -->
                <td>Rp. {{$pengadaan1->pengadaan->total_hps}},- ({{$pengadaan1->pengadaan->deskripsi_hps}})</td>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ; text-align: justify;">Diharap saudara untuk menyampaikan dokumen penawaran paling lambat pada :</td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td width="100">Hari/Tanggal</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan1->hari }}/{{ $pengadaan1->tanggal }}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="100">Jam</td>
                <td>:</td>
                <td>10.00 WIB</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="100">Tempat</td>
                <td>:</td>
                <td>Ruang Argopuro lt.II Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya</td>
            </tr>
        </table>
        <br>
        <table border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ; text-align: justify;">Sebelum batas waktu penyampaian dokumen penawaran apabila dalam dokumen Pengadaan Langsung sebagaimana terlampir terdapat hal yang tidak jelas atau perlu penjelasan maka dapat ditanyakan kepada Pejabat Pengadaan.</td>
            </tr>
            <br>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ; text-align: justify; ">Demikian disampaikan atas perhatian dan partisipasi Saudara diucapkan terima kasih.</td>
            </tr>
        </table>
    </div>
    <br>
    <br>
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
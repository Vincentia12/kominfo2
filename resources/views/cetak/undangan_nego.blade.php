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
                <td width="175">Penting</td>
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
                <td width="175">Undangan <br><u> Klarifikasi/Negosiasi</u></td>
                <td></td>
                <td><b><u>SURABAYA</u></b></td>
            </tr>
        </table>
    </div>

    <br><br><br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Mengharap dengan hormat kehadiran Saudara dalam acara Klarifikasi dan Negosiasi pengadaan {{$pengadaan1->pengadaan->jenis_pengadaan}} yang akan diadakan pada :</td>

            </tr>
        </table>
    </div>
    <br><br>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="60"></td>
                <td width="70">Hari</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan1->hari }}</td>
            </tr>
            <tr>
                <td width="60"></td>
                <td width="70">Tanggal</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan1->tanggal }}</td>
            </tr>
            <tr>
                <td width="60"></td>
                <td width="70">Pukul</td>
                <td>:</td>
                <td>10.00 WIB</td>
            </tr>
            <tr>
                <td width="60"></td>
                <td width="70">Tempat</td>
                <td>:</td>
                <td>Ruang Argopuro lt.II Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="42"></td>
                <td>Demikian untuk menjadikan periksa.</td>
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
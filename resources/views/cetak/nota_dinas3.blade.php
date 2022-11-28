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

<div class="col-12 grid-margin stretch-card">
    <div style="text-align: center">
        <font color="black">
            <p align="center"><b> DINAS KOMUNIKASI DAN INFORMATIKA </b></p>
            <p align="center"><b> PROVINSI JAWA TIMUR </b></p>
        </font>
        <hr>
        <p align="center"><u><b> NOTA DINAS </b></u></p>
    </div>
    <div class="row" style="font-family: Arial;">
        <table>
            <tr>
                {{-- <td style="text-indent: 45px;">Kepada</td> --}}
                <td>Kepada</td>
                <td>:</td>
                <td>Yth. Sdr. Pejabat Pembuat Komitmen Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
            </tr>

            <tr>
                <td>Dari</td>
                <td>:</td>
                <td>Pejabat Pengadaan</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ $pengadaan1->tanggal}}</td>
                {{-- <td width="475">11 Agustus 2022</td> --}}
            </tr>
            <tr>
                <td>Nomor</td>
                <td>:</td>
                <td>020/{{$pengadaan1->nomor}}/114.6/2022</td>
            </tr>
            <tr>
                <td>Sifat</td>
                <td>:</td>
                <td>Segera</td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>:</td>
                <td>1 (satu) berkas</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>:</td>
                <td>Penyampaian Berita Acara Proses Pengadaan Langsung</td>
            </tr>
        </table>
        <br>
    </div>
    <hr>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Sesuai dengan Berita Acara Hasil Pengadaan Langsung Nomor : 020/ 654.10/114.6/2022 tanggal 20 Juli 2022 untuk pengadaan{{$pengadaan1->pengadaan->jenis_pengadaan}} Printer maka bersama ini kami sampaikan administrasi proses pengadaan langsung yang telah selesai dilaksanakan terhadap :</td>
            </tr>
        </table>
    </div>

    <br>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="120">Nama Perusahaan</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan1->pengadaan->pelaksana->pt_pelaksana }}</td>
            </tr>
            <tr>
                <td width="120">Alamat</td>
                <td>:</td>
                <td>{{ $pengadaan1->pengadaan->pelaksana->alamat }}</td>
            </tr>
            <tr>
                <td width="120">NPWP</td>
                <td>:</td>
                <td>{{ $pengadaan1->pengadaan->pelaksana->npwp }}</td>
            </tr>
            <tr>
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
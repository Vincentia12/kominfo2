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
    <table border="0" align="center">
        <tr>
            <td style="vertical-align:top;" style="text-align: center">
                <b>SURAT PERNYATAAN MINAT</b>
            </td>
        <tr>
    </table>
    <table border="0" align="center">
        <tr>
            <td style="vertical-align:top" style="text-align: center;">
                Untuk Mengikuti Pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}}
                di Dinas Komunikasi dan Informatika Provinsi Jawa Timur
            </td>
        <tr>
        <tr>
            <td style="vertical-align:top" style="text-align: center;">
                <u>Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}}</u>
            </td>
        <tr>
    </table>


    @php
    use App\Models\Jadwal;
    use App\Models\pejabat;

    $png = $pengadaan->pengadaan_id;

    $KuitansiKontrak = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Kuitansi Kontrak')
    ->get();
    $pejabat = Pejabat::all();
    @endphp

    <br>
    <div class="row">
        <table border="0">
            <tr>
                <td width="8"> </td>
                <td>Yang bertanda tangan di bawah ini :</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table border="0">
            <tr>
                <td width="8"> </td>
                <td width="180">Nama</td>
                <td width="10">:</td>
                <td width="340">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table border="0">
            <tr>
                <td width="8"> </td>
                <td width="180">Jabatan</td>
                <td width="10">:</td>
                <td width="340">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table border="0">
            <tr>
                <td width="8"> </td>
                <td width="180">Bertindak Untuk dan Atas Nama</td>
                <td width="10">:</td>
                <td width="340">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table border="0">
            <tr>
                <td width="8"> </td>
                <td width="180">Alamat Perusahaan</td>
                <td width="10">:</td>
                <td width="340">{{$pengadaan->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table border="0">
            <tr>
                <td width="8"> </td>
                <td width="180">Telephone</td>
                <td width="10">:</td>
                <td width="340">{{$pengadaan->pengadaan->pelaksana->tlp}}</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table border="0">
            <tr>
                <td width="8"> </td>
                <td width="180">Fax</td>
                <td width="10">:</td>
                <td width="340">-</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table border="0">
            <tr>
                <td width="8"> </td>
                <td width="180">Email</td>
                <td width="10">:</td>
                <td width="340">-</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table border="0">
            <tr>
                <td style="text-align:justify;" width="540">Menyatakan dengan sebenarnya bahwa setelah mengetahui pengadaan yang akan dilaksanakan oleh Kegiatan DPPA - SKPD Dinas Komunikasi dan Informatika Provinsi Jawa Timur tahun anggaran {{$pengadaan->tanggal->isoFormat('Y')}} Dinas Komunikasi dan Informatika Provinsi Jawa Timur, maka dengan ini saya menyatakan berminat untuk mengikuti proses pelelangan umum “Pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}}”, sampai dengan selesai.</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table border="0">
            <tr>
                <td style="text-align:justify;" width="540">Demikian Pernyataan ini kami buat dengan penuh kesadaran dan rasa tanggungjawab.
                </td>
            </tr>
        </table>
    </div>

    <br>
    <br><br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="300"> </td>
                <td width="250">Surabaya, {{$pengadaan->created_at->isoFormat('D MMMM Y')}}</td>
            </tr>
        </table>
    </div>
    @foreach ($pejabat as $pjb)
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="300"> </td>
                <td width="250">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td width="300"> </td>
                <td width="250"><u>{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</u></td>
            </tr>
            <tr>
                <td width="300"> </td>
                <td>{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
            </tr>
        </table>
    </div>
    @endforeach




</div>
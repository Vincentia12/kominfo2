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
                <td>{{$pengadaan->created_at->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td>Nomor</td>
                <td>:</td>
                <td>020/654.{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</td>
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

    @php
    use App\Models\Jadwal;
    use App\Models\pejabat;

    $png = $pengadaan->pengadaan_id;

    $BeritaAcaraHasilPengadaanLangsung = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'BA. Hasil Pengadaan Langsung')
    ->get();
    $pejabat = Pejabat::all();

    @endphp




    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;"> @foreach ($BeritaAcaraHasilPengadaanLangsung as $bahpl) Sesuai dengan Berita Acara Hasil Pengadaan Langsung Nomor : 020/{{$bahpl->nomor}}/114.6/{{$bahpl->tanggal->format('Y')}} Tanggal {{$bahpl->tanggal}}@endforeach untuk pengadaan{{$pengadaan->pengadaan->jenis_pengadaan}} Printer maka bersama ini kami sampaikan administrasi proses pengadaan langsung yang telah selesai dilaksanakan terhadap :</td>
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
                <td>{{ $pengadaan->pengadaan->pelaksana->pt_pelaksana }}</td>
            </tr>
            <tr>
                <td width="120">Alamat</td>
                <td>:</td>
                <td>{{ $pengadaan->pengadaan->pelaksana->alamat }}, {{ $pengadaan->pengadaan->pelaksana->kota }}</td>
            </tr>
            <tr>
                <td width="120">NPWP</td>
                <td>:</td>
                <td>{{ $pengadaan->pengadaan->pelaksana->npwp }}</td>
            </tr>
            <tr>
                <td width="120">Harga Penawaran Setelah Negosiasi</td>
                <td>:</td>
                <td>Rp. {{ number_format($pengadaan->pengadaan->nilai_negosiasi)}},-({{ $pengadaan->pengadaan->deskripsi_negosiasi}})</td>
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
    @foreach ($pejabat as $pjb)
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="300"> </td>
                <td>PEJABAT PENGADAAN</td>
            </tr>
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
        </table>
    </div>
    @endforeach

</div>
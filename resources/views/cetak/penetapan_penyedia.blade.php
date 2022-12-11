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
                    <font size="3">020/654.{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</font>
                </td>
                </td>
            <tr>
        </table>
    </div>

    @php
    use App\Models\Jadwal;
    use App\Models\pejabat;

    $png = $pengadaan->pengadaan_id;
    // $jdwl = DB::table('jadwals')
    // ->where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    // // ->where('jadwals.kegiatan', '=', 'Surat Undangan Permintaan Penawaran Harga')
    // ->get();
    $BeritaAcaraEvaluasiaDokumenPrakualifikasi = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'BA. Evaluasi Dokumen Prakualifikasi')
    ->get();

    $BeritaAcaraKlarifikasiNegosiasi = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'BA. Klarifikasi/negosiasi')
    ->get();
    $pejabat = Pejabat::all();
    @endphp



    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;"> @foreach ($BeritaAcaraEvaluasiaDokumenPrakualifikasi as $baedp) Berdasarkan Berita Acara Evaluasi Dokumen Prakualifikasi Tanggal {{$baedp->tanggal->isoFormat('D MMMM Y')}} Nomor : 020/{{$baedp->nomor}}/114.6/{{$baedp->tanggal->format('Y')}} @endforeach dan @foreach ($BeritaAcaraKlarifikasiNegosiasi as $bakn) Berita Acara Klarifikasi/Negosiasi Penawaran Tanggal {{$bakn->tanggal->isoFormat('D MMMM Y')}} Nomor : 020/{{$bakn->nomor}}/114.6/{{$bakn->tanggal->format('Y')}} @endforeach, Pekerjaan Pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}} , dengan ini Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur menetapkan penyedia jasa tersebut di bawah ini untuk sebagai Penyedia Barang/Jasa dengan nilai HPS sebesar Rp. {{$pengadaan->pengadaan->total_hps}},- ({{$pengadaan->pengadaan->deskripsi_hps}}) :</td>
            </tr>
        </table>
    </div>

    <br>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                
                <td width="200">Nama Perusahaan</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan->pengadaan->pelaksana->pt_pelaksana }}</td>
            </tr>
            <tr>
                
                <td width="200">Nama Penanggung Jawab</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan->pengadaan->pelaksana->nama_pelaksana }}</td>
            </tr>
            <tr>
                
                <td width="200">Alamat</td>
                <td>:</td>
                <td>{{ $pengadaan->pengadaan->pelaksana->alamat }}, {{ $pengadaan->pengadaan->pelaksana->kota }}</td>
            </tr>
            <tr>
                
                <td width="200">NPWP</td>
                <td>:</td>
                <td>{{ $pengadaan->pengadaan->pelaksana->npwp }}</td>
            </tr>
            <tr>
                
                <td width="200">Harga Penawaran Setelah Negosiasi</td>
                <td>:</td>
                <td>Rp. {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},-({{ $pengadaan->pengadaan->deskripsi_negosiasi}})</td>
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

    <br><br><br>
    <div class="row">
        <div style="text-align: center">
            <table font-size="3" style="width: 36%; text-align: left; float: right;">
                <tr>
                    <td>Surabaya, {{$pengadaan->created_at->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
        </div>
    </div>

    <br><br>
    <table border="0" align="center">
        <tr>
            <td width="290"> </td>
            <td>PEJABAT PENGADAAN</td>
        </tr>
    </table>

    <br><br><br><br><br><br>

    <table border="0" align="center">
        @foreach ($pejabat as $pjb)
        <tr>
            <td width="290"> </td>
            <td><u>{{$pjb->pejabat_pengadaan}}</u></td>
        </tr>
    </table>
    <table border="0" align="center">
        <tr>
            <td width="290"> </td>
            <td>NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
        </tr>
        @endforeach
    </table>
</div>
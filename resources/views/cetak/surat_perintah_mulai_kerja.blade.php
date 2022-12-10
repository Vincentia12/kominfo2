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
                    <u><b> SURAT PERINTAH MULAI KERJA (SPMK)</b></u>
                </td>
            <tr>
        </table>
    </div>

    @php
    use App\Models\Jadwal;
    use App\Models\pejabat;

    $png = $pengadaan->pengadaan_id;

    $KuitansiKontrak = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Kuitansi Kontrak')
    ->get();
    $BeritaAcaraSerahTerimaHasilPekerjaan = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'BA Serah Terima Hasil Pekerjaan')
    ->get();

    $pejabat = Pejabat::all();

    @endphp

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
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}}, Tanggal {{$pengadaan->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
            </tr>
        </table>
    </div>

    @foreach ($pejabat as $pjb)
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="100">Nama</td>
                <td>:</td>
                <td width="370">{{$pjb->pejabat_pembuatan_komitmen}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="100">NIP</td>
                <td>:</td>
                <td width="370">{{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="100">Jabatan</td>
                <td>:</td>
                <td width="370">Pejabat Pembuat Komitmen Dinas Komunikasi Dan Informatika Provinsi Jawa Timur</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="100">Alamat Kantor</td>
                <td>:</td>
                <td width="370">Jl. A. Yani No. 242-244 Surabaya</td>
            </tr>
        </table>
    </div>
    @endforeach

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Yang Bertindak untuk dan atas nama Dinas Komunikasi dan Infromatika Provinsi Jawa Timur, yang selanjutnya disebut <b> PIHAK KESATU</b>, memberikan perintah kerja kepada :
                </td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table>
            @foreach ($KuitansiKontrak as $kk)
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Berdasarkan Kwitansi Kontrak Nomor : 020/020/{{$kk->nomor}}/114.6/{{$kk->tanggal->format('Y')}} tanggal {{$kk->deskripsi_tgl}} Tahun {{$kk->tanggal->format('Y')}} dengan ini:
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="text-align: center" font-size="1">
                    <b> MEMERINTAHKAN :</b>
                </td>
            <tr>
        </table>
    </div>

    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="100">Nama</td>
                <td>:</td>
                <td width="370"> {{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="100">Jabatan</td>
                <td>:</td>
                <td width="370">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="100">Nama Perusahaan</td>
                <td>:</td>
                <td width="370">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="100">Alamat Kantor</td>
                <td>:</td>
                <td width="370">{{$pengadaan->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Yang bertindak untuk dan atas nama Perusahaan {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}, yang selanjutnya disebut <b>PIHAK KEDUA</b> Untuk segera memulai pelaksanaan pekerjaan dengan memperhatikan ketentuan-ketentuan sebagaI berikut :
                </td>
            </tr>
        </table>
    </div>

    <div>
        <table border="0" align="">
            <tr>
                <td width="8"> </td>
                <td width="15">1.</td>
                <td width="130">Pekerjaan</td>
                <td>:</td>
                <td width="370">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"> </td>
                <td width="15">2.</td>
                <td width="130">Tanggal Mulai Kerja </td>
                <td>:</td>
                <td width="370">{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"> </td>
                <td width="15">3.</td>
                <td width="130">Syarat-syarat pekerjaan </td>
                <td>:</td>
                <td width="370">Sesuai dengan persyaratan dan ketentuan kontrak</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"> </td>
                <td width="15">4.</td>
                <td width="130">Waktu penyelesaian </td>
                <td>:</td>
                <td width="370">Selama {{$pengadaan->alokasi}} hari kalender dan pekerjaan harus sudah selesai pada tanggal @foreach ($BeritaAcaraSerahTerimaHasilPekerjaan as $basrhp) {{$pengadaan->tanggal->format('Y')}} @endforeach</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"> </td>
                <td width="15">5.</td>
                <td width="130">Sanksi </td>
                <td>:</td>
                <td width="370">Terhadap keterlambatan penyerahan hasil kerja dikenakan sanksi dan denda sesuai dengan ketentuan kontrak</td>
            </tr>
        </table>
    </div>

    <br>
    <br><br>
    <div>
        <table border="0" font-size="0">
            <tr>
                <td width="340"> </td>
                <td>Ditetapkan di : Surabaya <br>
                    Pada tanggal : {{$pengadaan->created_at->isoFormat('D MMMM Y')}}</td>
                {{-- <td width="50"> </td> --}}
            </tr>
        </table>
    </div>

    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">MENERIMA DAN MENYETUJUI</td>
                <td width="250">PIHAK KESATU</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">PIHAK KEDUA</td>
                <td width="250">PEJABAT PEMBUAT KOMITMEN</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                <td width="250">Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    @foreach ($pejabat as $pjb)
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
                <td width="250">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}} </td>
                <td width="250">NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    @endforeach



</div>
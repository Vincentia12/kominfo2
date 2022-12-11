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
                <td>Surabaya, {{$pengadaan->created_at->isoFormat('D MMMM Y')}}</td>
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
                <td width="175">020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->created_at->isoFormat('Y')}}</td>
                <td width="50">Yth. Sdr. </td>
                <!-- diubah -->
                <td width="175">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}} {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
            <tr>
                <td width="80">Sifat</td>
                <td>:</td>
                <td width="175">Segera</td>
                <td> </td>
                <!-- diubah -->
                <td>{{$pengadaan->pengadaan->pelaksana->alamat}}</td>
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
                <td width="175">Penunjukan Penyedia <br><u> Barang/Jasa</u></td>
                <td></td>
                <td style="text-transform: uppercase; letter-spacing: 3px;"><b><u>{{$pengadaan->pengadaan->pelaksana->kota}}</u></b></td>
            </tr>
        </table>
    </div>

    @php
    use App\Models\Jadwal;
    use App\Models\pejabat;

    $png = $pengadaan->pengadaan_id;
    $NotaDinasDariPejabatPengadaanPPK = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Nota Dinas dari Pejabat Pengadaan ke PPK')
    ->get();

    $pejabat = Pejabat::all();

    @endphp

    <br><br><br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Sesuai dengan Surat Penawaran Saudara tanggal 24 Agustus 2022 Nomor : 233/PEN/PN/IX/2022 dan Nota Dinas @foreach ($NotaDinasDariPejabatPengadaanPPK as $ndpp) tanggal {{$ndpp->tanggal->isoFormat('D MMMM Y')}} Nomor : 020/{{$ndpp->nomor}}/114.6/{{$ndpp->tanggal->format('Y')}} @endforeach perihal Penyampaian Berita Acara Proses Pengadaan Langsung maka Pekerjaan Pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}} kami menunjuk:</td>

            </tr>
        </table>
    </div>
    <br>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="30"></td>
                <td width="70">Nama Perusahaan</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan->pengadaan->pelaksana->pt_pelaksana }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">Nama Penanggung Jawab</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $pengadaan->pengadaan->pelaksana->nama_pelaksana }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">Alamat</td>
                <td>:</td>
                <td>{{ $pengadaan->pengadaan->pelaksana->alamat }}, {{ $pengadaan->pengadaan->pelaksana->kota }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">NPWP</td>
                <td>:</td>
                <td>{{ $pengadaan->pengadaan->pelaksana->npwp }}</td>
            </tr>
            <tr>
                <td width="30"></td>
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
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Dengan ketentuan bahwa, pekerjaan dimaksud dilaksanakan terhitung sejak ditandatangani Surat Perintah Mulai Kerja.</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="42"></td>
                <td>Demikian untuk menjadi maklum.
                </td>
            </tr>
        </table>
    </div>

    <br>
    <br>
    @foreach ($pejabat as $pjb)
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="300"> </td>
                <td>PEJABAT PEMBUAT KOMITMEN</td>
            </tr>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td width="300"> </td>
                <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
            </tr>
            <tr>
                <td width="300"> </td>
                <td>NIP. {{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
        </table>
    </div>
    @endforeach
</div>
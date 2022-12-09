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
    {{-- /BA/BERITA ACARA --}}
    <div style="text-align: center;">
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
        {{-- judul --}}
        <div style="text-align: center">
            <p align="center"><u><b> BERITA ACARA PEMBUKAAN PENAWARAN </b></u> <br>
                Nomor : 020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}} </p>
        </div>
    </div>

    {{-- isi --}}
    @php
    use App\Models\pejabat;
    $pejabat = Pejabat::all();
    @endphp
    <div style="text-align: center;">
        @foreach ($pejabat as $pjb)
        <div>
            <table font-size="1">
                <tr>
                    <td style="text-indent: 45px;  text-align:justify">
                        Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}}, Tanggal {{$pengadaan->deskripsi_tgl}} kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur selaku Pengguna Anggaran tanggal tanggal {{date('D Y', strtotime($pjb->tanggal_sk))}} Nomor : {{$pjb->nomor_sk}}, melaksanakan Pembukaan Penawaran untuk pelaksanaan {{$pengadaan->pengadaan->jenis_pengadaan}} , dibiayai dari dana APBD Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}} pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening {{$pengadaan->pengadaan->pelaksana->kode_rekening}} dengan Harga Perkiraan Sendiri (HPS) sebesar Rp. {{$pengadaan->pengadaan->total_hps}},- ({{$pengadaan->pengadaan->deskripsi_hps}}).
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table border="0">
                <tr>
                    <td>I.</td>
                    <td colspan="3">Personalia dan organisasi rapat :</td>
                </tr>
                <tr>
                    <td rowspan="3"> </td>
                    <td width="193">Rapat dipimpin oleh</td>
                    <td width="3">:</td>
                    <td>{{$pjb->pejabat_pengadaan}}</td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">Jabatan</td>
                    <td style="vertical-align: top;">:</td>
                    <td>Pejabat Pengadaan Barang/Jasa di lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}}</td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td> </td>
                    <td> </td>
                    <td colspan="4">dan dihadiri oleh :</td>
                </tr>
            </table>
            <table border="0">
                <tr>
                    <td rowspan="4"> </td>
                    <td rowspan="4"> </td>
                    <td>A.</td>
                    <td>PPK</td>
                    <td width="3">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td width="180" style="vertical-align: top;">{{$pjb->pejabat_pembuatan_komitmen}}</td>
                    <td style="vertical-align: top;">:</td>
                    <td>Pejabat Pembuat Komitmen di lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}} </td>
                </tr>
                <tr>
                    <td>B.</td>
                    <td>Penyedia Barang/Jasa</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td>:</td>
                    <td>{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table>
                <tr>
                    <td>II.</td>
                    <td>Hasil Pembukaan Penawaran sebagai berikut</td>
                    <td>:</td>
                </tr>
            </table>
            <table style="text-align: center;" border="1">
                <tr>
                    <td style="background-color: lightgrey;">No.</td>
                    <td width="160" style="background-color: lightgrey;">NAMA PERUSAHAAN</td>
                    <td width="120" style="background-color: lightgrey;">SURAT PENAWARAN</td>
                    <td width="115" style="background-color: lightgrey;">DOKUMEN TEKNIS</td>
                    <td width="105" style="background-color: lightgrey;">KETERANGAN</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td style="text-align:left">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td>Ada</td>
                    <td>Ada</td>
                    <td>Lengkap</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table>
                <tr>
                    <td style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian Berita Acara ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan Pengadaan Langsung.</td>
                </tr>
            </table>
        </div>
        <div>

            <table border="0" align="center">
                <tr>
                    <td width="290"> </td>
                    <td>PEJABAT PENGADAAN</td>
                </tr>
            </table>

            <br><br><br><br>

            <table border="0" align="center">
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
            </table>
        </div>
        @endforeach
    </div>
</div>
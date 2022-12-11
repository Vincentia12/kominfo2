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
            <p align="center"><u><b> BERITA ACARA PENJELASAN PEKERJAAN </b></u> <br>
                Nomor : 020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}} </p>
        </div>
    </div>

    @php
    use App\Models\pejabat;
    $pejabat = Pejabat::all();
    @endphp
    {{-- isi --}}
    <div style="text-align: center;">
        <div>
            <table font-size="1">
                @foreach ($pejabat as $pjb)
                <tr>
                    <td style="text-indent: 45px;  text-align:justify">
                        Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}} Tanggal {{$pengadaan->deskripsi_tgl}}, dimulai pukul 10.00 WIB sampai dengan selesai, Pejabat Pengadaan di Lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur
                        {{-- dari tabel pejabat --}}
                        tanggal {{date('D Y', strtotime($pjb->tanggal_sk))}} Nomor : {{$pjb->nomor_sk}},
                        telah mengadakan rapat penjelasan untuk pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <br>
        <div>
            <table style="text-align:justify;" border="0" font-size="0">
                <tr>
                    <td colspan="2">Dalam rapat penjelasan tersebut tersusun pokok acara sebagai berikut :</td>
                </tr>
                <tr>
                    <td width="25">1.</td>
                    <td width="510">Pembukaan oleh Pejabat Pengadaan kepada semua yang hadir.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Penjelasan seluruh isi Dokumen Pengadaan Langsung.</td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">3.</td>
                    <td>Nilai HPS/OE untuk pekerjaan ini adalah Rp. {{$pengadaan->pengadaan->total_hps}},- ({{$pengadaan->pengadaan->deskripsi_hps}}).</td>
                </tr>
                <tr>
                    <td colspan="2">Pokok-Pokok Penjelasan lainnya antara lain sebagai berikut :</td>
                </tr>
            </table>
        </div>
        <br>
        <div style="text-align: center;">
            <table border="0">
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <font color="black">
                            <b> DOKUMEN PENGADAAN <br>BAB I INSTRUKSI KEPADA PESERTA PENGADAAN (LKPP) </b>
                        </font>
                    </td>
                </tr>
                <br>

                {{-- A --}}
                <tr>
                    <td width="8">A.</td>
                    <td colspan="2">UMUM</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Lingkup Pekerjaan.....................................................................................................................................</td>
                    <td width="10">Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Sumber Dana.............................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Peserta Pengadaan.....................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Larangan Korupsi, Kolusi, dan Nepotisme (KKN) serta Penipuan...........................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Larangan Pertentangan Kepentingan........................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                {{-- B --}}
                <tr>
                    <td>B.</td>
                    <td colspan="2">DOKUMEN PENGADAAN</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Dokumen Penawaran.................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Harga Penawaran.......................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Mata Uang Penawaran dan Cara Pembayaran...........................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Masa Berlaku Penawaran dan Jangka Waktu Pelaksanaan....................................................................... </td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Pakta Integritas...........................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Bentuk Dokumen Penawaran....................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                {{-- C --}}
                <tr>
                    <td>C.</td>
                    <td colspan="2">PEMASUKAN DOKUMEN PENAWARAN</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Penyampulan dan Penandaan Sampul Penawaran.....................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Penyampaian Dokumen Penawaran...........................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Batas Akhir Waktu Pemasukan Penawaran............................................................................................... </td>
                    <td>Jelas</td>
                </tr>
                {{-- D --}}
                <tr>
                    <td>D.</td>
                    <td colspan="2">PEMBUKAAN DAN EVALUASI PENAWARAN</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Pembukaan Penawaran..............................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Evaluasi Penawaran...................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table border="0">
                <tr>
                    <td style="text-align: justify; text-indent: 45px;">Demikian Berita Acara Penjelasan dalam rangka Pengadaan Langsung untuk pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya, dibuat dengan sesungguhnya sebagai pertemuan Pejabat Pengadaan dengan peserta Pengadaan Langsung dan merupakan kelengkapan yang tidak terpisahkan dari Dokumen Pengadaan pekerjaan ini</td>
                </tr>
            </table>
        </div>
        <br>
        {{-- Pejabat 1 --}}
        <div>
            <table>
                @foreach ($pejabat as $pjb)
                <tr style="text-align: center;">
                    <td width="550">
                        <b> PIHAK PEJABAT PEMBUAT KOMITMEN </b>
                    </td>
                </tr>
            </table>
            <table border="1" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                <tr style="text-align: center;">
                    <td>NO</td>
                    <td width="200">Nama</td>
                    <td width="175">Jabatan</td>
                    <td width="150">Tanda Tangan</td>
                </tr>
                <tr>
                    <td height="100">1</td>
                    <td>{{$pjb->pejabat_pembuatan_komitmen}}</td>
                    <td>Pejabat Pembuat Komitmen</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <br>
        {{-- Pejabat 2 --}}
        <div>
            <table>
                <tr style="text-align: center;">
                    <td width="550">
                        <b> PIHAK PEJABAT PEMBUAT KOMITMEN </b>
                    </td>
                </tr>
            </table>
            <table border="1" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                <tr style="text-align: center;">
                    <td>NO</td>
                    <td width="200">Nama</td>
                    <td width="175">Jabatan</td>
                    <td width="150">Tanda Tangan</td>
                </tr>
                <tr>
                    <td height="100">1</td>
                    <td>{{$pjb->pejabat_pengadaan}}</td>
                    <td>Pejabat Pengadaan</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <br>
        {{-- Pejabat 3 --}}
        <div>
            <table>
                <tr style="text-align: center;">
                    <td width="550">
                        <b> PIHAK PENYEDIA BARANG/JASA </b>
                    </td>
                </tr>
            </table>
            <table border="1" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                <tr style="text-align: center;">
                    <td>NO</td>
                    <td width="200">Nama</td>
                    <td width="175">Jabatan</td>
                    <td width="150">Tanda Tangan</td>
                </tr>
                <tr>
                    <td height="100">1</td>
                    <td>{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                    <td>{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
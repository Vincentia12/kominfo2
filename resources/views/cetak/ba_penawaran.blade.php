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
                                <br> S U R A B A Y A-60210
                            </p>
                        </font>
                    </td>
                </tr>
            </table>
            <hr>
        {{-- judul --}}
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
            <table border="0" align="center" >
                <tr>
                    <td width="10" style="vertical-align:top"><b>I.</b></td>
                    <td colspan="4" style="vertical-align:top"><b>Personalia dan organisasi rapat :</b></td>
                <tr>
                <tr>
                    <td width="10" style="vertical-align:top"> </td>
                    <td width="200" style="vertical-align:top" colspan="2">Rapat dipimpin oleh</td>
                    <td style="vertical-align:top">:</td>
                    <td width="290" style="vertical-align:top">@foreach ($pejabat as $pejabat){{$pejabat->pejabat_pengadaan}}@endforeach</td>
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="200" style="vertical-align:top" colspan="2">Jabatan</td>
                    <td style="vertical-align:top">:</td>
                    <td width="290" style="vertical-align:top; text-align: justify; ">Pejabat Pengadaan Barang/Jasa di lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}}</td>
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="110" colspan="4">dan dihadiri oleh:</td>
                    {{-- <td width="540"> </td> --}}
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="10">A.</td>
                    <td colspan="3">PPK:</td>
                    {{-- <td width="602"> </td> --}}
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="10"> </td>
                    <td width="200" style="vertical-align:top">I WAYAN RUDY ARTHA, S.Kom</td>
                    <td style="vertical-align:top">:</td>
                    <td width="290" style="text-align: justify; vertical-align:top">Pejabat Pembuat Komitmen di lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}}</td>
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="10" style="vertical-align:top">B.</td>
                    <td style="vertical-align:top" colspan="3">Penyedia Barang/Jasa:</td>
                    {{-- <td width="480"> </td> --}}
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="10">1.</td>
                    <td width="200">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td style="text-align: justify; vertical-align:top">:</td>
                    <td width="290">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
            </table>
        </div>
        <div>
            <table align="center">
                <tr>
                    <td width="10"><b>II.</b></td>
                    <td width="520"><b>Hasil Pembukaan Penawaran sebagai berikut :</b></td>
                <tr>
                <tr>
                    <td width="10"></td>
                    <td>
                        {{-- Garis Tabel --}}
                        <table width="520" border="1" align="center" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                            <thead style="background-color: lightgrey;">
                                <tr align="center">
                                    <th width="30px" scope="col">No</th>
                                    <th width="350px" scope="col">Nama Perusahaan</th>
                                    <th width="95px" scope="col">Surat Penawaran</th>
                                    <th width="95px" scope="col">Dokumen Teknis</th>
                                    <th width="95px" scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr align="center" height="100">
                                    <td scope="row">1</td>
                                    <td>{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                                    <td>Ada</td>
                                    <td>Ada</td>
                                    <td>Lengkap</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
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
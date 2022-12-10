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

<div style="color: #333333;border-color: #333333;border-collapse: collapse;">
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
        @php
        use App\Models\pejabat;
        $pejabat = Pejabat::all();
        @endphp
        <table border="0" align="center">
            @foreach ($pejabat as $pjb)
            <tr>
                <td style="text-align: center">
                    <u><b> BERITA ACARA KLARIFIKASI / NEGOSIASI</b></u>
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
                    <font size="3">020/654.{{$pengadaan->nomor}} /114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</font>
                </td>
                </td>
            <tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table border="0" width="535">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}}, Tanggal {{$pengadaan->deskripsi_tgl}} kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur selaku Pengguna Anggaran tanggal {{date('D Y', strtotime($pjb->tanggal_sk))}} Nomor : {{$pjb->nomor_sk}}, melaksanakan klarifikasi dan negosiasi untuk pelaksanaan {{$pengadaan->pengadaan->jenis_pengadaan}}, dibiayai dari dana APBD Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}} pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening 2.20.02.1.01.5.1.02.01.01.0029 dengan Harga Perkiraan Sendiri (HPS) sebesar Rp. {{$pengadaan->pengadaan->total_hps}},- ({{$pengadaan->pengadaan->deskripsi_hps}}).</td>
            </tr>
        </table>
    </div>

    <br>
    {{-- <div class="row"> --}}
        <table border="0" width="535">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Melakukan klarifikasi dan negosiasi terhadap penawaran yang diajukan oleh : {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}} {{$pengadaan->pengadaan->pelaksana->alamat}} {{$pengadaan->pengadaan->pelaksana->kota}} dengan hasil terlampir.</td>
            </tr>
        </table>
    {{-- </div> --}}

    <br>
    {{-- <div class="row"> --}}
        <table border="0" width="535">
            <tr>
                <td width="8"></td>
                <td style="text-indent: 45px; text-align: justify;">Dari hasil klarifikasi dan negosiasi harga, ditetapkan sebagai penyedia yaitu :</td>
            </tr>
        </table>
    {{-- </div> --}}

    {{-- <div> --}}
        <table border="0" width="535">
            <tr>
                <td width="8" rowspan="6"></td>
                <td width="180">Nama Perusahaan</td>
                <td width="5">:</td>
                <td>{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
            <tr>
                <td width="180">Nama Penanggung Jawab</td>
                <td>:</td>
                <td >{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
            <tr>
                <td width="180">Alamat Perusahaan</td>
                <td>:</td>
                <td >{{$pengadaan->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
            </tr>
            <tr>
                <td width="180">Nomomr Pokok Wajib Pajak</td>
                <td>:</td>
                <td >{{$pengadaan->pengadaan->pelaksana->npwp}}</td>
            </tr>
            <tr>
                <td width="180" style="vertical-align: top;">Pekerjaan</td>
                <td style="vertical-align: top;">:</td>
                <td  style="text-align: justify;">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
            </tr>
            <tr>
                <td width="180">Dengan Harga</td>
                <td>:</td>
                <td >RP. {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},- ({{$pengadaan->pengadaan->deskripsi_negosiasi}})</td>
            </tr>
        </table>
    {{-- </div> --}}
    <br>
    {{-- <div class="row"> --}}
        <table border="0" width="535">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Dengan pertimbangan bahwa spesifikasi teknis sesuai dengan ketentuan dan harga dapat dipertanggungjawabkan dan menguntungkan Pemerintah Provinsi Jawa Timur.</td>
            </tr>
            <tr><td hidden="10"></td></tr>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian Berita Acara ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan pengadaan langsung.</td>
            </tr>
        </table>
    </div>

    <br>
    <div style="text-align:center ;">
        <table width="535" style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">Direktur</td>
                <td width="250">PEJABAT PENGADAAN</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                <td width="250"> </td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <br><br><br><br>
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
                <td width="250"> </td>
                <td width="250">NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    @endforeach
{{-- </div>

<div class="card-body"> --}}
    <table width="535" border="1" align="center" style="color: #333333;border-width: 1px;border-color: #333333;border-collapse: collapse;">
        <thead>
            <tr align="center">
                <th colspan="2" scope="col">BERITA ACARA HASIL PENGADAAN BARANG</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col">PEKERJAAN : <br>{{ $pengadaan->pengadaan->jenis_pengadaan}}</td>
                <td scope="col">Nomor : 020/{{$pengadaan->nomor}}/114.6/2022 <br>Tanggal : {{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="535" border="0" align="center" font-size="2">
        <tr>
            <td style="text-align:justify;">Pada hari ini {{$pengadaan->deskripsi_tgl}}, dimulai pukul 10.00 WIB sampai dengan selesai, dengan mengambil tempat di Ruang Argopuro Dinas Komunikasi Dan Informatika Provinsi Jawa Timur telah disusun Berita Acara Hasil Pengadaan Langsung untuk Pekerjaan tersebut diatas.</td>
        </tr>
    </table>
    <br>
    <table width="535" align="center" >
        <tr>
            <td width="10" style="vertical-align:top">I.</td>
            <td width="510" style="vertical-align:top; text-align:justify;" colspan="3">Bahwa dalam proses Pengadaan Langsung pengadaan {{ $pengadaan->pengadaan->jenis_pengadaan}} telah diundang calon penyedia yaitu :</td>
        <tr>
        <tr>
            <td width="10"> </td>
            <td style="vertical-align:top; text-align:justify;">Nama Perusahaan</td>
            <td width="5">:</td>
            <td style="vertical-align:top; text-align:justify;">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td>Alamat</td>
            <td>:</td>
            <td >{{$pengadaan->pengadaan->pelaksana->alamat}}</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td style="vertical-align:top; text-align:justify;" colspan="3">Setelah dilakukan penilaian kualifikasi/kompetensi badan usaha maka penyedia tersebut dianggap mampu untuk melaksanakan pekerjaan pengadaan langsung tersebut.</td>
        <tr>
    </table>
    <br>
    <table align="center" width="535" style="color: #333333;border-color: #333333;border-collapse: collapse;">
        <tr>
            <td width="10" style="vertical-align:top; text-align:justify;">II.</td>
            <td style="vertical-align:top; text-align:justify;" colspan="4">Setelah Penyedia menyampaikan penawaran (administrasi, teknis dan harga) maka dilakukan pembukaan penawaran. Dalam pembukaan penawaran diperoleh hasil sebagai berikut :</td>
        <tr>
        <tr>
            <td width="10"> </td>
            <td width="5" style="vertical-align:top;">1.</td>
            <td colspan="3">
            <table width="500" border="1" font-size="2" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                    <thead style="text-align: center; background-color: lightgrey;">
                        <tr>
                            <th colspan="3">PENAWARAN</th>
                            <th rowspan="2">KETERANGAN</th>
                        </tr>
                        <tr>
                            <th>Administrasi</th>
                            <th>Teknis</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ada</td>
                            <td>Ada</td>
                            <td>Ada</td>
                            <td>Lengkap</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5" style="vertical-align:top; text-align:justify;">2.</td>
            <td style="vertical-align:top; text-align:justify;">Harga Penawaran</td>
            <td style="vertical-align:top; text-align:justify;">:</td>
            <td style="vertical-align:top; text-align:justify;">Rp. {{number_format($pengadaan->pengadaan->harga_penawaran)}},- <br>{{$pengadaan->pengadaan->deskripsi_penawaran}}</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"> </td>
            <td style="vertical-align:top; text-align:justify;">Harga Penawaran setelah Koreksi Aritmatik</td>
            <td style="vertical-align:top; " width="5">:</td>
            <td style="vertical-align:top; text-align:justify;">Rp. {{number_format($pengadaan->pengadaan->harga_penawaran)}},- <br>{{$pengadaan->pengadaan->deskripsi_penawaran}}</td>
        </tr>
        <tr>
            <td width="5"></td>
            <td colspan="4">Selanjutnya dilakukan evaluasi dengan unsur-unsur evaluasi sebagai berikut :</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5" style="vertical-align:top; ">1.</td>
            <td  style="vertical-align:top; " colspan="3">Evaluasi Administrasi</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5" style="vertical-align:top; text-align:justify;">2.</td>
            <td style="vertical-align:top; text-align:justify;" colspan="3">Evaluasi Teknis</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5">3.</td>
            <td colspan="3">Evaluasi Kewajaran Harga</td>
        </tr>
    </table>
    <table align="center" width="535">
        <tr>
            <td width="5"> </td>
            <td width="510" colspan="4">Unsur – unsur selengkapnya sebagai berikut :</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5">1.</td>
            <td colspan="3">Evaluasi Administrasi</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"> </td>
            <td colspan="3">Evaluasi Administrasi meliputi :</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"> </td>
            <td width="5">a.</td>
            <td colspan="2"><b>Surat Penawaran</b></td>
        </tr>
        <tr>
            <td width="10"></td>
            <td width="5"> </td>
            <td> </td>
            <td colspan="2">
                <table width="490" border="1" align="center" font-size="2" style="vertical-align:top; text-align:justify; color: #333333;border-color: #333333;border-collapse: collapse;">
                    <thead style="text-align: center; background-color: lightgrey;">
                        <tr>
                            <th width="5">NO</th>
                            <th width="210">UNSUR YANG DIEVALUASI</th>
                            <th width="100">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody >
                        <tr>
                            <td>1</td>
                            <td>Syarat-syarat substansial yang diminta berdasarkan Dokumen Pemilihan dipenuhi/dilengkapi</td>
                            <td style="text-align: center;">Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Surat Penawaran</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <ul>
                                    <li>Ditandatangani oleh yang berhak</li>
                                    <li>Jangka waktu berlakunya surat penawaran</li>
                                    <li>Jangka Waktu Pelaksanaan</li>
                                    <li>Bertanggal</li>
                                </ul>
                            </td>
                            <td style="text-align: center;">Memenuhi Syarat <br> Memenuhi Syarat <br> Memenuhi Syarat <br> Memenuhi Syarat</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <table align="center" font-size="2" width="535">
        <tr>
            <td width="10"> </td>
            <td width="5">2.</td>
            <td>Evaluasi Teknis</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"></td>
            <td>Apabila penawaran memenuhi syarat administrasi tersebut diatas dilakukan evaluasi teknis, unsur evaluasi teknis meliputi :</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"></td>
            <td>
                <table width="500" border="1" align="center" font-size="2" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                    <thead style="text-align: center; background-color: lightgrey;">
                        <tr>
                            <th width="5">NO</th>
                            <th width="210">UNSUR YANG DIEVALUASI</th>
                            <th width="125">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Metode pelaksanaan pekerjaan</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jadwal waktu pelaksanaan pekerjaan</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Jenis, kapasitas, komposisi dan jumlah peralatan</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Spesifikasi teknis</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Personil Inti</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <table align="center" font-size="2" width="535">
        <tr>
            <td width="10"> </td>
            <td width="10">3.</td>
            <td>Evaluasi Kewajaran Harga</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"> </td>
            <td>Penawaran yang telah lulus evaluasi teknis dilakukan Evaluasi Kewajaran Harga, yang meliputi :</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"> </td>
            <td>
                <table width="500" border="1" align="center" font-size="2" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                    <thead style="text-align: center; background-color: lightgrey;">
                        <tr>
                            <th width="5">NO</th>
                            <th width="210">DIEVALUASI</th>
                            <th width="125">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Total harga penawaran tidak melebihi HPS</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Harga satuan timpang</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kewajaran harga</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center" width="535">
        <tr>
            <td width="10" style="vertical-align:top;">III.</td>
            <td style="vertical-align:top;" colspan="4">Setelah evaluasi dinyatakan memenuhi syarat maka dilakukan proses Klarifikasi Teknis dan Negosiasi Harga. Dari Hasil Negosiasi harga diperoleh hasil sebagai berikut :</td>
        <tr>
        <tr>
            <td width="10"> </td>
            <td width="5" style="vertical-align:top;">-</td>
            <td style="vertical-align:top;">Harga Penawaran</td>
            <td width="5" style="vertical-align:top;">:</td>
            <td style="vertical-align:top;">Rp. Rp. {{number_format($pengadaan->pengadaan->harga_penawaran)}},-({{$pengadaan->pengadaan->deskripsi_penawaran}})</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5">-</td>
            <td style="vertical-align:top;">Harga Penawaran setelah Negosiasi</td>
            <td width="5" style="vertical-align:top;">:</td>
            <td style="vertical-align:top;">Rp. {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},-({{$pengadaan->pengadaan->deskripsi_negosiasi}})</td>
        </tr>
    </table>
    <br>
    <table border="0" align="center" font-size="2" width="535">
        <tr>
            <td width="535">Untuk selanjutnya Berita Acara Hasil Pengadaan Langsung ini akan disampaikan kepada Pejabat Pembuat Komitmen untuk proses pengadaan langsung selanjutnya.</td>
        </tr>
    </table>
    <br>
    <table border="0" align="center" font-size="2" width="535">
        <tr>
            <td width="535">Demikian Berita Acara Hasil Pengadaan dibuat dengan sebenarnya oleh Pejabat Pengadaan untuk dipergunakan sebagaimana mestinya.</td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                <center><b>PEJABAT PENGADAAN DI LINGKUNGAN</b><br>
                    <b>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</b><br>
            </td>
        </tr>
    </table>
    <br>
    <table width="535" border="1" align="center" style="color: #333333;border-color: #333333;border-collapse: collapse;">
        <thead style="text-align: center; background-color: lightgrey;">
            <tr align="center">
                <th width="10px" scope="col">No</th>
                <th width="240" scope="col">Nama</th>
                <th width="145px" scope="col">Jabatan</th>
                <th width="100px" scope="col">Tanda Tangan</th>
            </tr>
        </thead>
        <tbody>
            <tr align="center" height="100">
                <th scope="row">1</th>
                @foreach ($pejabat as $pjb)  
                <td>{{$pjb->pejabat_pengadaan}}</td>
                @endforeach
                <td>Pejabat Pengadaan</td>
                <td height="50"> </td>
            </tr>
        </tbody>
    </table>
</div>
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
            {{-- <font color="black">  --}}
                <p align="center"><u><b> SURAT PERINTAH KERJA </b></u> <br>
                    Nomor : 020/{{$pengadaan1->nomor}}/114.6/2022 </p>
            {{-- </font> --}}
        </div>
    </div>

    {{-- isi --}}
    <div style="text-align: center;">
        <div>
            <table font-size="1" border="0">
                <tr>
                    <td style="text-indent: 45px; ">Pada hari ini {{$pengadaan1->hari}} {{$pengadaan1->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
                </tr>
                {{-- <tr>
                    <td>Kami yang bertanda tangan dibawah ini :</td>
                </tr> --}}
            </table>
        </div>
        <br>
        <div>
            <table border="0">
                <tr>
                    <td>1.</td>
                    <td >Nama</td>
                    <td>:</td>
                    {{-- Ambil dari tabel pejabat --}}
                    <td>I WAYAN RUDY ARTHA, S.Kom</td>
                    <td>NIP. 19770517 200901 1 005</td>
                </tr>
                <tr>
                    <td > </td>
                    <td >Jabatan</td>
                    <td width="3">:</td>
                    <td colspan="2">Pejabat Pembuat Komitmen Dinas Komunikasi Dan Informatika Provinsi Jawa Timur</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Alamat Kantor</td>
                    <td>:</td>
                    <td colspan="2">Jl. Ahmad Yani 242 - 244 Surabaya</td>
                </tr>
                <tr>
                    <td colspan="5">Bertindak untuk dan atas nama Pemerintah Provinsi Jawa Timur, selanjutnya disebut PIHAK KESATU</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Nama</td>
                    <td>:</td>
                    <td colspan="2">{{$pengadaan1->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
                <tr>
                    <td > </td>
                    <td >Jabatan</td>
                    <td width="3">:</td>
                    <td colspan="2">{{$pengadaan1->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                </tr>
                <tr>
                    <td > </td>
                    <td >Nama Perusahaan</td>
                    <td width="3">:</td>
                    <td colspan="2">{{$pengadaan1->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Alamat Kantor</td>
                    <td>:</td>
                    <td colspan="2">{{$pengadaan1->pengadaan->pelaksana->alamat}}</td>
                </tr>
                <tr>
                    <td colspan="5">Bertindak untuk dan atas nama Pemerintah Provinsi Jawa Timur, selanjutnya disebut PIHAK KESATU</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table border="0">
                <tr>
                    <td colspan="2">Berdasarkan :</td>
                </tr>
                <tr>
                    <td width="3">1.</td>
                    {{-- no surat lain --}}
                    <td>Surat Permintaan Penawaran Nomor : 020/654.5/114.6/2022 Tanggal 22 Agustus 2022</td>
                </tr>
                <tr>
                    <td>2.</td>
                    {{-- no surat lain --}}
                    <td>Surat Penawaran Harga Nomor  : 233/PEN/PN/IX/2022 Tanggal 24 Agustus 2022</td>
                </tr>
                <tr>
                    <td>3.</td>
                    {{-- no surat lain --}}
                    <td>Berita Acara Hasil Klarifikasi dan Negosiasi Nomor : 020/654.9/114.6/2022 Tanggal 1 September 2022</td>
                </tr>
                <tr>
                    <td>4.</td>
                    {{-- no surat lain --}}
                    <td>Berita Acara Hasil Pengadaan Langsung Nomor : 020/654.10/114.6/2022 Tanggal 5 September 2022</td>
                </tr>
                <tr>
                    <td colspan="2">Maka PIHAK KESATU menerbitkan Surat Perintah Kerja, dengan ketentuan </td>
                </tr>
                <tr>
                    <td>5.</td>
                    {{-- no surat lain --}}
                    <td>Lingkup Pekerjaan :</td>
                </tr>
            </table>
            <table border="1">
                <thead>
                    <tr>
                        <td>NO</td>
                        {{-- <td>JENIS BARANG / PEKERJAAN</td> --}}
                        <td>SPESIFIKASI</td>
                        <td>KUANTITAS</td>
                        <td>SATUAN</td>
                        <td>HARGA SATUAN (Rp.)</td>
                        <td>JUMLAH HARGA (Rp.)</td>
                    </tr>
                </thead>
                    {{-- </td> --}}
                <tbody>
                    @php
			$no = 1;	
		@endphp
                    @foreach ($barang as $brg)
                        <tr>
                            <td>{{$no++}}</td>
                            {{-- <td>{{$brg->pengadaan->jenis_pengadaan}}</td> --}}
                            <td>{{$brg->barang}}</td>
                            <td>{{$brg->jumlah_barang}}</td>
                            <td>{{$brg->satuan}}</td>
                            <td>{{$brg->harga_satuan}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <table border="0">
                <tr>
                    <td>6.</td>
                    <td colspan="2">Pembayaran dengan Sumber Dana APBD Provinsi Jawa Timur Tahun Anggaran 2022, dibebankan pada DPA - SKPD Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran 2022, Kode Rekening {{$pengadaan1->pengadaan->pelaksana->kode_rekening}}</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td colspan="2">Jangka Waktu Pelaksanaan 7 (Tujuh) hari kalender, tanggal pelaksanaan yaitu Tanggal            13 September – 20 September 2022</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td colspan="2">Instruksi kepada PIHAK KEDUA :</td>
                </tr>
                <tr>
                    <td rowspan="3">    </td>
                    <td width="3">A.</td>
                    <td>Penagihan hanya dapat dilakukan setelah penyelesaian pekerjaan yang diperintahkan dalam SPK ini dan dibuktikan dengan Berita Acara Serah Terima.</td>
                </tr>
                <tr>
                    <td>B.</td>
                    <td>Jika pekerjaan tidak dapat diselesaikan dalam jangka waktu pelaksanaan pekerjaan karena kesalahan atau kelalaian penyedia maka penyedia berkewajiban untuk membayar denda kepada PPK sebesar 1/1000 (satu per seribu) dari nilai SPK sebelum PPn setiap hari kalender keterlambatan.</td>
                </tr>
                <tr>
                    <td>C.</td>
                    <td>Selain tunduk kepada ketentuan dalam SPK ini, penyedia berkewajiban untuk mematuhi Standar Ketentuan dan Syarat Umum SPK terlampir.</td>
                </tr>
                <br>
                <tr>
                    <td colspan="3" style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian Surat Perintah Kerja ini dibuat dengan sebenarnya pada hari, tanggal dan bulan tersebut diatas dalam rangkap 4 (empat), 2 lembar dibubuhi materai yang cukup dan mempunyai kekuatan hukum yang sama.</td>
                </tr>
            </table>
        </div>
        <br>
        {{-- Pejabat --}}
        <div > 
            <table border="0" style="text-align: center;">
                <tr>
                    <td colspan="3" width=525></td>
                </tr>
                <tr>
                    <td width="180">PIHAK KEDUA</td>
                    <td width="165"></td>
                    <td width="180">Menyetujui :</td>
                </tr>
                <tr>
                    <td width="180">Penyedia Barang/Jasa</td>
                    <td width="165"></td>
                    <td width="180">PIHAK KESATU</td>
                </tr>
                <tr>
                    <td width="180">{{$pengadaan1->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td width="165"></td>
                    <td width="180">PEJABAT PEMBUAT KOMITMEN</td>
                </tr>
                <br><br><br><br><br>
                <tr>
                    <td width="180"><u>{{$pengadaan1->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                    <td width="165"></td>
                    <td width="180"><u>I WAYAN RUDY ARTHA, S.Kom</u></td>
                </tr>
                <tr>
                    <td width="180">{{$pengadaan1->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                    <td width="165"></td>
                    <td width="180">NIP. 19770517 200901 1 005</td>
                </tr>
            </table>
            <table style="text-align: center;" border="0">
                <tr>
                    <td width="160"></td>
                    <td width="195">Mengetahui:</td>
                    <td width="160"></td>
                </tr>
                <tr>
                    <td width="160"></td>
                    <td width="195">KUASA PENGGUNA ANGGARAN</td>
                    <td width="160"></td>
                </tr>
                <br><br><br><br><br>
                <tr>
                    <td width="160"></td>
                    <td width="195"><u>Dra. Ec. NIRMALA DEWI, MM</u></td>
                    <td width="160"></td>
                </tr>
                <tr>
                    <td width="160"></td>
                    <td width="195">NIP. 19650909 199403 2 006</td>
                    <td width="160"></td>
                </tr>
            </table>
        </div>
        
    </div>
</div> 

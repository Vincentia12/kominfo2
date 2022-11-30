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
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <u><b>BERITA ACARA PEMBAYARAN</b></u>
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
                    <font size="3">020/654.{{$pengadaan1->jadwal}} /114.6/2022</font>
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
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan1->hari}}, Tanggal {{$pengadaan1->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
            </tr>
        </table>
    </div>

    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">I.</td>
                <td width="100">Nama</td>
                <td>:</td>
                <td width="370">I WAYAN RUDY ARTHA, S.Kom</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">NIP</td>
                <td>:</td>
                <td width="370">19770517 200901 1 005</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Jabatan</td>
                <td>:</td>
                <td width="370">Pejabat Pembuat Komitmen</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Alamat</td>
                <td>:</td>
                <td width="370">Jl. A. Yani No. 242-244 Surabaya</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="470">Yang selanjutnya disebut <b>PIHAK KESATU</b> </td>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">II.</td>
                <td width="100">Nama</td>
                <td>:</td>
                <td width="370">{{$pengadaan1->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Jabatan</td>
                <td>:</td>
                <td width="370">{{$pengadaan1->pengadaan->pelaksana->jabatan_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="100">Alamat</td>
                <td>:</td>
                <td width="370">{{$pengadaan1->pengadaan->pelaksana->alamat}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="470">Yang selanjutnya disebut <b>PIHAK KEDUA</b> </td>
        </table>
    </div>


    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="160">Dengan ini menyatakan bahwa :</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">1.</td>
                <td width="370"> Telah Melaksanakan Pekerjaan :</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">a.</td>
                <td width="120">Pekerjaan</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">{{$pengadaan1->pengadaan->jenis_pengadaan}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">b.</td>
                <td width="120">Lokasi</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">Surabaya</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">c.</td>
                <td width="120">Departemen/Lembaga</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">d.</td>
                <td width="120">Sumber Dana</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">APBD</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">e.</td>
                <td width="120">Pelaksanaan Pekerjaan</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">{{$pengadaan1->alokasi}} hari Kalender</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">f.</td>
                <td width="120">Nilai Kontrak</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">
                    Rp.
                    {{$pengadaan1->pengadaan->nilai_negosiasi}},-
                </td>
            </tr>
        </table>
    </div>


    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">2.</td>
                <td style="text-align: left ;text-align: justify;">PIHAK KEDUA telah mencapai kemajuan Hasil Belanja {{$pengadaan1->pengadaan->jenis_pengadaan}} , dengan perhitungan nilai kontrak sebagai berikut :</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">a.</td>
                <td width="120">Nilai Kontrak Pekerjaan</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">Rp.
                    {{$pengadaan1->pengadaan->nilai_negosiasi}},-
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">b.</td>
                <td width="120">Jumlah yang telah dibayarkan</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">Rp. ,-
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">c.</td>
                <td width="120">Nilai kontrak yang masih tersedia</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">Rp. ,-</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">d.</td>
                <td width="120">Pembayaran termin saat ini</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">Rp.
                    {{$pengadaan1->pengadaan->nilai_negosiasi}},-
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td width="43"></td>
                <td width="15">e.</td>
                <td width="120">Sisa nilai kontrak s/d saat ini</td>
                <td>:</td>
                <td style="text-align: left ;text-align: justify;">Rp. ,-</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="25"></td>
                <td width="15">3.</td>
                <td style="text-align: left ;text-align: justify;">Pada pembayaran ini PIHAK KEDUA berhak dibayarkan sebesar Rp.
                    {{$pengadaan1->pengadaan->nilai_negosiasi}},- (Terbilang : {{$pengadaan1->pengadaan->deskripsi_negosiasi}} )
                </td>
            </tr>
        </table>
    </div>









    <br>
    <div>
        <table border="0" style="text-align: center;">
            <tr>
                <td colspan="3" width=525></td>
            </tr>
            <tr>
                <td width="180"><b>PIHAK KEDUA</b></td>
                <td width="165"></td>
                <td width="180"><b>PIHAK KESATU</b></td>
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
                <td width="195">Menyetujui</td>
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
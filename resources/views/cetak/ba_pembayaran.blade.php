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
    {{-- <div class="row"> --}}
        <table border="0" align="center">
            <tr>
                <td style="vertical-align:top" style="text-align: center">
                    <u><b>BERITA ACARA PEMBAYARAN</b></u>
                </td>
            <tr>
        </table>
        <table border="0" align="center">
            <tr>
                <td style="vertical-align:top" style="text-align: center">
                    <font size="3">Nomor</font>
                </td>
                <td style="vertical-align:top" style="text-align: center">
                    <font size="3">:</font>
                </td>
                <td style="vertical-align:top" style="text-align: center">
                    <font size="3">020/654.{{$pengadaan->nomor}} /114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</font>
                </td>
                </td>
            <tr>
        </table>
    {{-- </div> --}}

    @php
        use App\Models\Jadwal;
        use App\Models\pejabat;

        $png = $pengadaan->pengadaan_id;

        $KuitansiKontrak = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
        ->where('jadwals.kegiatan', '=', 'Kuitansi Kontrak')
        ->get();
        $pejabat = Pejabat::all();
    @endphp

    <div class="row">
        <table>
            <tr>
                <td style="vertical-align:top" width="8"></td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}}, Tanggal {{$pengadaan->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
            </tr>
        </table>
    </div>
    @foreach ($pejabat as $pjb)
    <div>
        <table border="0" align="" font-size="1">
            <tr>
                <td style="vertical-align:top" width="15" rowspan="5"></td>
                <td style="vertical-align:top" width="15">I.</td>
                <td style="vertical-align:top" width="180">Nama</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">{{$pjb->pejabat_pembuatan_komitmen}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="180">NIP</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">{{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="180">Jabatan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">Pejabat Pembuat Komitmen</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="180">Alamat</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">Jl. A. Yani No. 242-244 Surabaya</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" colspan="3">Yang selanjutnya disebut <b>PIHAK KESATU</b> </td>
            </tr>
        @endforeach
            {{-- <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" height="15" colspan="4"></td>
            </tr> --}}
            <tr>
                <td style="vertical-align:top" width="15" rowspan="4"></td>
                <td style="vertical-align:top" width="15">II.</td>
                <td style="vertical-align:top" width="180">Nama</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="180">Jabatan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="180">Alamat</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">{{$pengadaan->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="470" colspan="3">Yang selanjutnya disebut <b>PIHAK KEDUA</b> </td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" colspan="5">Dengan ini menyatakan bahwa :</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">1.</td>
                <td style="vertical-align:top" colspan="4"> Telah Melaksanakan Pekerjaan :</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">a.</td>
                <td style="vertical-align:top" width="180">Pekerjaan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">b.</td>
                <td style="vertical-align:top" width="180">Lokasi</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">{{$pengadaan->pengadaan->pelaksana->kota}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">c.</td>
                <td style="vertical-align:top" width="180">Departemen/Lembaga</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">d.</td>
                <td style="vertical-align:top" width="180">Sumber Dana</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">APBD</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">e.</td>
                <td style="vertical-align:top" width="180">Pelaksanaan Pekerjaan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">{{$pengadaan->alokasi}} hari Kalender</td>
            </tr>
            @foreach ($KuitansiKontrak as $kk)
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">f.</td>
                <td style="vertical-align:top" width="180">Kwitansi Kontrak</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">
                    Nomor : 020/{{$kk->nomor}}/114.6/{{$kk->tanggal->format('Y')}}
                </td>
            </tr>
            @endforeach
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">g.</td>
                <td style="vertical-align:top" width="180">Nilai Kontrak</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">
                    Rp.
                    {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},-
                </td>
            </tr>
            {{-- <tr>
                <td style="vertical-align:top" width="15" ></td>
                <td style="vertical-align:top" height="20" colspan="5"></td>
            </tr> --}}
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">2.</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;" colspan="4">PIHAK KEDUA telah mencapai kemajuan Hasil Belanja {{$pengadaan->pengadaan->jenis_pengadaan}} , dengan perhitungan nilai kontrak sebagai berikut :</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">a.</td>
                <td style="vertical-align:top" width="180">Nilai Kontrak Pekerjaan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Rp.
                    {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},-
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">b.</td>
                <td style="vertical-align:top" width="180">Jumlah yang telah dibayarkan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Rp. ,-
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">c.</td>
                <td style="vertical-align:top" width="180">Nilai kontrak yang masih tersedia</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Rp. ,-</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">d.</td>
                <td style="vertical-align:top" width="180">Pembayaran termin saat ini</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Rp.
                    {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},-
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">e.</td>
                <td style="vertical-align:top" width="180">Sisa nilai kontrak s/d saat ini</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Rp. ,-</td>
            </tr>
            {{-- <tr>
                <td style="vertical-align:top" width="15" ></td>
                <td style="vertical-align:top" height="20" colspan="5"></td>
            </tr> --}}
            <tr>
                <td style="vertical-align:top" width="25"></td>
                <td style="vertical-align:top" width="15">3.</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;" colspan="4">Pada pembayaran ini PIHAK KEDUA berhak dibayarkan sebesar Rp.
                    {{number_format($pengadaan->pengadaan->nilai_negosiasi)}},- (Terbilang : {{$pengadaan->pengadaan->deskripsi_negosiasi}} )
                </td>
            </tr>
        </table>
    </div>
    @foreach ($pejabat as $pjb)
    <div>
        <table border="0" style="text-align: center;">
            <tr>
                <td style="vertical-align:top" colspan="3" width=525></td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="180"><b>PIHAK KEDUA</b></td>
                <td style="vertical-align:top" width="165"></td>
                <td style="vertical-align:top" width="180"><b>PIHAK KESATU</b></td>
            </tr>
            <br><br><br>
            <tr>
                <td style="vertical-align:top" width="180"><u>{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                <td style="vertical-align:top" width="165"></td>
                <td style="vertical-align:top" width="180"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="180">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                <td style="vertical-align:top" width="165">Menyetujui</td>
                <td style="vertical-align:top" width="180">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
        </table>
        <table style="text-align: center;" border="0">
            {{-- <tr>
                <td style="vertical-align:top" width="160"></td>
                <td style="vertical-align:top" width="195">Menyetujui</td>
                <td style="vertical-align:top" width="160"></td>
            </tr> --}}
            <tr>
                <td style="vertical-align:top" width="160"></td>
                <td style="vertical-align:top" width="195">KUASA PENGGUNA ANGGARAN</td>
                <td style="vertical-align:top" width="160"></td>
            </tr>
            <br><br><br>
            <tr>
                <td style="vertical-align:top" width="160"></td>
                <td style="vertical-align:top" width="195"><u>{{$pjb->kuasa_pengguna_anggaran}}</u></td>
                <td style="vertical-align:top" width="160"></td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="160"></td>
                <td style="vertical-align:top" width="195">NIP. {{$pjb->nip_kuasa_pengguna}}</td>
                <td style="vertical-align:top" width="160"></td>
            </tr>
        </table>
    </div>
    @endforeach



</div>
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

    @php
        use App\Models\Jadwal;
        use App\Models\pejabat;

        $png = $pengadaan->pengadaan_id;
        $SuratUndanganPermintaanPenawaranHarga = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
        ->where('jadwals.kegiatan', '=', 'Surat Undangan Permintaan Penawaran Harga')
        ->get();
        $SuratPenawaranHarga = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
        ->where('jadwals.kegiatan', '=', 'Surat Penawaran Harga')
        ->get();
        $BeritaAcaraHasilKlarifikasiNegosiasi = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
        ->where('jadwals.kegiatan', '=', 'BA. Klarifikasi/egosiasi')
        ->get();
        $BeritaAcaraHasilPengadaanLangsung = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
        ->where('jadwals.kegiatan', '=', 'BA. Hasil Pengadaan Langsung')
        ->get();
        $SuratPerintahMulaiKerja = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
        ->where('jadwals.kegiatan', '=', 'Surat Perintah Mulai Kerja (SPMK)')
        ->get();
        $BeritaAcaraSerahTerimaHasilPekerjaan = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
        ->where('jadwals.kegiatan', '=', 'BA Serah Terima Hasil Pekerjaan')
        ->get();
        $pejabat = Pejabat::all();
    @endphp
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
                {{-- Nomor : 020/654.{{$pengadaan->nomor}}/114.6/2022
            </p> --}}
            Nomor : 020/654.{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->format('Y')}} </p>
            {{-- </font> --}}
        </div>
    </div>

    {{-- isi --}}
    <div>
        @foreach ($pejabat as $pj)
        <div>
            <table font-size="1" border="0">
                <tr>
                    <td style="text-indent: 45px; ">Pada hari ini {{$pengadaan->created_at->isoFormat('dddd')}} {{$pengadaan->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
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
                    <td>Nama</td>
                    <td>:</td>
                    {{-- Ambil dari tabel pejabat --}}
                    <td>{{$pj->pejabat_pembuatan_komitmen}}</td>
                    <td>NIP. {{$pj->nip_pejabat_komitmen}}</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Jabatan</td>
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
                    <td colspan="5">Bertindak untuk dan atas nama Pemerintah Provinsi Jawa Timur, selanjutnya disebut <b>PIHAK KESATU</b></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Nama</td>
                    <td>:</td>
                    <td colspan="2">{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Jabatan</td>
                    <td width="3">:</td>
                    <td colspan="2">{{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Nama Perusahaan</td>
                    <td width="3">:</td>
                    <td colspan="2">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Alamat Kantor</td>
                    <td>:</td>
                    <td colspan="2">{{$pengadaan->pengadaan->pelaksana->alamat}} {{$pengadaan->pengadaan->pelaksana->kota}}</td>
                </tr>
                <tr>
                    <td colspan="5">Bertindak untuk dan atas nama Pemerintah Provinsi Jawa Timur, selanjutnya disebut <b>PIHAK KEDUA</b></td>
                </tr>
            </table>
        </div>
        <div>
            <table border="0">
                <tr>
                    <td colspan="2">Berdasarkan :</td>
                </tr>
                <tr>
                    <td width="3">1.</td>
                    {{-- no surat lain --}}
                    {{-- <td>{{dd($jdwl->nomor)}}</td> --}}
                    {{-- <td>{{dd($jdwl)}}</td> --}}

                    <td>Surat Permintaan Penawaran Nomor :
                        @foreach ($SuratUndanganPermintaanPenawaranHarga as $supph)
                        020/{{$supph->nomor}}/114.6/{{$supph->tanggal->format('Y')}} Tanggal {{$supph->tanggal}}
                        @endforeach
                    </td>
                    {{-- <td>{{$j->nomor}}</td> --}}
                    {{-- <td>{{$jdwl['nomor']}}</td> --}}
                    {{-- <td>{{[$jdwl->nomor]}}</td> --}}
                    {{-- <td>Surat Permintaan Penawaran Nomor : 020/654.5/114.6/2022 Tanggal 22 Agustus 2022</td> --}}
                </tr>
                <tr>
                    <td>2.</td>
                    {{-- no surat lain --}}
                    <td>Surat Penawaran Harga Nomor :
                        @foreach ($SuratPenawaranHarga as $sph)
                        {{$sph->nomor}} Tanggal {{$sph->tanggl}}
                        @endforeach
                    </td>
                    {{-- <td>Surat Penawaran Harga Nomor : 233/PEN/PN/IX/2022 Tanggal 24 Agustus 2022</td> --}}
                </tr>
                <tr>
                    <td>3.</td>
                    {{-- no surat lain --}}
                    <td>Berita Acara Hasil Klarifikasi dan Negosiasi Nomor :
                        @foreach ($BeritaAcaraHasilKlarifikasiNegosiasi as $bahkn)
                        020/{{$bahkn->nomor}}/114.6/{{$bahkn->tanggal->format('Y')}} Tanggal {{$bahkn->tanggal}}
                        @endforeach
                    </td>
                    {{-- <td>Berita Acara Hasil Klarifikasi dan Negosiasi Nomor : 020/654.9/114.6/2022 Tanggal 1 September 2022</td> --}}
                </tr>
                <tr>
                    <td>4.</td>
                    {{-- no surat lain --}}
                    <td>Berita Acara Hasil Pengadaan Langsung Nomor :
                        @foreach ($BeritaAcaraHasilPengadaanLangsung as $bahpl)
                        020/{{$bahpl->nomor}}/114.6/{{$bahpl->tanggal->format('Y')}} Tanggal {{$bahpl->tanggal}}
                        @endforeach
                    </td>
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
            <table border="1" align="center" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                <thead>
                    <tr>
                        <td>NO</td>
                        <td>JENIS BARANG / PEKERJAAN</td>
                        <td>SPESIFIKASI</td>
                        <td>KUANTITAS</td>
                        <td>SATUAN</td>
                        <td>HARGA SATUAN (Rp.)</td>
                        <td>JUMLAH HARGA (Rp.)</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                    </tr>
                    <tr colspan="7">PENGADAAN BELANJA ALAT/BAHAN UNTUK KEGIATAN KANTOR</tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                    {{-- <td>{{$barang->jenis_pengadaan}}</td> --}}
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($barang as $brg)
                    <tr>
                        {{-- <td>{{$no++}}</td> --}}
                        <td></td>
                        <td></td>
                        {{-- <td>{{$brg->pengadaan->jenis_pengadaan}}</td> --}}
                        <td>{{$brg->barang}}</td>
                        <td>{{$brg->jumlah_barang}}</td>
                        <td>{{$brg->satuan}}</td>
                        <td>{{$brg->harga_satuan}}</td>
                        {{-- @php
                        // $jumlahbarang = $barang["jumlah_barang"];
                        $jumlahbarang = $brg->jumlah_barang;
                        $hargabarang = $brg->harga_satuan;
                        // $hargabarang = $barang["harga_barang"];

                        $jumlah_harga = $jumlahbarang * $hargabarang;
                        @endphp --}}
                        <td>{{$brg->jumlah_harga}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td style="text-align:right" colspan="6">Total</td>
                        @php
                        $png = $pengadaan->pengadaan_id;
                        $sum = DB::table('barangs')
                        ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                        ->sum('jumlah_harga');
                        $ppn = $sum * 0.11;
                        @endphp
                        <td>{{$sum}}</td>
                    </tr>
                    <tr>
                        <td style="text-align:right" colspan="6">PPN 11%</td>
                        <td>{{$ppn}}</td>
                    </tr>
                    <tr>
                        <td style="text-align:right" colspan="6">Jumlah Total</td>
                        <td>{{$pengadaan->pengadaan->nilai_negosiasi}}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tr>
                    <td>6.</td>
                    <td colspan="2">Pembayaran dengan Sumber Dana APBD Provinsi Jawa Timur Tahun Anggaran {{date('Y', strtotime($pj->tanggal_sk))}},
                        {{-- <td colspan="2">Pembayaran dengan Sumber Dana APBD Provinsi Jawa Timur Tahun Anggaran {{$pj->tahun_sk}}, --}}
                        dibebankan pada DPA - SKPD Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{date('Y', strtotime($pj->tanggal_sk))}},
                        {{-- dibebankan pada DPA - SKPD Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$pj->tanggal_sk->isoFormat('Y')}}, --}}
                        Kode Rekening {{$pengadaan->pengadaan->pelaksana->kode_rekening}}
                    </td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td colspan="2">Jangka Waktu Pelaksanaan
                        @foreach ($SuratPerintahMulaiKerja as $spmk)
                        {{$spmk->alokasi}} hari kalender, tanggal pelaksanaan yaitu Tanggal {{$spmk->tanggal}}
                        @endforeach -
                        @foreach ($BeritaAcaraSerahTerimaHasilPekerjaan as $basrhp)
                        {{$basrhp->tanggal}}
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td colspan="2">Instruksi kepada PIHAK KEDUA :</td>
                </tr>
                <tr>
                    <td rowspan="3"> </td>
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
        <div>
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
                    <td width="180">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td width="165"></td>
                    <td width="180">PEJABAT PEMBUAT KOMITMEN</td>
                </tr>
                <br><br><br><br><br>
                <tr>
                    <td width="180"><u>{{$pengadaan->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                    <td width="165"></td>
                    <td width="180"><u>{{$pj->pejabat_pembuatan_komitmen}}</u></td>
                    {{-- <td width="180"><u>I WAYAN RUDY ARTHA, S.Kom</u></td> --}}
                </tr>
                <tr>
                    <td width="180">NIP. {{$pengadaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                    <td width="165"></td>
                    <td width="180">NIP. {{$pj->nip_pejabat_komitmen}}</td>
                    {{-- <td width="180">NIP. 19770517 200901 1 005</td> --}}
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
                    <td width="195"><u>{{$pj->kuasa_pengguna_anggaran}}</u></td>
                    {{-- <td width="195"><u>Dra. Ec. NIRMALA DEWI, MM</u></td> --}}
                    <td width="160"></td>
                </tr>
                <tr>
                    <td width="160"></td>
                    <td width="195">NIP. {{$pj->nip_kuasa_pengguna}}</td>
                    {{-- <td width="195">NIP. 19650909 199403 2 006</td> --}}
                    <td width="160"></td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
</div>
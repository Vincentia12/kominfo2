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
    <div class="card-body">
        <div class="row">
            <table border="0" align="center">
                <tr>
                    <td style="text-align: center">
                        <u><b>BERITA ACARA PENYERAHAN BARANG/JASA</b></u>
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
                        <font size="3">020/654.{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</font>
                    </td>
                    </td>
                <tr>
            </table>
        </div>
        <br>
        <div class="row">
            <table >
                <tr>
                    <td width="8"></td>
                    <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}}, Tanggal {{$pengadaan->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
                </tr>
            </table>
        </div>
        <br>
        @php
            use App\Models\Jadwal;
            use App\Models\pejabat;
    
            $png = $pengadaan->pengadaan_id;
    
            $KuitansiKontrak = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
            ->where('jadwals.kegiatan', '=', 'Kuitansi Kontrak')
            ->get();
    
            $pejabat = Pejabat::all();
    
        @endphp
        @foreach ($pejabat as $pjb)
        <div>
            <table border="0" >
                <tr>
                    <td width="10"></td>
                    <td width="15">I.</td>
                    <td width="100">Nama</td>
                    <td width="5">:</td>
                    <td width="370">{{$pjb->pejabat_pembuatan_komitmen}}</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="100">NIP</td>
                    <td>:</td>
                    <td width="370">{{$pjb->nip_pejabat_komitmen}}</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="100">Jabatan</td>
                    <td>:</td>
                    <td width="370">Pejabat Pembuat Komitmen</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="100">Alamat</td>
                    <td>:</td>
                    <td width="370">Jl. A. Yani No. 242-244 Surabaya</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="470" colspan="3">Yang selanjutnya disebut <b>PIHAK KESATU</b> </td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15">II.</td>
                    <td width="100">Nama</td>
                    <td>:</td>
                    <td width="370">{{$pjb->pengurus_barang}}</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="100">NIP</td>
                    <td>:</td>
                    <td width="370">{{$pjb->nip_pengurus_barang}}</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="100">Jabatan</td>
                    <td>:</td>
                    <td width="370">Pengurus Barang Persediaan</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="470" colspan="3">Yang selanjutnya disebut <b>PIHAK KEDUA</b> </td>
                </tr>
            </table>
        </div>
        
        <br>
        <div>
            <table border="0" >
                <tr>
                    <td width="30"></td>
                    <td style="vertical-align:top" width="15">1.</td>
                    <td style="vertical-align:top" style="text-align: left ;text-align: justify;"><b>PIHAK KESATU</b> telah menyerahkan barang/jasa hasil pekerjaan pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}} hasil pekerjaan sesuai dengan Kwitansi Kontrak nomor : 020/654.14/114.6/2022, Tanggal 9 September 2022;</td>
                </tr>
                <tr>
                    <td width="30"></td>
                    <td style="vertical-align:top" width="15">2.</td>
                    <td style="vertical-align:top" style="text-align: left ;text-align: justify;"><b>PIHAK KEDUA</b> telah menerima dengan baik penyerahan barang/jasa tersebut sebagaimana daftar terlampir.</td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td width="30"></td>
                    <td colspan="2" style="vertical-align:top; text-align: left ;text-align: justify;">Demikian Berita Acara ini dibuat untuk dipergunakan seperlunya.</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table border="0" font-size="0" >
                <tr>
                    <td style="vertical-align:top" width="340"> </td>
                    <td style="vertical-align:top">Surabaya, {{$pengadaan->created_at->isoFormat('D MMMM Y')}}</td>
                    {{-- <td style="vertical-align:top" width="50"> </td> --}}
                </tr>
            </table>
        </div>

        <br>
        <div style="text-align:center ;">
            <table style="text-align: center" border="0" font-size="0" >
                <tr>
                    <td style="vertical-align:top" width="20"> </td>
                    <td style="vertical-align:top" width="250"><b>PIHAK KEDUA</b></td>
                    <td style="vertical-align:top" width="250"><b>PIHAK KESATU</b></td>
                    <td style="vertical-align:top" width="20"> </td>
                </tr>
                <tr>
                    <td style="vertical-align:top" width="20"> </td>
                    <td style="vertical-align:top" width="250">PENGURUS BARANG PERSEDIAAN</td>
                    <td style="vertical-align:top" width="250">PEJABAT PEMBUAT KOMITMEN</td>
                    <td style="vertical-align:top" width="20"> </td>
                </tr>
            </table>
        </div>
        <br><br><br><br>
        <div style="text-align:center ;">
            <table style="text-align: center" border="0" font-size="0" >
                <tr>
                    <td style="vertical-align:top" width="20"> </td>
                    <td style="vertical-align:top" width="250"><u>{{$pjb->pengurus_barang}}</u></td>
                    <td style="vertical-align:top" width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                    <td style="vertical-align:top" width="20"> </td>
                </tr>
                <tr>
                    <td style="vertical-align:top" width="20"> </td>
                    <td style="vertical-align:top" width="250">NIP. {{$pjb->nip_pengurus_barang}} </td>
                    <td style="vertical-align:top" width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                    <td style="vertical-align:top" width="20"> </td>
                </tr>
            </table>
        </div>
        @endforeach
    </div>
</div>
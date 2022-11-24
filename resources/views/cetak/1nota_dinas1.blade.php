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

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table border="0" align="center">
                <tbody>
                    <tr>
                        <td>
                            <center>
                                <font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA</b></font><br>
                                <font size="3"><b>PROVINSI JAWA TIMUR<b /></font><br>
                                <font size="3"><u>NOTA DINAS<u /></font><br>
                        </td>
                    </tr>
                    <tr>
                        <td width="555" colspan="2">
                            <hr>
                        </td>
                    </tr>
                </table>
                <br>
                <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80">Kepada</td>
                        <td>:</td>
                        <td width="475">Yth. Sdr. Pejabat Pembuat Komitmen Dinas Komunikasi dan</td>
                    </tr>
                </table>
                <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80"> </td>
                        <td width="5"> </td>
                        <td width="475">Informatika Provinsi Jawa Timur</td>
                    </tr>
                </table>
                <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80">Dari</td>
                        <td>:</td>
                        <td width="475">Kuasa Pengguna Anggaran</td>
                    </tr>
                </table>
                <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80">Tanggal</td>
                        <td>:</td>
                        <td width="475">{{ $pengadaan1->tanggal}}</td>
                        {{-- <td width="475">{{ $pengadaan1->tanggal}}</td> --}}
                        {{-- <td width="475">11 Agustus 2022</td> --}}
                    </tr>
                </table>
                <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80">Nomor</td>
                        <td>:</td>
                        <td width="475">020/{{$pengadaan1->nomor}}/114.6/2022</td>
                    </tr>
                </table>
                <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80">Sifat</td>
                        <td>:</td>
                        <td width="475">Segera</td>
                    </tr>
                </table>
                <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80">Lampiran</td>
                        <td>:</td>
                        <td width="475">1 (satu) berkas</td>
                    </tr>
                </table>
                <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80">Perihal</td>
                        <td>:</td>
                        {{-- <td width="475">Pemrosesan Administrasi Pengadaan</td> --}}
                        <td width="475">Pemrosesan Administrasi Pengadaan {{ $pengadaan1->pengadaan->jenis_pengadaan}}</td>
                        {{-- <td width="475">Pemrosesan Administrasi Pengadaan {{ $pengadaan->jenis_pengadaan}}</td> --}}
                    </tr>
                </table>
                {{-- <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80"> </td>
                        <td width="5"> </td>
                        <td width="475">Informatika Provinsi Jawa Timur</td>
                    </tr>
                </table> --}}
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Bersama ini ini diberitahukan, bahwa DPA-SKPD Bagian Data dan Statistik pada Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{ $pengadaan1->tanggal}}, kode rekening {{ $pengadaan1->pengadaan->pelaksana->kode_rekening}} pengadaan {{ $pengadaan1->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dengan rincian sebagai berikut :</td>
                </tr>
            </table>
            <br>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="50px" scope="col">id pengadaan</th>
                        {{-- <th width="50px" scope="col">No</th> --}}
                        <th width="265px" scope="col">Belanja Alat/Bahan Untuk Kegiatan Kantor </th>
                        <th width="100px" scope="col">Jumlah Barang</th>
                        <th width="100px" scope="col">Satuan</th>
                        <th width="100px" scope="col">Harga Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $brg)
                        
                    <tr>
                        <th scope="row">{{$brg->pengadaan_id}}</th>
                        <td>{{$brg->barang}}</td>
                        <td align="center">{{$brg->jumlah_barang}}<//td>
                        <td align="center">{{$brg->satuan}}</td>
                        <td align="center">{{$brg->harga_satuan}}</td>
                    </tr>
                    @endforeach
                    {{-- <tr>
                        <th scope="row">2</th>
                        <td>Toner Printer Tinta Printer Epson L-1800</td>
                        <td align="center">1</td>
                        <td align="center">Buah</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Toner Printer Tinta Printer Epson L-6160</td>
                        <td align="center">1</td>
                        <td align="center">Buah</td>
                    </tr> --}}
                </tbody>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Untuk itu diminta bantuannya untuk segera diproses sesuai prosedur yang berlaku.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Demikian untuk pelaksanaannya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>KUASA PENGGUNA ANGGARAN</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>Dra. Ec. NIRMALA DEWI, M.M</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>NIP. 19650909 199403 2 006</td>
                    {{-- @foreach ($pejabat as $p) --}}
                        
                    {{-- <td>NIP. {{ $pejabat->nip_kuasa_pengguna }}</td> --}}
                    {{-- <td>NIP. {{ $pejabat['nip_kuasa_pengguna'] }}</td> --}}
                    {{-- @endforeach --}}
                    <td width="50"> </td>
                    {{-- @foreach ($pejabat as $p)
                
            <p>{{ $p->nip_kuasa_pengguna }}</p>
            @endforeach --}}
                </tr>
            </table>
        </div>
    </div>
</div>
{{-- <div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button type="back" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a type="submit" class="btn btn-primary " href="{{ url('/print_notadinas1')  }}">Cetak PDF <i class="fa fa-save"></i></a>
    </div>
</div>
</div>

    <div class="col-12 grid-margin stretch-card">
        <div class="modal-footer mt-3">
            <button type="back" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <a type="submit" class="btn btn-primary " href="{{ url('/print_notadinas1')  }}">Cetak PDF <i class="fa fa-save"></i></a>
        </div>
    </div> --}}

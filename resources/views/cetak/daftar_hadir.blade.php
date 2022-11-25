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

<div class="col-12 grid-margin stretch-card">
    <div style="text-align: center">
        <font color="black">
            <font size="3"><b>PEJABAT PENGADAAN BARANG/JASA DILINGKUNGAN</b></font><br>
            <font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</b></font><br>
            <font size="3"><b>PROVINSI JAWA TIMUR</b></font><br>
        </font>
        <hr>
    </div>

    <br><br><br>
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td>
                    <center>
                        <font size="4"><b>DAFTAR HADIR</b></font><br><br>
                        <font size="3"><b>PENGEMBALIAN DOKUMEN PRAKUALIFIKASI</b></font><br>
                        <font size="3" style="text-transform: uppercase;"><b>{{$pengadaan1->pengadaan->jenis_pengadaan}}</b></font><br>
                </td>
            </tr>
        </table>
    </div>

    <br><br>
    <div class="row">
        <table width="565px" border="1" align="center">
            <thead>
                <tr align="center">
                    <th width="30px" scope="col">No</th>
                    <th width="121" scope="col">Nama Perusahaan</th>
                    <th width="121" scope="col">Alamat dan No.Telepon</th>
                    <th width="121" scope="col">Tanggal</th>
                    <th width="121" scope="col">Tanda Tangan</th>
                </tr>
                <tr align="center">
                    <th width="30px" scope="col">1</th>
                    <th width="121" scope="col">2</th>
                    <th width="121" scope="col">3</th>
                    <th width="121" scope="col">4</th>
                    <th width="121" scope="col">5</th>
                </tr>
            </thead>
            <tbody>
                <tr height="100">
                    <th scope="row">1</th>
                    <td>{{$pengadaan1->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td>{{$pengadaan1->pengadaan->pelaksana->alamat}}</td>
                    <td>{{$pengadaan1->tanggal}}</td>
                    <td> </td>
                </tr>
            </tbody>
        </table>
    </div>

    <br><br><br>
    <div class="row">
        <div style="text-align: center">
            <table font-size="3" style="width: 33%; text-align: left; float: right;">
                <tr>
                    <td>Surabaya, {{$pengadaan1->tanggal}}</td>
                </tr>
            </table>
        </div>
    </div>

    <br><br>
    <table border="0" align="center">
        <tr>
            <td width="290"> </td>
            <td>PEJABAT PENGADAAN</td>
        </tr>
    </table>

    <br><br><br><br><br><br><br>

    <table border="0" align="center">
        <tr>
            <td width="290"> </td>
            <td><u>ADI KURNIAWAN.S.Kom.,M.Kom</u></td>
        </tr>
        <!-- <tr>
            <td width="300"> </td>
            <td>NIP. 19890618 201403 1 002</td>
        </tr> -->
    </table>
    <table border="0" align="center">
        <tr>
            <td width="290"> </td>
            <td>NIP. 19890618 201403 1 002</td>
        </tr>
        <!-- <tr>
            <td width="300"> </td>
            <td>NIP. 19890618 201403 1 002</td>
        </tr> -->
    </table>


</div>
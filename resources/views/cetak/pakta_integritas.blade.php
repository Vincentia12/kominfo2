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
        <font color="black" size="5">
            <p align="center"><b>PAKTA INTEGRITAS</b></u></p>
        </font>
    </div>

    <div class="row">
        <br>
        <table font-size="2">
            <tr>
                <td style="text-align: justify;">Saya yang bertandatangan di bawah ini, dalam rangka pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur pada Satuan Kerja Perangkat Daerah Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}}, dengan ini menyatakan bahwa saya :</td>
            </tr>
        </table>
    </div>

    <div class="row">
        <br>
        <table font-size="2">
            <tr>
                <td width="20" style="vertical-align:top">1.</td>
                <td style="text-align: justify;">Tidak akan melakukan praktek KKN.</td>
            </tr>
        </table>
    </div>

    <div class="row">
        <br>
        <table font-size="2">
            <tr>
                <td width="20" style="vertical-align:top">2.</td>
                <td style="text-align: justify;">Akan melaporkan kepada pihak yang berwajib/berwenang apabila mengetahui ada indikasi KKN di dalam proses pengadaan ini.</td>
            </tr>
        </table>
    </div>

    <div class="row">
        <br>
        <table font-size="2">
            <tr>
                <td width="20" style="vertical-align:top">3.</td>
                <td style="text-align: justify;">Dalam proses pengadaan ini, berjanji akan melaksanakan tugas secara bersih, transparan, dan profesional dalam arti akan mengerahkan segala kemampuan dan sumber daya secara optimal untuk memberikan hasil kerja terbaik mulai dari penyiapan penawaran, pelaksanaan, dan penyelesaian pekerjaan/kegiatan ini.</td>
            </tr>
        </table>
    </div>

    <div class="row">
        <br>
        <table font-size="2">
            <tr>
                <td width="20" style="vertical-align:top">4.</td>
                <td style="text-align: justify;">Apabila saya melanggar hal-hal yang telah saya nyatakan dalam <b>PAKTA INTEGRITAS</b> ini, saya bersedia dikenakan sanksi moral, sanksi administrasi serta dituntut ganti rugi dan pidana sesuai dengan ketentuan peraturan perundang-undangan yang berlaku.</td>
            </tr>
        </table>
    </div>

    <br><br><br><br>
    <div class="row">
        <div style="text-align: center">
            <table font-size="3" >
                <tr>
                    <td width="300"></td>
                    <td>Surabaya, {{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
        </div>
    </div>

    <br><br><br>
    <div class="row">
        <table font-size="3">
            <tr>
                <td width="13"> </td>
                <td width="10">1.</td>
                <td width="260">I WAYAN RUDY ARTHA, S.Kom</td>
                <td>:</td>
                <td width="280">Pengguna Barang/Jasa ............................................</td>
            </tr>
        </table>
        <table font-size="3">
            <tr>
                <td width="25"> </td>
                <td width="260">Pejabat Pembuat Komitmen</td>
                <td width="8"> </td>
                <td width="280"> </td>
            </tr>
        </table>
    </div>

    <br><br><br><br>
    <div class="row">
        <table font-size="3">
            <tr>
                <td width="13"> </td>
                <td width="10">2.</td>
                <td width="260">ADI KURNIAWAN.S.Kom.,M.Kom</td>
                <td>:</td>
                <td width="280">Pejabat Pengadaan Barang/Jasa ...............................</td>
            </tr>
        </table>
    </div>

    <br><br><br><br><br>
    <div class="row">
        <table font-size="3">
            <tr>
                <td width="13"> </td>
                <td width="10">3.</td>
                <td width="260">MANUHUTU ARMAND FX</td>
                <td>:</td>
                <td width="280">Penyedia Barang/Jasa ..............................................</td>
            </tr>
        </table>
        <table font-size="3">
            <tr>
                <td width="25"> </td>
                <td width="260">CV. PATRIA NUGRAHA</td>
                <td width="8"> </td>
                <td width="280"> </td>
            </tr>
        </table>
    </div>
</div>
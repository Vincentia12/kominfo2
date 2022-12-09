@extends('layouts/index')
@section('content')

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
    <div class="card shadow">
        <div class="card-body" style="text-align:justify; vertical-align:top">
            <table border="0" align="center">
                <tr>
                    <td>
                        <center>
                            <font size="3"><b>PAKTA INTEGRITAS</b></font><br>
                    </td>
                </tr>
                {{-- <tr>
                    <td width="555" colspan="2"><hr></td>
                </tr>  --}}
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Saya yang bertandatangan di bawah ini, dalam rangka pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur pada Satuan Kerja Perangkat Daerah Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$pengadaan->tanggal->isoFormat('Y')}}, dengan ini menyatakan bahwa saya :</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30" style="vertical-align:top">1.</td>
                    <td width="535">Tidak akan melakukan praktek KKN.</td>
                </tr>
                <tr>
                    <td width="30" style="vertical-align:top">2.</td>
                    <td width="535">Akan melaporkan kepada pihak yang berwajib/berwenang apabila mengetahui ada indikasi KKN di dalam proses pengadaan ini.</td>
                </tr>
                <tr>
                    <td width="30" style="vertical-align:top">3.</td>
                    <td width="535">Dalam proses pengadaan ini, berjanji akan melaksanakan tugas secara bersih, transparan, dan profesional dalam arti akan mengerahkan segala kemampuan dan sumber daya secara optimal untuk memberikan hasil kerja terbaik mulai dari penyiapan penawaran, pelaksanaan, dan penyelesaian pekerjaan/kegiatan ini.</td>
                </tr>
                <tr>
                    <td width="30" style="vertical-align:top">4.</td>
                    <td width="535">Apabila saya melanggar hal-hal yang telah saya nyatakan dalam <b>PAKTA INTEGRITAS</b> ini, saya bersedia dikenakan sanksi moral, sanksi administrasi serta dituntut ganti rugi dan pidana sesuai dengan ketentuan peraturan perundang-undangan yang berlaku.</td>
                </tr>
            </table>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>Surabaya, {{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="25">1.</td>
                    <td width="260">I WAYAN RUDY ARTHA, S.Kom</td>
                    <td>:</td>
                    <td width="280">Pengguna Barang/Jasa ..............................</td>
                </tr>
                <tr>
                    <td width="25"> </td>
                    <td width="260">Pejabat Pembuat Komitmen</td>
                    <td width="8"> </td>
                    <td width="280"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="25" >2.</td>
                    <td width="260">ADI KURNIAWAN.S.Kom.,M.Kom</td>
                    <td>:</td>
                    <td width="280">Pejabat Pengadaan Barang/Jasa ............</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="25">3.</td>
                    <td width="260">MANUHUTU ARMAND FX</td>
                    <td>:</td>
                    <td width="280">Penyedia Barang/Jasa ................................</td>
                </tr>
                <tr>
                    <td width="25"> </td>
                    <td width="260">CV. PATRIA NUGRAHA</td>
                    <td width="8"> </td>
                    <td width="280"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        {{-- <a type="submit" class="btn btn-primary " href="{{ url('/print_notadinas4')  }}">Cetak PDF <i class="fa fa-save"></i></a> --}}
    </div>
</div>

@endsection
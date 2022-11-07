@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
@section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
<!-- @section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection -->

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
        <div class="card-body">
            <table border="0" align="center">
                <tr>
                    <td>
                        <center><font size="3"><b>PAKTA INTEGRITAS</b></font><br>
                    </td>
                </tr>
                {{--  <tr>
                    <td width="555" colspan="2"><hr></td>
                </tr>  --}}
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Saya yang bertandatangan di bawah ini, dalam rangka pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer keperluan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur pada Satuan Kerja Perangkat Daerah Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Tahun Anggaran 2022, dengan ini menyatakan bahwa saya :</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">1.</td>
                    <td width="535">Tidak akan melakukan praktek KKN.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">2.</td>
                    <td width="535">Akan melaporkan kepada pihak yang berwajib/berwenang apabila</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30"> </td>
                    <td width="535">mengetahui ada indikasi KKN di dalam proses pengadaan ini.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">3.</td>
                    <td width="535">Dalam proses pengadaan ini, berjanji akan melaksanakan tugas secara</td>
                </tr>
            </table>
            	<table border="0" align="center" font-size="2">
                <tr>
                    <td width="30"> </td>
                    <td width="535">bersih, transparan, dan profesional dalam arti akan mengerahkan segala</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30"> </td>
                    <td width="535">kemampuan dan sumber daya secara optimal untuk memberikan hasil</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30"> </td>
                    <td width="535">kerja terbaik mulai dari penyiapan penawaran, pelaksanaan, dan</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30"> </td>
                    <td width="535">penyelesaian pekerjaan/kegiatan ini.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30">4.</td>
                    <td width="535">Apabila saya melanggar hal-hal yang telah saya nyatakan dalam PAKTA</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30"> </td>
                    <td width="535">INTEGRITAS ini, saya bersedia dikenakan sanksi moral, sanksi administrasi</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30"> </td>
                    <td width="535">serta dituntut ganti rugi dan pidana sesuai dengan ketentuan peraturan</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30"> </td>
                    <td width="535">perundang-undangan yang berlaku.</td>
                </tr>
            </table>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>Surabaya, 16 Agustus 2022</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="25">1.</td>
                    <td width="260">I WAYAN RUDY ARTHA, S.Kom</td>
                    <td>:</td>
                    <td width="280">Pengguna Barang/Jasa ............</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="25"> </td>
                    <td width="260">Pejabat Pembuat Komitmen</td>
                    <td width="8"> </td>
                    <td width="280"> </td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="25">2.</td>
                    <td width="260">ADI KURNIAWAN.S.Kom.,M.Kom</td>
                    <td>:</td>
                    <td width="280">Pejabat Pengadaan Barang/Jasa ...........</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="25">3.</td>
                    <td width="260">MANUHUTU ARMAND FX</td>
                    <td>:</td>
                    <td width="280">Penyedia Barang/Jasa ..........</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="25"> </td>
                    <td width="260">CV. PATRIA NUGRAHA</td>
                    <td width="8"> </td>
                    <td width="280"> </td>
                </tr>
            </table>
            
        </div>
    </div>
</div>

@endsection
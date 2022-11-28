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
    <div >
        <table border="0" align="center">
            <tr>
                <td width="100">DAFTAR</td>
                <td>:</td>
                <td width="560">Evaluasi Dokumen Prakualifikasi</td>
            <tr>
            <tr>
                <td width="100">PEKERJAAN</td>
                <td width="30">:</td>
                <td width="430">{{$pengadaan1->pengadaan->jenis_pengadaan}}</td>
            <tr>
            <tr>
                <td width="100">KEPERLUAN</td>
                <td width="30">:</td>
                <td width="430">Dinas Komunikasi Dan Informatika Profinsi Jawa Timur</td>
            <tr>
            <tr>
                <td width="100">Tanggal</td>
                <td width="30">:</td>
                <td width="430">{{$pengadaan1->tanggal}}</td>
            <tr>
        </table>
    </div>
    <br>
    <div>
        <table style="text-align: center" border="1" font-size="0">
            <tr>
                <td rowspan="3" > NO </td>
                <td rowspan="3" > Nama Perusahaan </td>
                <td rowspan="3" > Surat Pernyataan Minat </td>
                <td rowspan="3" > Pakta Integritas </td>
                <td colspan="8" > Formulir Isian Penilaian Kualifikasi </td>
                <td rowspan="3" > Keterangan </td>
            </tr>
            <tr>
                <td rowspan="2" > Data Administras </td>
                <td rowspan="2" > Ijin Usaha </td>
                <td rowspan="2" > Landasan Hukum Pendirian BU </td>
                <td rowspan="2" > Pengurus </td>
                <td colspan="4"> P a j a k </td>
            </tr>
            <tr>
                <td> NPWP dan PKP </td>
                <td> Bukti Pelunasan Pajak Tahun Terakhir </td>
                <td> Laporan Bulanan PPh/PPN 3 Bulan Terakhir </td>
                <td> Data Pengalaman Kerja </td>
            </tr>
            <tr>
                <td> 1 </td>
                <td> 2 </td>
                <td> 3 </td>
                <td> 4 </td>
                <td> 5 </td>
                <td> 6 </td>
                <td> 7 </td>
                <td> 8 </td>
                <td> 9 </td>
                <td> 10 </td>
                <td> 11 </td>
                <td> 12 </td>
                <td> 13 </td>
            </tr>
            <tr>
                <td rowspan="2" > 1 </td>
                <td rowspan="2" > {{$pengadaan1->pengadaan->pelaksana->pt_pelaksana}} </td>
                <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                <td rowspan="2" > LULUS </td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <td><b><u>Keterangan</u></b></td>
                <td><b>:</b></td>
            </tr>
            <tr>
                <td><a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a></td>
                <td>.............</td>
                <td>Persyaratan dipenuhi</td>
            </tr>
            <tr>
                <td><a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/3JTQq0gH/minus.jpg' width="50" height="30" border='0' alt='minus'/></a></td>
                <td>.............</td>
                <td>Persyaratan belum dipenuhi</td>
            </tr>
        </table>
    </div>
    <br>
    <div >
        <table style="text-align: center;" border="0" font-size="0">
            <tr>
                <td width="400"> </td>
                <td style="text-indent: 45px;">PEJABAT PENGADAAN</td>
                {{-- <td width="50"> </td> --}}
            </tr>    
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td width="400"> </td>
                <td width="250" style="text-indent: 45px;">ADI KURNIAWAN.S.Kom.,M.Kom</td>
                {{-- <td width="50"> </td> --}}
            </tr>
            <tr>
                <td width="450"> </td>
                <td style="text-indent: 45px;">NIP. 19890618 201403 1 002</td>
                {{-- <td width="50"> </td> --}}
            </tr>
        </table> 
    </div>
</div>

@endsection
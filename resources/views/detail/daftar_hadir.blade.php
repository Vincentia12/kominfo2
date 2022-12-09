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

<div class="grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <center>
                <font size="3"><b>PEJABAT PENGADAAN BARANG/JASA DILINGKUNGAN</b></font><br>
                <font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</b></font><br>
                <font size="3"><b>PROVINSI JAWA TIMUR</b></font><br>
            </center>
            <hr width="650" colspan="3">
            <br>
            <br>
            {{-- <table border="1" align="center">
                <tr>
                    <td> --}}
                        <center>
                            <font size="3"><b>DAFTAR HADIR</b></font><br><br>
                            <font size="3"><b>PENGEMBALIAN DOKUMEN PRAKUALIFIKASI</b></font><br>
                            <font size="2"><b>{{$pengadaan->pengadaan->jenis_pengadaan}}</b></font><br>
                            <!-- <font size="2"><b>Statistik Sektoral Toner Printer</b></font><br> -->
                        </center>
                    {{-- </td>
                </tr>
            </table> --}}
            <br>
            <br>
            <table width="685" border="1" align="center" >
                <thead style="background-color: lightgrey;">
                    <tr align="center">
                        <th width="30px" scope="col">No</th>
                        <th width="121" scope="col">Nama Perusahaan</th>
                        <th width="160" scope="col">Alamat dan No.Telepon</th>
                        <th width="121" scope="col">Tanggal</th>
                        <th width="111" scope="col">Tanda Tangan</th>
                    </tr>
                    <tr align="center">
                        <th scope="col">1</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                        <th scope="col">4</th>
                        <th scope="col">5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td height="15"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr height="100">
                        <td >1</td>
                        <td>{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                        <td>{{$pengadaan->pengadaan->pelaksana->alamat}}</td>
                        <td>{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td height="15"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
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
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>PEJABAT PENGADAAN</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>ADI KURNIAWAN.S.Kom.,M.Kom</td>
                    <td width="50"> </td>
                </tr>
                <tr>
                    <td width="300"> </td>
                    <td>NIP. 19890618 201403 1 002</td>
                    <td width="50"> </td>
                </tr>
            </table>
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
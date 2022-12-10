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

<div class="col-21 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body ">
            <div >
                <table border="0">
                    <tr>
                        <td width="20"></td>
                        <td width="150">DAFTAR</td>
                        <td>:</td>
                        <td width="560">Evaluasi Dokumen Prakualifikasi</td>
                    <tr>
                    <tr>
                        <td width="20"></td>
                        <td width="100">PEKERJAAN</td>
                        <td width="30">:</td>
                        <td width="430">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                    <tr>
                    <tr>
                        <td width="20"></td>
                        <td width="100">KEPERLUAN</td>
                        <td width="30">:</td>
                        <td width="430">Dinas Komunikasi Dan Informatika Profinsi Jawa Timur</td>
                    <tr>
                    <tr>
                        <td width="20"></td>
                        <td width="100">Tanggal</td>
                        <td width="30">:</td>
                        <td width="430">{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                    <tr>
                </table>
            </div>
            <br>
            <div>
            {{-- <div class="table-responsive"> --}}
                {{-- <table class="table table-bordered" style="width:100%; text-align: center" border="1" font-size="0"> --}}
                <table style="width:100%; text-align: center" border="1" font-size="0">
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
                        <td colspan="4" > P a j a k </td>
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
                        <td rowspan="2" > {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}} </td>
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
            <br>
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
            @php
            use App\Models\pejabat;
            $pejabat = Pejabat::all();
            @endphp
            <br><br><br>
            <div style="text-align: center">
                <table border="0" >
                    <tr>
                        <td width="600"></td>
                        <td width="600" style="text-align:center ">PEJABAT PENGADAAN</td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <br>
                <table style="text-align:center;">
                    @foreach ($pejabat as $pjb)
                    <tr>
                        <td width="600"></td>
                        <td width="600" style="text-align: center">
                            <!-- <u> Dra. Ec. NIRMALA DEWI, M.M</u> -->
                            <u> {{$pjb->pejabat_pengadaan}}</u>
                            <br>
                            NIP. {{$pjb->nip_pejabat_pengadaan}}
        
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
    </div>
</div>

@endsection
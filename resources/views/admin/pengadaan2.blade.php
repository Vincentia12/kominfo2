@extends('layouts/index')

@section('content')
{{-- @section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
@section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection --}}

<div class="row">
    {{-- <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel 1 juta - 10 juta</h4>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
</div>
@endif
{{-- <p class="card-description">
                Add class <code>.table-bordered</code>
                </p> --}}
<!-- {{-- <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> First name </th>
                            <th> Progress </th>
                            <th> Amount </th>
                            <th> Deadline </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>  --}} -->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card shadow">
        <!-- {{-- <div class="card shadow mb-3 "> --}}
            {{-- <div class="card-header py-2 "style="background-color: #40B9CB;">
                <h6 class="m-0 font-weight-bold text-white text-center">Tabel Data Aset</h6>
            </div> --}} -->
        <div class="card-body">
            <h3>Data Pengadaan <i class="fa-solid fa-greater-than "></i> 50 juta</h3>
            <br>
            <div class="form-group w-100 mb-9 mx-sm-1">
                <form class="form" method="get" action="{{ route('cari2') }}">
                    <select class="form-control w-auto mb-6 d-inline" name="cari1" id="cari1">
                        {{-- <option value="{{$pengadaan->pengadaan_id}}">{{$pengadaan->jenis_pengadaan}}</option> --}}
                            
                        <option value=""> Pilih Pengadaan </option>
                        <option value="">   </option>
                        @foreach ($pilihan as $pilih)
                            <option value="{{$pilih->id}}"><b>{{$pilih->pt_pelaksana}}</b> Pengadaan <b>{{ $pilih->jenis_pengadaan }}</b></option>
                            {{-- <option value="{{$pilih->id}}">{{$pilih->id}}</option> --}}
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                </div>
            </form>
            <div class="table-responsive">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <table class="table table-bordered" id="" style="width:100%">
                    <thead>
                        <tr>
                            <th>Pelaksana</th>
                            <th>Pengadaan</th>
                            <th>Nilai Negosiasi</th>
                            <th>Kegiatan</th>
                            <th>Alokasi</th>
                            <th>Hari</th>
                            <th>Tanggal</th>
                            <th>Nomor</th>
                            <th>Deskripsi Tanggal</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengadaan as $p2)
                        <tr>
                            <td>{{ $p2->pt_pelaksana }}</td>
                            <td>{{ $p2->jenis_pengadaan }}</td>
                            <td>{{ $p2->nilai_negosiasi }}</td>
                            <td>{{ $p2->kegiatan }}</td>
                            <td>{{ $p2->alokasi }}</td>
                            <td>{{ $p2->tanggal }}</td>
                            <td>{{ $p2->tanggal }}</td>
                            <td>{{ $p2->nomor }}</td>
                            <td>{{ $p2->deskripsi_tgl }}</td>
                            <td>
                                @if ($p2->kegiatan == 'Nota Dinas dari KPA ke PPK')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show1',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger" href="{{route('pengadaan2.print1',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Nota Dinas dari PPK ke Pejabat Pengadaan + Lampiran OE (HPS)')
                                <!-- {{-- <a class="btn btn-info" href="{{ route('show1',$p2->id) }}">Detail</a> --}} -->
                                <a class="btn btn-info" href="{{ route('pengadaan2.show2',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger" href="{{route('pengadaan2.print2',$p2->id)}}">Print</a>
                                <!-- {{-- <a class="btn btn-info" name="show1">Detail</a> --}} -->
                                <!-- {{-- url('/print_notadinas1') --}} -->
                                @elseif($p2->kegiatan == 'Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa')
                                <!-- {{-- <a class="btn btn-info" href="{{ route('show1',$p2->id) }}">Detail</a> --}} -->
                                <a class="btn btn-info" href="{{ route('pengadaan2.show3',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print3',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Pakta Integritas')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show4',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print4',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Surat Pernyataan Minat')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show5',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'Pemasukan Dokumen Kualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show6',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'Daftar Hadir Pengembalian Dokumen Prakualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show7',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print7',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'BA. Evaluasi Dokumen Prakualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show8',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print8',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Lampiran BA. Evaluasi Dokumen Prakualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show9',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print9',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Surat Undangan Permintaan Penawaran Harga')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show10',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print10',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'BA. Penjelasan Pekerjaan')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show11',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print11',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Pemasukan Penawaran')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show12',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'BA. Pembukaan Penawaran')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show13',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print13',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Surat Undangan Klarifikasi/Negosiasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show14',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print14',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'BA. Klarifikasi/Negosiasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show15',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print15',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Lampiran BA. Klarifikasi/Negosiasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show16',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'BA. Hasil Pengadaan Langsung')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show17',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'Nota Dinas dari Pejabat Pengadaan ke PPK')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show18',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print18',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Penetapan Penyedia Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show19',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print19',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Penunjukan Penyedia Barang/Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show20',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print20',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Surat Perintah Kerja')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show21',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print21',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'Surat Perintah Mulai Kerja (SPMK)')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show22',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print22',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'BA. Serah Terima Hasil Pekerjaan')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show23',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print23',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'BA. Penyerahan Barang/Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show24',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print24',$p2->id)}}">Print</a>

                                @elseif($p2->kegiatan == 'BA. Hasil Pemeriksaan Administratif')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show25',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'BA. Hasil Pembayaran')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show26',$p2->id) }}">Detail</a>
                                <!-- {{-- <a class="btn btn-info" name="show1">Detail</a> --}} -->
                                <!-- {{-- url('/print_notadinas1') --}} -->
                                @else
                                You don't have a post!
                                @endif
                            </td>
                            {{-- <td>{{ ++$i }}</td> --}}
                            {{-- <td>{{ $p2->jenis_pengadaan}}</td>
                            <td>{{ $p2->pt_pelaksana }}</td>
                            <td>{{ $p2->nilai_negosiasi }}</td> --}}
                            {{-- <td>{{ $aset->alamat_aset }}</td>
                            <td>{{ $aset->status_aset }}</td> --}}

                            {{-- <td>{{ $aset->keterangan_aset }}</td> --}}
                            {{-- <td> --}}

                            {{-- <form action="{{ route('pengadaan.destroy1',$p2->id) }}" method="POST"> --}}

                            {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetailPengadaan2{{$p2->id}}">
                            Detail
                            </button> --}}
                            {{-- <a class="btn btn-info" href="{{ route('pengadaan.show',$pengadaan->id) }}">Detail</a>
                            <a class="btn btn-primary" href="{{ route('pengadaan.edit',$pengadaan->id) }}">Edit</a> --}}
                            @csrf
                            @method('DELETE')

                            {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                            {{-- </form> --}}
                            {{-- </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>
</div>
</div>



@endsection
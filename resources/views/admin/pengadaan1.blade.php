@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')

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
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <h3>Data Pengadaan <i class="fa-solid fa-less-than-equal "></i> 50 juta</h3>
                <br>
                <!-- <form class="form" method="get" action="{{ route('cari1') }}">
                    <div class="form-group w-100 mb-9 mx-sm-3">
                        <label for="cari" class="d-block mr-2 ">Pencarian</label>
                        {{-- <input type="text" name="cari" class="form-control w-75 d-inline" id="cari" placeholder="Masukkan keyword"> --}}
                        <select class="form-control w-25 mb-4 d-inline" name="cari1" id="cari1">
                            <option> Pilih Pengadaan </option>
                            {{-- @foreach ($pengadaan1 as $pd1)
                                <option value="{{$pd1->pengadaan_id}}">{{ $pd1->jenis_pengadaan }}</option>
                                @endforeach --}}
                            </select>
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        </div>
                    </form> -->
                    {{-- <div class="row"> --}}
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    {{-- <div class="mb-4"> --}}
                        {{-- <table id="datatable1" class="table table-bordered" style="width:100%"> --}}
                            {{-- <table id="data1" class="table table-bordered" cellspacing="0"> --}}
                            <table id="datatable1" class="table table-bordered" cellspacing="0">
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
                                    {{-- <th>NO</th> --}}
                                    {{-- <th>Id Pengadaan</th> --}}

                                    {{-- <th>Kegiatan</th> --}}
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @if(count($pengadaan)<=50) --}}
                                @foreach ($pengadaan as $p1)
                                {{-- @foreach ($jadwal1 as $jd1) --}}
                                <tr>
                                    <td>{{ $p1->pt_pelaksana }}</td>
                                    <td>{{ $p1->jenis_pengadaan }}</td>
                                    <td>{{ $p1->nilai_negosiasi }}</td>
                                    <td>{{ $p1->kegiatan }}</td>
                                    <td>{{ $p1->alokasi }}</td>
                                    <td>{{ $p1->hari }}</td>
                                    <td>{{ $p1->tanggal }}</td>
                                    <td>{{ $p1->nomor }}</td>
                                    <td>{{ $p1->deskripsi_tgl }}</td>
                                    <td>
                                        @if ($p1->kegiatan == 'Nota Dinas dari KPA ke PPK')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show1',$p1->id) }}">Detail</a>
                                        {{-- <a class="btn btn-info" href="pengadaan1/notadinas1/">Print</a> --}}
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print1',$p1->id)}}">Print</a>
                                        {{-- <a class="btn btn-info" href="{{ route('show',$p1->id) }}">Detail</a> --}}
                                        @elseif($p1->kegiatan == 'Nota Dinas dari PPK ke Pejabat Pengadaan + Lampiran OE (HPS)')
                                        <!-- {{-- <a class="btn btn-info" href="{{ route('show1',$p1->id) }}">Detail</a> --}} -->
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show2',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger" href="{{route('pengadaan1.print2',$p1->id)}}">Print</a>
                                        <!-- {{-- <a class="btn btn-info" name="show1">Detail</a> --}} -->
                                        <!-- {{-- url('/print_notadinas1') --}} -->
                                        @elseif($p1->kegiatan == 'Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa')
                                        <!-- {{-- <a class="btn btn-info" href="{{ route('show1',$p1->id) }}">Detail</a> --}} -->
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show3',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print3',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'PAKTA INTEGRITAS')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show4',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print4',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'Surat Pernyataan Minat')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show5',$p1->id) }}">Detail</a>

                                        @elseif($p1->kegiatan == 'Pemasukan Dokumen Kualifikasi')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show6',$p1->id) }}">Detail</a>

                                        @elseif($p1->kegiatan == 'Daftar Hadir Pengembalian Dokumen Prakualifikasi')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show7',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print7',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'BA. Evaluasi Dokumen Prakualifikasi')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show8',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print8',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'Lampiran BA. Evaluasi Dokumen Prakualifikasi')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show9',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print9',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'Surat Undangan Permintaan Penawaran Harga')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show10',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print10',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'BA. Penjelasan Pekerjaan')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show11',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print11',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'Pemasukan Penawaran')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show12',$p1->id) }}">Detail</a>

                                        @elseif($p1->kegiatan == 'BA. Pembukaan Penawaran')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show13',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print13',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'Surat Undangan Klarifikasi/Negosiasi')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show14',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print14',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'BA. Klarifikasi/Negosiasi')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show15',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print15',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'Lampiran BA. Klarifikasi/Negosiasi')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show16',$p1->id) }}">Detail</a>

                                        @elseif($p1->kegiatan == 'BA. Hasil Pengadaan Langsung')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show17',$p1->id) }}">Detail</a>

                                        @elseif($p1->kegiatan == 'Nota Dinas dari Pejabat Pengadaan ke PPK')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show18',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print18',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'Penetapan Penyedia Jasa')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show19',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print19',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'Penunjukan Penyedia Barang/Jasa')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show20',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print20',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'Surat Perintah Kerja')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show21',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print21',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'Surat Perintah Mulai Kerja (SPMK)')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show22',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print22',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'BA. Serah Terima Hasil Pekerjaan')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show23',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print23',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'BA. Penyerahan Barang/Jasa')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show24',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print24',$p1->id)}}">Print</a>

                                        @elseif($p1->kegiatan == 'BA. Hasil Pemeriksaan Administratif')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show25',$p1->id) }}">Detail</a>

                                        @elseif($p1->kegiatan == 'BA. Hasil Pembayaran')
                                        <a class="btn btn-info" href="{{ route('pengadaan1.show26',$p1->id) }}">Detail</a>
                                        <a class="btn btn-danger " href="{{route('pengadaan1.print26',$p1->id)}}">Print</a>
                                        <!-- {{-- <a class="btn btn-info" name="show1">Detail</a> --}} -->
                                        <!-- {{-- url('/print_notadinas1') --}} -->
                                        @else
                                        You don't have a post!
                                        @endif
                                        {{-- <a href="#" value="{{ action() }}" class="btn btn-xs btn-info modalMd" title="Show Data" data-toggle="modal" data-target="#modalMd"><span class="glyphicon glyphicon-eye-open"></span></a> --}}
                                        {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetailPengadaan1-{{$jd1->pengadaan_id}}"> --}}
                                        {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalprint-{{$p1->id}}">
                                        print
                                        </button> --}}
                                        <!-- {{-- <a class="btn btn-info" href="{{ route('pengadaan1.show',$p1->id) }}">Detail</a> --}} -->
                                        <!-- {{-- <a class="btn btn-primary" href="{{ route('pengadaan.edit',$pengadaan->id) }}">Edit</a> --}} -->
                                        @csrf
                                        @method('DELETE')

                                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                                        {{-- </form> --}}
                                    </td>
                                </tr>
                                @endforeach
                                {{-- @endif --}}
                            </tbody>
                        </table>
                    {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>

    @endsection

    <script>
        $(document).ready(function() {
        // DataTable initialisation
        $('#datatable1').DataTable({
            "paging": true,
            "autoWidth": true,
            "columnDefs": [
            {
                "targets": 3,
                "render": function(data, type, full, meta) {
                var cellText = $(data).text(); //Stripping html tags !!!
                if (type === 'display' &&  (cellText == "Done" || data=='Done')) {
                    var rowIndex = meta.row+1;
                    var colIndex = meta.col+1;
                    $('#example tbody tr:nth-child('+rowIndex+')').addClass('lightRed');
                    $('#example tbody tr:nth-child('+rowIndex+') td:nth-child('+colIndex+')').addClass('red');
                    return data;
                } else {
                    return data;
                }
                }
            }
            ]
        });
        });
      </script>
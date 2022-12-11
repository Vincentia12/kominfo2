@extends('layouts/index')

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

                {{-- <table class="table table-bordered" id="data1" style="width:100%"> --}}
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
                            <td>RP. {{number_format( $p2->nilai_negosiasi) }}</td>
                            <td>{{ $p2->kegiatan }}</td>
                            <td>{{ $p2->alokasi }}</td>
                            <td>{{ date('l', strtotime($p2->tanggal)) }}</td>
                            <td>{{ date('d F Y', strtotime($p2->tanggal)) }}</td>
                            {{-- <td>{{ $p2->nomor }}</td> --}}
                            <td>020/{{$p2->nomor}}/114.6/{{date('Y', strtotime($p2->tanggal))}}</td>
                            <td>{{ $p2->deskripsi_tgl }}</td>
                            <td>
                                @if ($p2->kegiatan == 'Nota Dinas dari KPA ke PPK')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show1',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger" href="{{route('pengadaan2.print1',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Nota Dinas dari PPK ke Pejabat Pengadaan + Lampiran OE (HPS)')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show2',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger" href="{{route('pengadaan2.print2',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show3',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print3',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Pakta Integritas')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show4',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print4',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Surat Pernyataan Minat')
                                <P>Surat Pernyataan Minat Dari Pelaksana</P>
                                {{-- <a class="btn btn-info" href="{{ route('pengadaan2.show5',$p2->id) }}">Detail</a> --}}

                                @elseif($p2->kegiatan == 'Pemasukan Dokumen Kualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show6',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'Daftar Hadir Pengembalian Dokumen Prakualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show7',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print7',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'BA. Evaluasi Dokumen Prakualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show8',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print8',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Lampiran BA. Evaluasi Dokumen Prakualifikasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show9',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print9',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Surat Undangan Permintaan Penawaran Harga')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show10',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print10',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'BA. Penjelasan Pekerjaan')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show11',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print11',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Pemasukan Penawaran')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show12',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'BA. Pembukaan Penawaran')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show13',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print13',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Surat Undangan Klarifikasi/Negosiasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show14',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print14',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'BA. Klarifikasi/Negosiasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show15',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print15',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Lampiran BA. Klarifikasi/Negosiasi')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show16',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'BA. Hasil Pengadaan Langsung')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show17',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'Nota Dinas dari Pejabat Pengadaan ke PPK')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show18',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print18',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Penetapan Penyedia Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show19',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print19',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Penunjukan Penyedia Barang/Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show20',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print20',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Surat Perintah Kerja')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show21',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print21',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'Surat Perintah Mulai Kerja (SPMK)')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show22',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print22',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'BA. Serah Terima Hasil Pekerjaan')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show23',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print23',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'BA. Penyerahan Barang/Jasa')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show24',$p2->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('pengadaan2.print24',$p2->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                                @elseif($p2->kegiatan == 'BA. Hasil Pemeriksaan Administratif')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show25',$p2->id) }}">Detail</a>

                                @elseif($p2->kegiatan == 'BA. Hasil Pembayaran')
                                <a class="btn btn-info" href="{{ route('pengadaan2.show26',$p2->id) }}">Detail</a>

                                @else
                                You don't have a post!
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>
</div>
{{-- </div> --}}



@endsection
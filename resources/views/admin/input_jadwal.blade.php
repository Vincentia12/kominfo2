@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
@section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
@section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection

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

<!-- Tabel Jadwal -->
<div class="stretch-card">
  <div class="card shadow">
    <div class="card-body">
      <div class="table-responsive">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
        @endif
        <br>
        <div class="row ">
          <div class="col-md-8 mb-4">
            <div class="justify-content-between ">
              <h2 class="col-10">Data Masukan Jadwal</h2>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="text-right ">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalJadwal">
                Tambah Data Jadwal
              </button>
            </div>
          </div>
        </div>
        <br>

        <table id="data1" class="table table-bordered" cellspacing="0">
          <thead>
            <tr>
              <th>Jenis Pengadaan</th>
              <th>Kegiatan/th</th>
              <th>Alokasi</th>
              <th>Hari</th>
              <th>Tanggal</th>
              <th>Nomor</th>
              <th>Deskripsi Tanggal</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($jadwal as $list)
            <tr>
              <td>{{ $list->jenis_pengadaan }}</td>
              <td>{{ $list->kegiatan }}</td>
              <td>{{ $list->alokasi }}</td>
              <td>{{ $list->hari }}</td>
              <td>{{ $list->tanggal }}</td>
              <td>{{ $list->nomor }}</td>
              <td>{{ $list->deskripsi_tgl }}</td>

              <td>

                <form action="{{ route('jadwal.destroy',$list->id) }}" method="POST">
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalDetailJadwal{{$list->id}}">
                    Detail
                  </button>

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditJadwal{{$list->id}}">
                    Edit
                  </button>

                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-lg">
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <br>
      <a href="/input_jadwal" class="btn btn-light">Kembali</a>
      <a href="#" type="submit" class="btn btn-primary mr-2">Selesai</a>
    </div>
  </div>
</div>

<!-- Modal Tambah Jadwal  -->
<div class="modal fade" id="modalJadwal" tabindex="-1" role="dialog" aria-labelledby="modalJadwalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Data Masukan Jadwal</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @csrf
        @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
        @endif
        <form method="POST" action="postjadwal" id="postjadwal">
          @csrf
          <div class="mb-4">
            <label for="recipient-name" class="col-form-label">Jenis Pengadaan</label>
            <select class="form-control" name="pengadaan_id" id="pengadaan_id" placeholder="Pilih Pengadaan">
              <option value="">Pilih Jenis Pengadaan</option>
              @foreach ($pengadaan as $item)
              <option value="{{$item->id}}">{{ $item->jenis_pengadaan }}</option>
              @endforeach
            </select>
            <small class="text-danger">{{ $errors->first('jenis_pengadaan') }}</small>
          </div>
          <div class="mb-4">
            <label for="exampleInputName1" class="col-sm-3 col-form-label">Kegiatan</label>
              <div class="col-sm-9">
                <select class="form-control" name="kegiatan">
                  <option>Pilih Pengadaan</option>
                  <option>Nota Dinas dari KPA ke PPK</option>
                  <option>Nota Dinas dari PPK ke Pejabat Pengadaan + </option>
                  {{--  <option>Lampiran OE (HPS)</option>  --}}
                  <option>Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa</option>
                  {{--  <option>PAKTA  INTEGRITAS</option>
                  <option>Surat Pernyataan Minat</option>
                  <option>Pemasukan Dokumen Kualifikasi</option>
                  <option>Daftar Hadir Pengembalian Dokumen Prakualifikasi</option>  --}}
                  <option>BA. Evaluasi Dokumen Prakualifikasi</option>
                  {{--  <option>Lampiran BA. Evaluasi Dokumen Prakualifikasi</option>  --}}
                  <option>Surat Undangan Permintaan Penawaran Harga</option>
                  <option>BA. Penjelasan Pekerjaan</option>
                  {{--  <option>Pemasukan Penawaran</option>  --}}
                  <option>BA. Pembukaan Penawaran</option>
                  <option>Surat Undangan Klarifikasi/Negosiasi</option>
                  <option>BA. Klarifikasi/Negosiasi</option>
                  {{--  <option>Lampiran BA. Klarifikasi/Negosiasi</option>  --}}
                  <option>BA. Hasil Pengadaan Langsung</option>
                  <option>Nota Dinas dari Pejabat Pengadaan ke PPK</option>
                  {{--  <option>Penetapan Penyedia Jasa</option>  --}}
                  <option>Penunjukan Penyedia Barang/Jasa</option>
                  <option>Surat Perintah Kerja</option>
                  <option>Surat Perintah Mulai Kerja (SPMK)</option>
                  <option>BA. Serah Terima Hasil Pekerjaan</option>
                  <option>BA. Penyerahan Barang/Jasa</option>
                  <option>BA. Hasil Pemeriksaan Administratif</option>
                  <option>BA. Hasil Pembayaran</option>
                </select>
              </div>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Alokasi</label>
            <input type="number" class="form-control" id="alokasi" name="alokasi" placeholder="Alokasi Waktu">
            <small class="text-danger">{{ $errors->first('alokasi') }}</small>
          </div>

          <div class="mb-4">
            <label for="message-text" class="col-form-label">Hari</label>
            <input type="text" class="form-control" id="hari" name="hari" placeholder="Senin">
            <small class="text-danger">{{ $errors->first('hari') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="10/10/2022">
            <small class="text-danger">{{ $errors->first('tanggal') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Nomor</label>
            <input type="text" class="form-control" id="nomor" name="nomor" placeholder="belum tau">
            <small class="text-danger">{{ $errors->first('nomor') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Deskripsi Tanggal</label>
            <input type="text" class="form-control" id="deskripsi_tgl" name="deskripsi_tgl" placeholder="Delapan Agustus Dua Ribu Dua Puluh Dua">
            <small class="text-danger">{{ $errors->first('deskripsi_tgl') }}</small>
          </div>
          <div class="modal-footer mt-3">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary ">Simpan <i class="fa fa-save"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Jadwal -->
@foreach ( $jadwal as $jdwl )
<div class="modal fade" id="modalEditJadwal{{$jdwl->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditJadwalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Edit Data Pengadaan</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @csrf
        @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
        @endif
        <form method="POST" action="{{ url('jadwal/update', $jdwl->id) }}">
          @csrf
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Jenis Pengadaan</label>

            <select class="form-control" name="pengadaan_id">
              <option value="{{$jdwl->pengadaan_id}}">{{ $jdwl->jenis_pengadaan }} </option>
              <option><br></option>

              <option value="">Pilih Jenis Pengadaan</option>
              @foreach ($pengadaan as $item)
              <option value="{{$item->id}}">-{{ $item->jenis_pengadaan }} </option>
              @endforeach
            </select>
            <small class="text-danger">{{ $errors->first('jenis_pengadaan') }}</small>

          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Kegiatan/th</label>
            <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="{{ $jdwl->kegiatan }}" placeholder="Pengadaan ...">
            <small class="text-danger">{{ $errors->first('kegiatan') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Alokasi</label>
            <input type="text" class="form-control" id="alokasi" name="alokasi" value="{{ $jdwl->alokasi }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('alokasi') }}</small>
          </div>

          <div class="mb-4">
            <label for="message-text" class="col-form-label">Hari</label>
            <input type="text" class="form-control" id="hari" name="hari" value="{{ $jdwl->hari }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('hari') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $jdwl->tanggal }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('tanggal') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Nomor</label>
            <input type="text" class="form-control" id="nomor" name="nomor" value="{{ $jdwl->nomor }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('nomor') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Deskripsi Tanggal</label>
            <input type="text" class="form-control" id="deskripsi_tgl" name="deskripsi_tgl" value="{{ $jdwl->deskripsi_tgl }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('deskripsi_tgl') }}</small>
          </div>
          <div class="modal-footer mt-3">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary ">Simpan <i class="fa fa-save"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

<!-- Modal Detail Jadwal -->
@foreach ( $jadwal as $jd )
<div class="modal fade" id="modalDetailJadwal{{$jd->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditJadwalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Detail Data Jadwal</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @csrf
        @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
        @endif
        <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
          {{-- <div class="col-xs-12 col-sm-12 col-md-12"> --}}
          <div class="mb-4">
            <div class="form-group">
              <tr>
                <td>Jenis Pengadaan</td>
                <td>:</td>
                <td>{{ $jd->jenis_pengadaan }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Kegiatan/th</td>
                <td>:</td>
                <td>{{ $jd->kegiatan }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Alokasi</td>
                <td>:</td>
                <td>{{ $jd->alokasi }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Hari</td>
                <td>:</td>
                <td>{{ $jd->hari }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ $jd->tanggal }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Nomor</td>
                <td>:</td>
                <td>{{ $jd->nomor }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Deskripsi Tanggal</td>
                <td>:</td>
                <td>{{ $jd->deskripsi_tgl }}</td>
              </tr>
            </div>
          </div>
        </table>
      </div>
      <div class="modal-footer mt-3">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
@endforeach



@endsection
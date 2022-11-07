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

<div class="col-12 grid-margin stretch-card">
  <div class="card shadow">
    <div class="card-body">
      <h4 class="card-title">Data Masukan Jadwal</h4>

      <form action="postjadwal" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group row">

              <label for="exampleInputName1" class="col-sm-3 col-form-label">jenis pengadaan</label>
              <div class="col-sm-9">
                <select class="form-control" name="pengadaan_id">
                  <option> Pilih Pengadaan </option>
                  @foreach ($pengadaan as $item)
                  <option value="{{$item->id}}">{{ $item->jenis_pengadaan }}</option>
                  @endforeach
                </select>
              </div>

              <label class="col-sm-3 col-form-label">Nomor</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nomor">
              </div>

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

              <label class="col-sm-3 col-form-label">Alokasi</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="alokasi">
              </div>

              <label class="col-sm-3 col-form-label">Hari </label>
              <div class="col-sm-9">
                <select class="form-control" name="hari">
                  <option> Pilih Hari </option>
                  <option> Senin </option>
                  <option> Selasa </option>
                  <option> Rabu</option>
                  <option> Kamis </option>
                  <option> Jumat</option>
                </select>
              </div>

              <label class="col-sm-3 col-form-label">Tanggal </label>
              <div class="col-sm-9">
                <input class="form-control" type="date" name="tanggal" placeholder="dd/mm/yyyy" />
              </div>

              <label class="col-sm-3 col-form-label">Deskripsi Tanggal</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="deskripsi_tgl">
              </div>

            </div>
          </div>
        </div>
        <a href="/input_pengadaan" class="btn btn-light">Kembali</a>
        <button type="submit" class="btn btn-primary mr-2">Selanjutnya</button>
        <a href="/input_barang" class="btn btn-light">NEXT</a>
      </form>
    </div>
  </div>
</div>

@endsection
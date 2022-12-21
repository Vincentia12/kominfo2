@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
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



{{-- Tabel Pengadaan --}}
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
              <h2 class="col-10">Data Masukan Pengadaan</h2>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="text-right ">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPengadaan">
                Tambah Data Pengadaan
              </button>
            </div>
          </div>
        </div>
        <br>

        <table id="data1" class="table table-bordered" cellspacing="0">
          <thead>
            <tr>
              <th>Pelaksana/Nama Perusahaan</th>
              <th>Jenis Pengadaan</th>
              <th>Nilai Negosiasi</th>
              <th> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pengadaan as $p)
            <tr>
              <td>{{ $p->pelaksana->pt_pelaksana }}</td>
              <td>{{ $p->jenis_pengadaan }}</td>
              <td>Rp. {{number_format($p->nilai_negosiasi)}}</td>
              <td>

                <form action="{{ route('pengadaan.destroy',$p->id) }}" method="POST">
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalDetailPengadaan{{$p->id}}">
                    Detail
                  </button>

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditPengadaan{{$p->id}}">
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


{{-- Modal Tambah Penadaan --}}
<div class="modal fade" id="modalPengadaan" tabindex="-1" role="dialog" aria-labelledby="modalPengadaanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Input Data Pengadaan</b></h5>
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
        <form method="POST" action="postpengadaan" id="postpengadaan">
          @csrf
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Pelaksana/Nama Perusahaan</label>

            <select class="form-control" name="pelaksana_id">
              <option value="">Pilih Pelaksana</option>
              @foreach ($pelaksana as $get)
              <option value="{{$get->id}}">- {{ $get->pt_pelaksana }} </option>
              @endforeach
            </select>
            <small class="text-danger">{{ $errors->first('pt_pelaksana') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Jenis Pengadaan</label>
            <input type="text" class="form-control" id="jenis_pengadaan" name="jenis_pengadaan" value="{{ old('jenis_pengadaan') }}" placeholder="Masukkan Pengadaan ...">
            <small class="text-danger">{{ $errors->first('jenis_pengadaan') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Kode Rekening</label>
            <input type="text" class="form-control" id="kode_rekening" name="kode_rekening" value="{{ old('kode_rekening') }}" placeholder="Kode Rekening">
            <small class="text-danger">{{ $errors->first('kode_rekening') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Biaya HPS (Harga Perkiraan Sendiri)</label>
            <input type="text" class="form-control" id="total_hps" name="total_hps" value="{{ old('total_hps') }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('total_hps') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Deskripsi HPS (Harga Perkiraan Sendiri)</label>
            <input type="text" class="form-control" id="deskripsi_hps" name="deskripsi_hps" value="{{ old('deskripsi_hps') }}" placeholder="Sepuluh Juta Rupiah">
            <small class="text-danger">{{ $errors->first('deskripsi_hps') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Harga Penawaran</label>
            <input type="text" class="form-control" id="harga_penawaran" name="harga_penawaran" value="{{ old('harga_penawaran') }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('harga_penawaran') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Deskripsi Harga Penawaran</label>
            <input type="text" class="form-control" id="deskripsi_penawaran" name="deskripsi_penawaran" value="{{ old('deskripsi_penawaran') }}" placeholder="Sepuluh Juta Rupiah">
            <small class="text-danger">{{ $errors->first('deskripsi_penawaran') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Nilai Negosiasi</label>
            <input type="text" class="form-control" id="nilai_negosiasi" name="nilai_negosiasi" value="{{ old('nilai_negosiasi') }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('nilai_negosiasi') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Deskripsi Negosiasi</label>
            <input type="text" class="form-control" id="deskripsi_negosiasi" name="deskripsi_negosiasi" value="{{ old('deskripsi_negosiasi') }}" placeholder="Sepuluh Juta Rupiah">
            <small class="text-danger">{{ $errors->first('deskripsi_negosiasi') }}</small>
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

{{-- Modal Edit pengadaan --}}
@foreach ( $pengadaan as $pgn )
<div class="modal fade" id="modalEditPengadaan{{$pgn->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPengadaanLabel" aria-hidden="true">
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
        {{-- <form method="POST" action="{{ url('pengadaan/update', $pgn->id) }}" id="postpengadaan"> --}}
        <form method="POST" action="{{ url('pengadaan/update', $pgn->id) }}">
          @csrf
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Pelaksana/Nama Perusahaan</label>

            <select class="form-control" name="pelaksana_id">
              <option value="{{$pgn->pelaksana_id}}">{{ $pgn->pelaksana->pt_pelaksana }} </option>
              <option value=""></option>

              <option value="">Pilih Pelaksana</option>
              @foreach ($pelaksana as $get)
              <option value="{{$get->id}}">-{{ $get->pt_pelaksana }} </option>
              @endforeach
            </select>
            <small class="text-danger">{{ $errors->first('pt_pelaksana') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Jenis Pengadaan</label>
            <input type="text" class="form-control" id="jenis_pengadaan" name="jenis_pengadaan" value="{{ $pgn->jenis_pengadaan }}" placeholder="Masukkan Pengadaan ...">
            <small class="text-danger">{{ $errors->first('jenis_pengadaan') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Biaya HPS (Harga Perkiraan Sendiri)</label>
            <input type="text" class="form-control" id="total_hps" name="total_hps" value="{{ $pgn->total_hps }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('total_hps') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Deskripsi HPS (Harga Perkiraan Sendiri)</label>
            <input type="text" class="form-control" id="deskripsi_hps" name="deskripsi_hps" value="{{ $pgn->deskripsi_hps }}" placeholder="Sepuluh Juta Rupiah">
            <small class="text-danger">{{ $errors->first('deskripsi_hps') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Harga Penawaran</label>
            <input type="text" class="form-control" id="harga_penawaran" name="harga_penawaran" value="{{ $pgn->harga_penawaran }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('harga_penawaran') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Deskripsi Harga Penawaran</label>
            <input type="text" class="form-control" id="deskripsi_penawaran" name="deskripsi_penawaran" value="{{ $pgn->deskripsi_penawaran }}" placeholder="Sepuluh Juta Rupiah">
            <small class="text-danger">{{ $errors->first('deskripsi_penawaran') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Nilai Negosiasi</label>
            <input type="text" class="form-control" id="nilai_negosiasi" name="nilai_negosiasi" value="{{ $pgn->nilai_negosiasi }}" placeholder="10000000">
            <small class="text-danger">{{ $errors->first('nilai_negosiasi') }}</small>
          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Deskripsi Negosiasi</label>
            <input type="text" class="form-control" id="deskripsi_negosiasi" name="deskripsi_negosiasi" value="{{ $pgn->deskripsi_negosiasi }}" placeholder="Sepuluh Juta Rupiah">
            <small class="text-danger">{{ $errors->first('deskripsi_negosiasi') }}</small>
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

{{-- Modal Detail Pengadaan --}}
@foreach ( $pengadaan as $pg )
<div class="modal fade" id="modalDetailPengadaan{{$pg->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPelaksanaLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Detail Data Pelaksana</b></h5>
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
                <td>Pelaksana/Nama Perusahaan</td>
                <td>:</td>
                <td>{{ $pg->pelaksana->pt_pelaksana }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Jenis Pengadaan</td>
                <td>:</td>
                <td>{{ $pg->jenis_pengadaan }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Kode Rekening</td>
                <td>:</td>
                <td>{{ $pg->kode_rekening }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Biaya HPS (Harga Perkiraan Sendiri)</td>
                <td>:</td>
                <td>Rp. {{number_format($pg->total_hps) }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Deskripsi HPS (Harga Perkiraan Sendiri)</td>
                <td>:</td>
                <td>{{ $pg->deskripsi_hps }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Harga Penawaran</td>
                <td>:</td>
                <td>Rp. {{number_format($pg->harga_penawaran) }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Deskripsi Harga Penawaran</td>
                <td>:</td>
                <td>{{ $pg->deskripsi_penawaran }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Nilai Negosiasi</td>
                <td>:</td>
                <td>Rp. {{number_format($pg->nilai_negosiasi) }}</td>
              </tr>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <tr>
                <td>Deskripsi Negosiasi</td>
                <td>:</td>
                <td>{{ $pg->deskripsi_negosiasi }}</td>
              </tr>
            </div>
          </div>
        </table>

        <div class="modal-footer mt-3">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          {{-- <button type="submit" class="btn btn-primary ">Simpan <i class="fa fa-save"></i></button> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
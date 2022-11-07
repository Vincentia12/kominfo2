@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
<!-- @section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection -->
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

<!-- <div class="col-12 grid-margin stretch-card">
  <div class="card shadow">
    <div class="card-body">
      <h4 class="card-title">Data Masukan Pengadaan</h4>

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

      <form action="postpengadaan" method="POST">
        @csrf
        {{-- <div class="row"> --}}
        <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
          {{-- <div class="col-md-12"> --}}
          {{-- <div class="form-group row"> --}}
          <div class="col-xs-12 col-sm-12 col-md-12">

            <label for="exampleInputName1" class="col-sm-9 col-form-label">Pelaksana/Nama Perusahaan</label>
            <div class="col-sm-12">
              {{-- <select class="form-control" name="pelaksana_id" > --}}
              <select class="form-control select2-multiple" name="pelaksana_id">
                <option> Pilih PT </option>
                @foreach ($pelaksana as $get)
                {{-- <option > {{$get->pt_pelaksana}}</option> --}}
                <option value="{{$get->id}}">{{ $get->pt_pelaksana }} </option>
                @endforeach
              </select>
            </div>

            {{-- <div class="col-sm-9">
                <label class="col-sm-3 col-form-label">Tanggal Pelaksanaan</label>
                <input class="form-control" type="date" name="" placeholder="dd/mm/yyyy" />
              </div> --}}
            <label for="exampleTextarea1" class="col-sm-9 col-form-label">Jenis Pengadaan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" name="jenis_pengadaan" placeholder="Pengadaan .....">
            </div>

            <label for="exampleTextarea1" class="col-sm-9 col-form-label">Biaya HPS (Harga Perkiraan Sendiri)</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" name="total_hps" placeholder="10000000">
            </div>

            <label for="exampleTextarea1" class="col-sm-9 col-form-label">Deskripsi HPS (Harga Perkiraan Sendiri)</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" name="deskripsi_hps" placeholder="Sepuluh Juta Rupiah">
            </div>

            <label for="exampleTextarea1" class="col-sm-9 col-form-label">Harga Penawaran</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" name="harga_penawaran" placeholder="10000000">
            </div>

            <label for="exampleTextarea1" class="col-sm-9 col-form-label">Deskripsi Harga Penawaran </label>
            <div class="col-sm-12">
              <input type="text" class="form-control" name="deskripsi_penawaran" placeholder="Sepuluh Juta Rupiah">
            </div>

            <label for="exampleTextarea1" class="col-sm-9 col-form-label">Nilai Negosiasi</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" name="nilai_negosiasi" placeholder="10000000">
            </div>

            <label for="exampleTextarea1" class="col-sm-9 col-form-label">Deskripsi Negosiasi</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" name="deskripsi_negosiasi" placeholder="Sepuluh Juta Rupiah">
            </div>
            {{-- </div> --}}
            {{-- </div> --}}
          </div>
        </table>

        <a href="/home" class="btn btn-light">Batal</a>
        <button type="submit" class="btn btn-primary mr-2">Selanjutnya</button>
        <a href="/input_jadwal" class="btn btn-light">NEXT</a>

<<<<<<< HEAD
        
=======
>>>>>>> a85de726d9267ab57a6a2d1babd16294d56b28a6
      </form>
    </div>
  </div>
</div> -->


<div class="col-12 grid-margin stretch-card">
  <div class="card shadow">
    <div class="card-body">
      <div class="table-responsive">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
        @endif

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
          {{-- <table id="data1" class="table table-bordered" cellspacing="0" width="100%"> --}}
          {{-- <table class="table table-bordered " id="data1" style="width:100%"> --}}
          {{-- <table class="table table-bordered" id="example"> --}}
          <thead>
            <tr>
              <th>Pelaksana/Nama Perusahaan</th>
              <th>Jenis Pengadaan</th>
              <th>Nilai Negosiasi</th>
              <th> Action</th>

            </tr>
          </thead>
          <tbody>
            <!-- @foreach ($pengadaan as $pengadaan) -->
            <tr>
              <!-- <td>{{ $pengadaan->jenis_pengadaan }}</td>
              <td>{{ $pengadaan->alamat }}</td>
              <td>{{ $pengadaan->tlp}}</td>
              <td>

                <form action="{{ route('pengadaan.destroy',$pengadaan->id) }}" method="POST">

                  <a class="btn btn-info btn-lg" href="{{ route('pengadaan.show',$pengadaan->id) }}">

                    Detail

                  </a>
                  <a class="btn btn-primary" href="{{ route('pengadaan.edit',$pengadaan->id) }}">

                    Edit

                  </a>
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger btn-lg">

                    Hapus

                  </button>
                </form>
              </td> -->
              <td>COba ges</td>
              <td>COba ges</td>
              <td>COba ges</td>
              <td>COba ges</td>
            </tr>
            <!-- @endforeach -->
          </tbody>
        </table>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
        <div class="form-group text-center">
          <tr>
            <td>
              <br>
              <a href="/home" class="btn btn-light">Batal</a>
              <a href="/input_jadwal" class="btn btn-light">Selanjutnya</a>
            </td>
          </tr>
        </div>
      </div>
    </div>
  </div>
</div>

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
              <option>Pilih PT</option>
              @foreach ($pelaksana as $get)
              <option value="{{$get->id}}">{{ $get->pt_pelaksana }} </option>
              @endforeach
            </select>
            <small class="text-danger">{{ $errors->first('pt_pelaksana') }}</small>

          </div>
          <div class="mb-4">
            <label for="message-text" class="col-form-label">Jenis Pengadaan</label>
            <input type="text" class="form-control" id="jenis_pengadaan" name="jenis_pengadaan" value="{{ old('jenis_pengadaan') }}" placeholder="Pengadaan ...">
            <small class="text-danger">{{ $errors->first('jenis_pengadaan') }}</small>
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

@endsection

<style>
  li {
    list-style-type: none;
  }

  .collapsible {
    background-color: #ffffff;
    color: black;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);
  }

  form .input:hover {
    color: darkgrey;
    background-color: white;
    transition: 0.3s;
  }

  form .input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    color: grey;
    background: #ffffff;
    background-color: #e8e8e8;
    width: 100%;
    border: 0;
    margin: 0 0 5px;
    padding: 15px;
    box-sizing: border-box;
    border-radius: 3px;
    transition: 0.3s;
  }

  form .inputselect:hover {
    color: darkgrey;
    background-color: white;
    transition: 0.3s;
  }

  form .inputselect {
    font-family: "Roboto", sans-serif;
    outline: 0;
    color: grey;
    background: #ffffff;
    background-color: #e8e8e8;
    width: 100%;
    border: 0;
    margin: 0 0 5px;
    padding: 15px;
    box-sizing: border-box;
    border-radius: 3px;
    transition: 0.3s;
    -webkit-appearance: none;
    -moz-appearance: none;
    content: "▼";
    font-family: "Roboto", sans-serif;
    outline: 0;
    color: grey;
    background: #ffffff;
    width: 100%;
    border: 0;
    margin: 0 0 5px;
    padding: 15px;
    box-sizing: border-box;
    border-radius: 3px;
    transition: 0.3s;

    background-image:
      linear-gradient(45deg, transparent 50%, grey 50%),
      linear-gradient(135deg, grey 50%, transparent 50%);

    background-position:
      calc(100% - 20px) calc(1em + 8px),
      calc(100% - 15px) calc(1em + 8px),
      100% 0;
    background-size:
      5px 5px,
      5px 5px,
      2.5em 2.5em;
    background-repeat: no-repeat;
  }

  .content {
    padding: 1rem;
    /* padding: 0 18px; */
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
  }
</style>

<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    });
  }
</script>
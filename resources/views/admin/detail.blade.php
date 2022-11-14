{{-- @foreach ( $pengadaan1 as $pg ) --}}
{{-- @foreach ( $jadwal1 as $jd ) --}}
    {{-- <div class="modal fade" id="modalDetailPengadaan1-{{$pg->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPelaksanaLabel" aria-hidden="true"> --}}
    {{-- <div class="modal fade" id="modalDetailPengadaan1-{{$jd->pengadaan_id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditPelaksanaLabel" aria-hidden="true"> --}}
        {{-- <div class="modal-dialog modal-xl-dialog-centered" role="document"> --}}
        {{-- <div class=" modal-body modal-xl-dialog-centered" role="document"> --}}
            <div class="modal-content ">
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
                    {{-- <h3>{{ $pg->pt_pelaksana}}</h3>
                    <h3>{{ $pg->jenis_pengadaan}}</h3> --}}
                    {{-- <form method="POST" action="{{ url('pelaksana/detail', $pg->id) }}"> --}}
                    <table id="data1" class="table table-bordered" style="margin:20px auto;" cellspacing="0">
                        {{-- <table id="data1" class="table table-bordered" cellspacing="0" width="100%"> --}}
                        {{-- <table class="table table-bordered " id="data1" style="width:100%"> --}}
                        {{-- <table class="table table-bordered" id="example"> --}}
                    <br>    
                        <thead>
                            <tr>
                                <th>Kegiatan</th>
                                <th>Alokasi</th>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Nomor</th>
                                <th>Deskripsi Tanggal</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($jadwal as $jd) --}}
                            <tr>
                                {{-- <td>{{ ++$i }}</td> --}}
                                {{-- <td>{{ $brg->id}}</td> --}}
                                <td>{{ $pg->kegiatan }}</td>
                                <td>{{ $pg->alokasi }}</td>
                                <td>{{ $pg->hari }}</td>
                                <td>{{ $pg->tanggal }}</td>
                                <td>{{ $pg->nomor }}</td>
                                <td>{{ $pg->deskripsi_tgl }}</td>
                                {{-- <td>{{ $pg->jadwal->kegiatan }}</td>
                                <td>{{ $pg->jadwal->alokasi }}</td>
                                <td>{{ $pg->jadwal->hari }}</td>
                                <td>{{ $pg->jadwal->tanggal }}</td>
                                <td>{{ $pg->jadwal->nomor }}</td>
                                <td>{{ $pg->jadwal->deskripsi_tgl }}</td> --}}
                                {{-- <td>{{ $jd->kegiatan }}</td> --}}
                                {{-- <td>{{ $jd->kegiatan }}</td>
                                <td>{{ $jd->alokasi }}</td>
                                <td>{{ $jd->hari }}</td>
                                <td>{{ $jd->tanggal }}</td>
                                <td>{{ $jd->nomor }}</td>
                                <td>{{ $jd->deskripsi_tgl }}</td>--}}
                                <td>
    
                                    {{-- <form action="{{ route('barang.destroy',$barang->id) }}" method="POST"> --}}
    
                                        {{-- <a class="btn btn-info btn-lg" href="{{ route('barang.show',$barang->id) }}">
                                            <!-- <a href="{{ route('barang.show',$barang->id) }}"> -->
                                            Detail
                                            <!-- <i class="mdi mdi-account-card-details"></i> -->
                                        </a>
                                        <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id) }}">
                                            <!-- <a href="{{ route('barang.edit',$barang->id) }}"> -->
                                            Edit
                                            <!-- <i class="mdi mdi-table-edit"></i> -->
                                        </a>
                                        @csrf
                                        @method('DELETE')
    
                                        <button type="submit" class="btn btn-danger btn-lg">
                                            <!-- <button type="submit" class="button-red"> -->
                                            Hapus
                                            <!-- <i class="mdi mdi-delete"></i> -->
                                        </button> --}}
                                    {{-- </form> --}}
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer mt-3">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    {{-- <button type="submit" class="btn btn-primary ">Simpan <i class="fa fa-save"></i></button> --}}
                </div>
            </div>
        {{-- </div>
    </div> --}}
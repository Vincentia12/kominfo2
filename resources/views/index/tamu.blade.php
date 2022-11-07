@extends('layouts/master')
@section('content')
    @section('judul')
        {{'Inventarisasi Aset Tanah'}}
    @endsection
    @section('title')
        {{'SISTEM INFORMASI MANAJEMEN ASET TANAH '}}
    @endsection

<!-- Content Row -->
<div class="row">

    {{-- <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/posts/').$post->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{!! $post->content !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset</div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fa-duotone fa-circle-caret-right"></i> --}}
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Terdaftar</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7 </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Belum Terdaftar</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>         
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3" style="background-color: #40B9CB;">
        <h6 class="m-0 font-weight-bold text-white">Sebaran Aset</h6>
    </div>
    <div class="card-body">
        <h4 class="small font-weight-bold">Belum di tandai <span
                class="float-right">20%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Di kelola masyarakat <span
                class="float-right">60%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 60%"
                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Masih terbengkalai <span
                class="float-right">80%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Sudah Terverifikasi <span
                class="float-right">Complete!</span></h4>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rencana Pembangunan</h1>
</div>
<div class="d-flex justify-content-around">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Pembangunan Aset</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
                        <i class="fa-solid fa-building fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1 text-white">Pelaporan Aset
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row ">
{{-- <div class="card shadow mb-4"> --}}
    <!-- Area Chart -->
    <div class="card shadow mb-4 text-center my-3 col-12">
    {{-- <div class="card shadow mb-4"> --}}
        <div class="card-header text-white" style="background-color: #40B9CB;">
            Index Aset Terdata
        </div>
        <canvas id="myChart" width="400" height="100"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['2017', '2018', '2019', '2020', '2021', '2022'],
                datasets: [{
                    label: 'Index Data Pertahun',
                    data: [12, 19, 5, 6, 3, 4],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>
    <script>
        var myChart = new Chart(
          document.getElementById('myChart'),
          config
        );
      </script>
                        
        <div class="card-footer text-white" style="background-color: #40B9CB;">
            2 days ago
        </div>
    </div>
    </div>
</div>
    
</div>
@endsection
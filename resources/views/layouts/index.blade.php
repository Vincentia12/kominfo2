<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <title>Keuangan Kominfo</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('template1/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('template1/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('template1/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('template1/vendors/mdi/css/materialdesignicons.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('template1/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('template1/images/favicon.png') }}" />
</head>

<body id="page-top">

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <!-- {{-- logo --}} -->
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="home"><img src="{{ asset('img/logo-kominfo.png') }}" class="mr-5" alt="logo" width="150px" /></a>
        <a class="navbar-brand brand-logo-mini" href="home"><img src="{{ asset('img/kominfo.png') }}" alt="logo" /></a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>

        <!-- {{-- search --}} -->
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">

          {{--foto profile --}}
          <li class="nav-item nav-profile dropdown">
            {{-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown"> --}}

            @guest
              @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
              @endif

              @else

                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                  {{-- <img class="img-profile rounded-circle" src="{{ asset('template/img/undraw_profile.svg')}}"> --}}
                  <img src="{{ asset('template1/images/faces/face28.jpg') }}" alt="profile" />
                  <span class="mr-2 d-none d-lg-inline small">{{ Auth::user()->name }}</span>
                </a>

              {{--Seting Profile --}}
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                <!-- {{-- Settings --}} -->
                <a href="/setting" class="dropdown-item">
                  <i class="ti-settings text-primary"></i>
                  Settings
                </a>

                <!-- {{-- Logout --}} -->
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  <i class="ti-power-off text-primary"></i>
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>

            @endguest
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          {{-- Dashboard --}}
          <li class="nav-item">
            <a class="nav-link" href="/home">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          {{-- Pengadaan --}}
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Pengadaan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/pengadaan1"><i class="fa-solid fa-less-than-equal "></i> 50juta</a></li>
                <li class="nav-item"> <a class="nav-link" href="/pengadaan2"><i class="fa-solid fa-greater-than "></i> 50juta</a></li>
              </ul>
            </div>
          </li>

          {{-- Anggaran --}}
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Anggaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">DPA</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Penyerapan</a></li>
              </ul>
            </div>
          </li>

          {{-- User Pages --}}
          <li class="nav-item">
            <a class="nav-link" href="/pengguna">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              {{-- <i class="menu-arrow"></i> --}}
            </a>
          </li>

        </ul>
      </nav>

      <!-- partial  -->
      <div class="main-panel">
        <div class="content-wrapper">

          {{-- judul --}}
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                {{--judul--}}

                @guest
                @if (Route::has('login'))
      
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome XXX</h3>
                  <h6 class="font-weight-normal mb-0">Selamat Datang di Sistem Informasi Keuangan Bidang Data dan Statistik <br> Dinas Komunikasi dan Informatika Provinsi Jawa Timur
      
                  </h6>
                </div>
                @endif

                @else

                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3>
                  <h6 class="font-weight-normal mb-0">Selamat Datang di Sistem Informasi Keuangan Bidang Data dan Statistik <br> Dinas Komunikasi dan Informatika Provinsi Jawa Timur
                    {{-- <span class="text-primary">3 unread alerts!</span> --}}
                  </h6>
                </div>


                @endguest

              </div>
            </div>
          </div>

        @yield('content')
      </div>
    </div>
  </div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('template1/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('template1/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('template1/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('template1/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('template1/js/dataTables.select.min.js') }}"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="{{ asset('template1/js/off-canvas.js') }}"></script>
  <script src="{{ asset('template1/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('template1/js/template.js') }}"></script>
  <script src="{{ asset('template1/js/settings.js') }}"></script>
  <script src="{{ asset('template1/js/todolist.js') }}"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  <script src="{{ asset('template1/js/dashboard.js') }}"></script>
  <script src="{{ asset('template1/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->

{{-- <script>
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
</script> --}}

{{-- <script>
  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
<script>
  //message with toastr
  @if(session()->has('success'))

  toastr.success('{{ session('success') }}', 'BERHASIL!');

  @elseif(session()->has('error'))

  toastr.error('{{ session('error') }}', 'GAGAL!');

  @endif
</script>
<script>
  $(document).ready(function () {
    $('#search').DataTable();
  });
</script> --}}

<script>
  $(document).ready(function() {
  // DataTable initialisation
  $('#data1').DataTable({
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

</body>

</html>
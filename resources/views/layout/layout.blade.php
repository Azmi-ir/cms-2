<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('judul')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/toastr/toastr.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('template/dist/css/adminlte.min.css')}}">
  <!--TinyMce-->
  <link rel="stylesheet" type="text/css" href="{{ asset ('tinymce/js/tinymce/jquery.tinymce.min.js')}}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{asset ('template/plugins/dropzone/min/dropzone.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{asset ('garut.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Blog Garut</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="user/{{Auth()->user()->id}}/edit" class="d-block">{{Auth()->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Modul Berita
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/berita" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/kategori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengumuman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengumuman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/agenda" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agenda Kegiatan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Modul Galeri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/galeri" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galeri</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/kategori_galeri" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Galeri</p>
                </a>
              </li>
            </ul>
          </li> 

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-youtube"></i>
              <p>
                Video
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/video" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="playlist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Playlist</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/kategori_vid" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Video</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-image"></i>
              <p>
                Modul Banner
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/infografis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Infografis</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/aplikasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Link Aplikasi</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-palette"></i>
              <p>
                Tampilan Website
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/infografis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Infografis</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/aplikasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Link Aplikasi</p>
                </a>
              </li>

            </ul>
          </li>
          @if (Auth()->user()->level=='super-admin' || Auth()->user()->level=='admin')
          <li class="nav-item">
            <a href="/list_user" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Modul User
                <i class="right fas"></i>
              </p>
            </a>
          </li>
          @endif

          <li class="nav-item">
            <a href="user/{{Auth()->user()->id}}/edit" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
                <i class="right fas"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <i class="right fas"></i>
              </p>
            </a>
          </li>

          

        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
@yield ('content-header')

@yield ('content')

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset ('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('template/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset ('template/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset ('template/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset ('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('template/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('template/dist/js/demo.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset ('template/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset ('template/plugins/toastr/toastr.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset ('template/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- Page specific script -->

<!--Datatables-->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

<!--Toastr Alert-->
<script type="text/javascript">
  @if (Session::has('status'))
    toastr.success("{{Session::get('status')}}", "Sukses")
  @endif
</script>

<script type="text/javascript">
  @if (Session::has('error'))
    toastr.warning("{{Session::get('error')}}", "error")
  @endif
</script>

<!--TinyMce-->


</body>
</html>

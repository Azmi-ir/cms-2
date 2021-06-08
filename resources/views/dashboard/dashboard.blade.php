@extends ('layout.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section ('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$berita}}</h3>

                <p>Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/berita" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$kategori}}</h3>

                <p>Kategori Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/kategori" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$pengumuman}}</h3>

                <p>Pengumuman</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/pengumuman" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$agenda}}</h3>

                <p>Agenda Kegiatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/agenda" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$galeri}}</h3>

                <p>Galeri Foto</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/galeri" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$video}}</h3>

                <p>Galeri Video</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/video" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$infografis}}</h3>

                <p>Banner Infografis</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/infografis" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$aplikasi}}</h3>

                <p>Link Aplikasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/aplikasi" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$kategori}}</h3>

                <p>Kategori Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/kategori" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$kategori_galeri}}</h3>

                <p>Kategori Foto</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/kategori_galeri" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$kategori_vid}}</h3>

                <p>Kategori galeri</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/kategori_vid" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$user}}</h3>

                <p>User Terdaftar</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Lebih Lengkap <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

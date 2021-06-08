@extends ('layout.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori Video</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kategori Video</li>
              <li class="breadcrumb-item active">Create</li>
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
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

        <form method="post" action="/kategori_vid/{{ $kategoriVid->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" placeholder="Masukan nama kategori" name="nama_kategori" value="{{$kategoriVid->nama_kategori}}">
            @error('nama_kategori')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="/kategori_vid" class="btn btn-success ml-2">Kembali</a>
        </div>
    </form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
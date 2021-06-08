@extends ('layout.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Playlist</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Playlist</li>
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
                <h3 class="card-title">Tambah Playlist</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                  <form method="post" action="/playlist/{{$playlist->id}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            
            <div class="form-group">
                <label for="judul">Judul Playlist</label>
                <input type="text" class="form-control @error('judul') is invalid @enderror" id="judul" placeholder="Masukan Judul" name="judul" value="{{ $playlist->judul }}">
            @error('judul')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
                <label for="thumbnail">Upload Thumbnail</label>
                <input type="file" class="form-control @error('thumbnail') is invalid @enderror btn-sm" id="thumbnail" name="thumbnail">
            @error('thumbnail')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>
            <div class="form-group">
              <label>Aktif</label><br>
            <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="aktif" value="Y">
                            <label class="form-check-label" for="aktif" checked>
                                <strong>Y</strong>
                            </label>
                        </div>
                        
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="aktif" value="N">
                            <label class="form-check-label" for="aktif">
                                <strong>N</strong>
                            </label>
                        </div>
            </div>
            <button type="submit" class="btn btn-info">Tambah Data</button>
            <a href="/playlist" class="btn btn-success ml-1">kembali</a>
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
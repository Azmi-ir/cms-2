@extends ('layout.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Link Aplikasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Link Aplikasi</li>
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
                <h3 class="card-title">Tambah Link Aplikasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                  <form method="post" action="/aplikasi/{{$aplikasi->id}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            
            <table style="width: 100%;">
              <tr>    
            <div class="form-group">
              <td style="width: 15%;">
                <label for="nama_app">Nama Aplikasi</label>
              </td>
              <td style="width: 85%;">
                <input type="text" class="form-control @error('nama_app') is invalid @enderror" id="nama_app" placeholder="Masukan nama_app" name="nama_app" value="{{ $aplikasi->nama_app }}">
              </td>
            @error('nama_app')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>
              </tr>

              <tr>    
            <div class="form-group">
              <td style="width: 15%;">
                <label for="url">Link Aplikasi</label>
              </td>
              <td style="width: 85%;">
                <input type="text" class="form-control @error('url') is invalid @enderror" id="url" placeholder="Masukan url" name="url" value="{{ $aplikasi->url }}">
              </td>
                @error('url')
                <div class="invalid-feedback">
                {{$message}}
                </div>
                @enderror
              </div>
              </td>
            </div>
              </tr>

              <tr>    
            <div class="form-group">
              <td style="width: 15%;">
                <label for="thumbnail">Upload thumbnail</label>
              </td>
              <td style="width: 85%;">
                <input type="file" class="form-control @error('thumbnail') is invalid @enderror btn-sm" id="thumbnail" name="thumbnail">
              </td>
            @error('thumbnail')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>
              </tr>
          </table><br>


            <button type="submit" class="btn btn-info">Tambah Data</button>
            <a href="/aplikasi" class="btn btn-success ml-1">kembali</a>
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
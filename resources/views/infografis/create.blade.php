@extends ('layout.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Infografis</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Infografis</li>
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
                <h3 class="card-title">Tambah Infografis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                  <form method="post" action="/infografis" enctype="multipart/form-data">
            @csrf
            
            <table style="width: 100%;">
              <tr>    
            <div class="form-group">
              <td style="width: 15%;">
                <label for="judul">Judul Infografis</label>
              </td>
              <td style="width: 85%;">
                <input type="text" class="form-control @error('judul') is invalid @enderror" id="judul" placeholder="Masukan Judul" name="judul" value="{{ old('judul') }}">
              </td>
            @error('judul')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>
              </tr>

              <tr>    
            <div class="form-group">
              <td style="width: 15%;">
                <label for="deskripsi">Deskripsi Infografis</label>
              </td>
              <td style="width: 85%;">
                <textarea type="text" class="form-control" id="deskripsi" placeholder="Masukan deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" rows="3"></textarea>
              </td>
            </div>
              </tr>

              <tr>    
            <div class="form-group">
              <td style="width: 15%;">
                <label for="gambar">Upload Gambar</label>
              </td>
              <td style="width: 85%;">
                <input type="file" class="form-control @error('gambar') is invalid @enderror btn-sm" id="gambar" name="gambar">
              </td>
            @error('gambar')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>
              </tr>
          </table><br>


            <button type="submit" class="btn btn-info">Tambah Data</button>
            <a href="/infografis" class="btn btn-success ml-1">kembali</a>
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
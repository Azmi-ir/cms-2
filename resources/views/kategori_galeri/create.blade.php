@extends ('layout.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kategori Galeri</li>
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
                <h3 class="card-title">Tambah Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                  <form method="post" action="/kategori_galeri">
            @csrf
            
            <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" placeholder="Masukan nama kategori" name="nama_kategori" value="{{ old('nama_kategori') }}">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is invalid @enderror" id="keterangan" placeholder="Masukan keterangan" name="keterangan" value="{{ old('keterangan') }}">
            @error('keterangan')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
            <label for="nama_kategori">Parent</label>
            <select name="parent" class="form-control">
                <option value="">
                    Kategori induk
                </option>
                @foreach ($parent_kategori as $item)
                    <option value="{{$item->id}}">
                        {{$item->nama_kategori}}
                    </option>
                @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-info swalDefaultSuccess">Tambah kategori</button>
            <a href="/kategori_galeri" class="btn btn-success ml-1">Kembali</a>
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
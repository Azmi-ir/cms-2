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
              <li class="breadcrumb-item active">Kategori</li>
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
                <h3 class="card-title">Tambah Gambar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <form method="post" action="/galeri/{{$galeri->id}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
  
        <div class="form-group">
            <label for="id_kategori">Kategori</label>
         <select class="form-control" name="id_kategori">
               @foreach ($kategori_galeri as $item)
               <option @if ($galeri->id_kategori == $item->id )
               selected = 'selected'
               @endif
               value="{{ $item->id }}">{{ $item->nama_kategori}}</option>
               @endforeach
            </select>
            @error('id_kategori')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>
            
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control @error('keterangan') is invalid @enderror" id="keterangan" placeholder="Input keterangan" name="keterangan" value="{{ $galeri->keterangan }}">
            @error('keterangan')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
                <label for="gambar">Upload Gambar</label>
                <input type="file" class="form-control @error('gambar') is invalid @enderror btn-sm" id="gambar" name="gambar" value="{{$galeri->gambar}}">
            @error('gambar')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="/galeri" class="btn btn-success ml-1">kembali</a>
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
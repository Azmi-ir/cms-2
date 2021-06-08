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
                <h3 class="card-title">Tambah Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                  <form method="post" action="/video/{{$video->id}}">
            @csrf
            @method('patch')
            <div class="form-group">
            <label for="judul_vid">Judul Video</label>
            <input type="text" class="form-control @error('judul_vid') is-invalid @enderror" id="judul_vid" placeholder="Masukan nama kategori" name="judul_vid" value="{{$video->judul_vid}}">
            @error('judul_vid')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control @error('deskripsi') is invalid @enderror" id="deskripsi" placeholder="Masukan deskripsi" name="deskripsi" value="{{$video->deskripsi}}">
            @error('deskripsi')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
            <label for="video">Video</label>
            <input type="text" class="form-control @error('video') is invalid @enderror" id="video" placeholder="Masukan URL YouTube Video" name="video" value="{{$video->video}}">
            @error('video')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <table style="width: 100%;">
              <td style="width: 50%;">
                <div class="form-group">
            <label for="nama_kategori">kategori</label>
            <select name="id_kategori" class="form-control">
                <option value="">
                    Masukan Kategori
                </option>
                @foreach ($kategoriVid as $item)
                    <option @if ($video->id_kategori == $item->id )
                      selected = 'selected'
                      @endif value="{{$item->id}}">
                        {{$item->nama_kategori}}
                    </option>
                @endforeach
            </select>
            </div>
              </td>

              <td style="width: 50%;">
                <div class="form-group">
            <label for="nama_kategori">Playlist</label>
            <select name="id_playlist" class="form-control">
                <option value="">
                    Pilih Playlist
                </option>
                @foreach ($playlistVideo as $item)
                    <option @if ($video->id_playlist == $item->id )
                      selected = 'selected'
                      @endif value="{{$item->id}}">
                        {{$item->judul}}
                    </option>
                @endforeach
            </select>
            </div>
              </td>
            </table>

            

            
            <button type="submit" class="btn btn-info swalDefaultSuccess">Tambah Video</button>
            <a href="/video" class="btn btn-success ml-1">Kembali</a>
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
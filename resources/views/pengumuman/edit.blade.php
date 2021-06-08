@extends ('layout.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Berita</li>
              <li class="breadcrumb-item active">Edit</li>
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
                <h3 class="card-title">Edit Berita</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

<form method="post" action="/pengumuman/{{$pengumuman->id}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            
            <div class="mb-2">
            <button type="submit" class="btn btn-info">Simpan Data</button>
            <a href="/pengumuman" class="btn btn-success ml-1">Kembali</a><br>
             </div>

            <div class="form-group">
            <label for="judul_pengumuman">Judul Berita</label>
            <input type="text" class="form-control @error('judul_pengumuman') is-invalid @enderror" id="judul_pengumuman" placeholder="Masukan Judul Berita" name="judul_pengumuman" value="{{ $pengumuman->judul_pengumuman }}">
            @error('judul_pengumuman')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

        <div class="form-group">
                <label for="cover">Upload Thumbnail</label>
                <input type="file" class="form-control @error('cover') is invalid @enderror btn-sm" id="cover" name="thumbnail">
            @error('cover')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
                <label for="cover">Upload Dokumen</label>
                <input type="file" class="form-control @error('dokumen') is invalid @enderror btn-sm" id="dokumen" name="dokumen">
            @error('dokumen')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

        <div class="form-group">
            <label for="isi_berita">Isi Pengumuman</label>
            <textarea class="form-control tinymce-editor col-md-12" name="isi_pengumuman" id="isi_berita" rows="8" placeholder="Masukan isi Pengumuman">
                {!! $pengumuman->isi_pengumuman !!}
            </textarea>
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



  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace( 'isi_berita', {
      filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
      filebrowserUploadMethod: 'form'
    });
            </script>
@endsection
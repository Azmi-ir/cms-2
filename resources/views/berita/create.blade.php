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
                <h3 class="card-title">Tambah Berita</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                  <form method="post" action="/berita" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
            <button type="submit" class="btn btn-info">Buat Berita</button>
            <a href="/berita" class="btn btn-success ml-1">Kembali</a><br>
             </div>
        <div class="form-group">
            <label for="judul_berita">Judul Berita</label>
            <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" id="judul_berita" placeholder="Masukan Judul Berita" name="judul_berita" value="{{ old('judul_berita') }}">
            @error('judul_berita')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="id_kategori">Kategori</label>
           <select class="form-control" name="id_kategori">
               @foreach ($kategoriBerita as $kategori)
               <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori}}</option>
               @endforeach
           </select>
        </div>

        <div class="form-group">
                <label for="cover">Upload Thumbnail</label>
                <input type="file" class="btn-sm form-control @error('cover') is invalid @enderror" id="cover" name="thumbnail" required="">
            @error('cover')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>

        <div class="form-group">
            <label for="isi_berita">Isi Berita</label>
            <textarea class="form-control tinymce-editor col-md-12" name="isi_berita" id="isi_berita" rows="8" placeholder="Masukan isi berita">
                
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


<!--TinyMce-->
<!--
<script src="{{asset('tinymce/jquery-3.2.1.min.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
    <script src="{{asset('tinymce/js/tinymce/jquery.tinymce.min.js')}}" referrerpolicy="origin"></script>  
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>
-->
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
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

                 <div class="card-body card-block">
            <div class="mb-2">
            <h2 class="card-title">{{ $tabel_berita->judul_berita }}</h2>
            <h5 class="card-subtitle mb-2 text-muted">{{ $tabel_berita->KategoriBerita->nama_kategori }}</h5>
            <h5 class="card-subtitle mb-2 text-muted">{{ $tabel_berita->created_at->format('d M Y / H:m') }}</h5>
            <div>
                <img src="{{ asset('/thumbnails/'.$tabel_berita->thumbnail) }}" class="featured-image" alt="cover">
                <p class="lead">{!! $tabel_berita->isi_berita !!}</p>
            </div>
            </div>
        </div> 

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
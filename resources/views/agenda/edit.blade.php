@extends ('layout.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agenda Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Agenda Kegiatan</li>
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
                <h3 class="card-title">Edit Agenda Kegiatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                  <form method="post" action="/agenda/{{$agenda->id}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <table style="width: 100%;">
              <tr>    
            <div class="form-group">
              <td style="width: 15%;">
                <label for="nama_agenda">Nama Kegiatan</label>
              </td>
              <td style="width: 85%;">
                <input type="text" class="form-control @error('nama_agenda') is invalid @enderror" id="nama_agenda" placeholder="Masukan nama_agenda" name="nama_agenda" value="{{ $agenda->nama_agenda }}">
              </td>
            @error('nama_agenda')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            </div>
              </tr>

              <tr>    
            <div class="form-group">
              <td style="width: 15%;">
                <label for="tempat">Tempat Kegiatan</label>
              </td>
              <td style="width: 85%;">
                <input type="text" class="form-control @error('tempat') is invalid @enderror" id="tempat" placeholder="Masukan tempat" name="tempat" value="{{ $agenda->tempat }}">
              </td>
                @error('tempat')
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
                <label for="pengirim">Pengirim</label>
              </td>
              <td style="width: 85%;">
                <input type="text" class="form-control @error('pengirim') is invalid @enderror" id="pengirim" placeholder="Masukan pengirim" name="pengirim" value="{{ $agenda->pengirim }}">
              </td>
                @error('pengirim')
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
                <label for="tanggal">Tanggal Kegiatan</label>
              </td>
              <td style="width: 100%; display: flex;">
                <input type="date" class="inline form-control @error('tgl_mulai') is invalid @enderror" id="tgl" placeholder="Tanggal Mulai" name="tgl_mulai" value="{{ $agenda->tgl_mulai }}" style="width: 50%;">
                <input type="date" class="inline form-control @error('tgl_selesai') is invalid @enderror" id="tgl" placeholder="Tanggal selesai" name="tgl_selesai" value="{{ $agenda->tgl_selesai }}" style="width: 50%;">
              </td>
                @error('tgl')
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
                <label for="jam">Waktu</label>
              </td>
              <td style="width: 85%;">
                <input type="time" class="form-control @error('jam') is invalid @enderror" id="jam" placeholder="Masukan jam" name="jam" value="{{ $agenda->jam }}">
              </td>
                @error('jam')
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
                <label for="gambar">Upload gambar</label>
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

              <tr>    
            <div class="form-group">
              <td style="width: 15%;">
                <label for="isi_agenda">Detail kegiatan</label>
              </td>
              <td style="width: 85%;">
                <textarea type="text" class="form-control" id="isi_berita" placeholder="Masukan isi_agenda" name="isi_agenda" value="{{ $agenda->isi_agenda }}" rows="2">{!! $agenda->isi_agenda !!}</textarea>
              </td>
              </div>
              </td>
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
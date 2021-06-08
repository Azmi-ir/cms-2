@extends ('layout.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Galeri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Galeri</li>
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
                <h3 class="card-title">Galeri</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <a class="btn btn-info" href="galeri/create">
                    <i class="fas fa-plus-square"></i>
                       Tambah Data
                  </a>
                </div>
                <br>
                <table id="example1" class="table table-striped">
                  <thead>
                  <tr>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($galeri as $item)
                  <tr>
                    <td style="text-align: center;"><img src="{{ asset('/uploads/'. $item->gambar) }}" style="width: 200px; height: relative;"></td>
                    <td>{{$item->KategoriGaleri->nama_kategori}}</td>
                    <td>{{$item->keterangan}}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="galeri/{{$item->id}}/edit">
                          <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="galeri/{{ $item->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data?')">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>

                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
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

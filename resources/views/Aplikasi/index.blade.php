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
                <h3 class="card-title">Link Aplikasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <a class="btn btn-info" href="/aplikasi/create">
                    <i class="fas fa-plus-square"></i>
                       Tambah Data
                  </a>
                </div>
                <br>
                <table id="example1" class="table table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Thumbnail</th>
                    <th>Nama Aplikasi</th>
                    <th>Link</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($aplikasi as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>  
                    <td style="text-align: center;"><img src="{{ asset('/thumbnail_aplikasi/'. $item->thumbnail) }}" style="width: 75px;"></td>
                    <td>{{$item->nama_app}}</td>
                    <td>{{$item->url}}</td>
                    <td>
                          <a class="btn btn-info btn-sm" href="aplikasi/{{ $item->id }}/edit">
                              <i class="fas fa-pencil-alt"></i>
                          </a>
                        <form action="aplikasi/{{ $item->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data?')">
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

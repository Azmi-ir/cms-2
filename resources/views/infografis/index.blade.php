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
                <h3 class="card-title">Infografis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <a class="btn btn-info" href="/infografis/create">
                    <i class="fas fa-plus-square"></i>
                       Tambah Data
                  </a>
                </div>
                <br>
                <table id="example1" class="table table-striped">
                  <thead>
                  <tr>
                    <th style="width: 7%;">No</th>
                    <th style="width: 20%;">Thumbnail</th>
                    <th>Judul</th>
                    <th style="width: 20%;">Tgl Posting</th>
                    <th style="width: 15%;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($infografis as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>  
                    <td style="text-align: center;"><img src="{{ asset('/gambar_infografis/'. $item->gambar) }}" style="width: 75px;"></td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->created_at->format('d M Y')}}</td>
                    <td>
                          <a class="btn btn-info btn-sm" href="infografis/{{ $item->id }}/edit">
                              <i class="fas fa-pencil-alt"></i>
                          </a>
                        <form action="infografis/{{ $item->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data?')">
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

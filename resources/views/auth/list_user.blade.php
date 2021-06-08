@extends ('layout.layout')

@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">List User</li>
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
                <h3 class="card-title">List User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <a class="btn btn-info" href="/register">
                    <i class="fas fa-plus-square"></i>
                       Tambah Data
                  </a>
                </div>
                <br>
                <table id="example1" class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Username</th>
                        <th scope="col" style="text-align: center;">Email</th>
                        <th scope="col" style="text-align: center;">Tipe</th>
                        @if (Auth()->user()->level=='super-admin')
                        <th scope="col" style="text-align: center;">Aksi</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($user as $item)
                        @if ($item->level=='admin' || $item->level=='operator')
                        <tr>
                        <th scope="row" style="text-align: center;">{{$loop->iteration}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->level}}</td>
                        @if (Auth()->user()->level=='super-admin')
                        <td style="text-align: center; width: 20%; ">
                        <form action="list_user/{{ $item->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-2">Delete</button>
                        </form>
                        </td>
                        @endif
                        </tr>
                        @endif
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

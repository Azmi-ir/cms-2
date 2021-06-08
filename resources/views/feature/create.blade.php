@extends ('layout.layout')
@section ('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Feature</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Feature</li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section ('content')
<div class="card">
	<form method="POST" action="/feature">
		@csrf
	  <div class="form-group">
		<input type="text" name="name">
		<input type="number" name="price">
		<input type="text" name="details">
		<input type="submit" name="">
	  </div>
	</form>
</div>
@endsection
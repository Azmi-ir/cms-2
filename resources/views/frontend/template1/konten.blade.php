@extends ('frontend.template1.index')

@section('content')
<div class="col-lg-8"> 
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                            @foreach ($berita as $item)
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{asset('/thumbnails/'.$item->thumbnail)}}" alt="thumbnail" /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$item->created_at->format('d M Y')}}</div>
                                    <h2 class="card-title h4">{{$item->judul_berita}}</h2>
                                    <p class="card-text">{{ Str::limit($item->isi_berita, 150) }} 
                                    </p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
@endsection
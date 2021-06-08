@forelse($kategoriBerita->tabelBerita as $item)

<article class="post post-medium" style="padding-bottom: 10px;padding-top:20px;">
								<div class="row">
										<div class="col-md-5">
											<div class="img-responsive">
												<a href='' rel='bookmark' title='{{$item->judul_berita}}'><img width='336' style='height:189px;' height='189' class='img-responsive' src="{{asset('/thumbnails/'.$item->thumbnail)}}" alt='Thumbnail' title='{{$item->judul_berita}}'/></a>											</div>
										</div>
										<div class="col-md-7">

											<div class="post-content">

												<h4><a href="">{{$item->judul_berita}}</a></h4>
												<p>{!! Str::limit($item->isi_berita, 100) !!}</p>

											</div>
										</div>
										

									<div class="col-md-7">
										<div class="post-meta">
											<span><i class="fa fa-calendar"></i> {{$item->created_at->format('Y-m-d')}}</span>
											<a href="#" class="btn btn-xs btn-primary pull-right">Selengkapnya</a>
										</div>
									</div>
								</div>

							</article>
							<div class="clearfix" style="border-bottom: 1px solid #eee; padding-bottom:10px; line-height:10px;"></div>

@if($item->kategoriBerita->child)
    @forelse ($item->kategoriBerita->child as $itemChild)
        @include("frontend.template2.artikel", ["kategoriBerita" => $itemChild])
    @empty
    @endforelse
@endif

@empty
<h5>Tidak ada berita untuk ditampilkan</h5>

@endforelse

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2&appId=576455719229966&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

    <div class="body">

@include('frontend.template2.header')

<div class="main" role="main">



<div style="margin-bottom:80px">
	<div id="carousel-example-generic" class="carousel slide">
        <!-- Indicators -->
		<ol class="carousel-indicators">
		<li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li><li data-target='#carousel-example-generic' data-slide-to='1'></li><li data-target='#carousel-example-generic' data-slide-to='2'></li><li data-target='#carousel-example-generic' data-slide-to='3'></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
                <div class='item active'>
                	<img src="{{asset('garut.jpg')}}" class="img-responsive" style="width:100%;height:100vh;"/>
                    <div class="carousel-caption animated fadeInLeft">
                            <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                                GARUT
                            </h2>
                            <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                                <h4 style="text-align: left;"><span style="color: #ffffff;">Dikelola secara profesional, menghindari benturan kepentingan, tidak menoleransi suap, menjunjung tinggi kepercayaan dan integritas. Berpedoman pada asas tata kelola korporasi yang baik.<br /></span></h4>
                            </h4>

                    </div>
				</div>

				@foreach($infografis as $item)
					<div class='item'>
						<img src="{{'/gambar_infografis/'.$item->gambar}}" class="img-responsive" style="width:100%; height:100vh;"/>
                    <div class="carousel-caption animated fadeInLeft">
                            <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                                {{$item->judul}}
                            </h2>
                            <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                                <h4 style="text-align: left;"><span style="color: #ffffff;">{{$item->deskripsi}}<br /></span></h4>
                            </h4>

                    </div>
					</div>
				@endforeach

        </div>
        <!-- /.carousel-inner -->
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->



</div><!-- /.container -->

<div class="container">
<div class="row">
<div class="col-md-12 center">
<div class="heading heading-border heading-middle-border heading-middle-border-center">
<h2 class="mb-lg">LINK  <strong>   TERKAIT</strong></h2>
</div>
<div class="owl-carousel owl-theme">
@foreach ($aplikasi as $item)
    <div class="item ml-5" id="gambar">
        <img src="{{asset('/thumbnail_aplikasi/'.$item->thumbnail)}}" alt="Thumbnail" style="width: 75%; height: 25vh;">
        <label>{{$item->nama_app}}</label>
    </div>
@endforeach
</div>
</div>
</div>
</div>

<section class="section section-no-background m-none">
	<div class="container">
		<div class="row">

		<div class="col-md-8" data-wow-delay=".4s">
		  <div class="heading heading-border heading-middle-border heading-middle-border-center">
				<h2 class="mb-lg"><strong>BERITA</strong></h2>
			</div>
			@foreach($berita as $item)
			<div class="blog-post single-post">
						    <article class="post post-medium" style="padding-bottom: 10px;padding-top:20px;">
								<div class="row">
										<div class="col-md-5">
											<div class="img-responsive">
												<a href='#' rel='bookmark' title='Judul Berita'><img width='336' style='height:189px;' height='189' class='img-responsive' src="{{asset('/thumbnails/'.$item->thumbnail)}}" alt="{{asset('garut.png')}}" title='Judul Berita'/></a>
											</div>
										</div>
										<div class="col-md-7">

											<div class="post-content">

												<h4><a href="http://localhost/webdinas/berita/detail/judul-berita">{{$item->judul_berita}}</a></h4>
												<p>{!! Str::limit($item->isi_berita, 100) !!}</p>

											</div>
										</div>


									<div class="col-md-7">
										<div class="post-meta">
											<span><i class="fa fa-calendar"></i> {{$item->created_at->format('Y-m-d')}} </span>
											<a href="/lihat/{{$item->id}}" class="btn btn-xs btn-primary pull-right">Read more...</a>
										</div>
									</div>
								</div>
                            </article>
                        </div>
			@endforeach
		</div>

			<div class="col-md-4" data-wow-delay=".4s">
				<div class="heading heading-border heading-middle-border heading-middle-border-center">
					<h2 class="mb-lg">AGENDA <strong> KEGIATAN</strong></h2>
				</div>
				@foreach ($agenda as $item)
					<div class="recent-posts">
						<article class="post">
							<div class="post-meta">
								<span><i class="fa fa-calendar"></i> {{$item->tgl_mulai}} <strong>-</strong> {{$item->tgl_selesai}}</span>
							</div>
							<h5><a href="http://localhost/webdinas/agenda/detail/pengumuman">{{$item->nama_agenda}}</a></h5>
						</article>
					</div>
				@endforeach
					<div class="recent-posts">
						<article class="post">
							<div class="post-meta">
								<span><i class="fa fa-calendar"></i> 2021-04-01 </span>
							</div>
							<h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
						</article>
					</div>
					<div class="recent-posts">
						<article class="post">
							<div class="post-meta">
								<span><i class="fa fa-calendar"></i> 2021-04-03 </span>
							</div>
							<h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
						</article>
					</div>

					<div class="recent-posts">
						<article class="post">
							<div class="post-meta">
								<span><i class="fa fa-calendar"></i> 2021-05-20 </span>
							</div>
							<h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
						</article>
					</div>
			<br>

			<div class="heading heading-border heading-middle-border heading-middle-border-center">
				<h2 class="mb-lg"><strong>PENGUMUMAN</strong></h2>
			</div>
			@foreach($pengumuman as $item)
				<div class="recent-posts">
					<a href="" style="text-decoration: none;">
						<article class="post">
							<p><span><i class="fa fa-volume-up"></i></span> &nbsp;{{$item->judul_pengumuman}}</p>
						</article>
					</a>
				</div>
			@endforeach
					<div class="recent-posts">
						<article class="post">
							<p><span><i class="fa fa-volume-up"></i></span> &nbsp;Lorem ipsum dolor sit amet.</p>
						</article>
					</div>
								<div class="recent-posts">
						<article class="post">
							<p><span><i class="fa fa-volume-up"></i></span> &nbsp;Lorem ipsum dolor sit amet</p>
						</article>
					</div>

			</div>
		</div>
	</div>
</section>
<div class="clearfix"></div>

<section class="section section-no-background m-none">
	<div class="container">
			<!--VIdeo-->
		<div class="row">
		<div class="heading heading-border heading-middle-border heading-middle-border-center">
			<h2 class="mb-lg">GALERI<strong> VIDEO</strong></h2>
		</div>
		<div class="owl-carousel2 owl-theme">	
		@foreach($playlist as $item)
		<div class="item">
				<a href="#">
				<img width="375" height="210" src="{{('/thumbnails/'.$item->thumbnail)}}">
				<label>	
				<h3 class="margin-bottom-15 margin-top-3">{{$item->judul}}</h3>
				</label>
				</a>
		</div>
		@endforeach
		</div>
			<a href="" class="btn btn-xs btn-primary pull-right">Selengkapnya</a>
		</div>

		<!--VIdeo-->
		<div class="row">
		<div class="heading heading-border heading-middle-border heading-middle-border-center">
			<h2 class="mb-lg">GALERI<strong> FOTO</strong></h2>
		</div>
		<div class="owl-carousel2 owl-theme">	
		@foreach($galeri as $item)
		<div class="item">
				<a href="#">
				<img width="375" height="210" src="{{('/uploads/'.$item->gambar)}}">
				<label>	
				<h3 class="margin-bottom-15 margin-top-3">{{$item->keterangan}}</h3>
				</label>
				</a>
		</div>
		@endforeach
		</div>
		<a href="" class="btn btn-xs btn-primary pull-right">Selengkapnya</a>
		</div>

		
	</div>
</div>
</section>

</div>



<!--Footer Start-->
@include('frontend.template2.footer')

    </div>




  <!-- Vendor -->
<script src="{{asset('frontend/template2/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/common/common.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/jquery.validation/jquery.validation.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/vide/vide.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/owl.carrousel/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/slider-bootstrap/slider-bootstrap.js')}}"></script>
<script src="{{asset('frontend/template2/vendor/dataTables/datatables.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('frontend/template2/js/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('frontend/template2/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('frontend/template2/js/theme.init.js')}}"></script>
<script type="text/javascript">
    function langSwitch(content, langId) {
        if (content != '') {
            var url = "/" + langId + "/" + content;
            //console.log(url);
            window.location = url;
        }
        else
        {
            if (langId == "id") {
                alert("Maaf, halaman ini tidak tersedia untuk bahasa inggris");
                return false;
            }
            else
            {
            alert("Sorry, this content not available in English.");
                return false;
            }

       }
    }

    $('a#btnDownload').each(function () {
        $(this).click(function(e) {
            e.preventDefault();
            //alert('clicked');
            var getdocName = $(this).data('doc');
            var lang = $(this).data('lang');
            console.log(getdocName);
            $.post({
                type: "GET",
                url: window.location.origin + "/Ajax/getDownloadDoc?doc=" + getdocName + "&lang=" + lang,
                //data: { docName: "'" + getdocName + "'" },
                contentType: "application/json",
                success: function (response) {
                    console.log(window.location.origin + response);
                    window.location = window.location.origin + response;
                },
                failure: function (response) {
                    alert('Terjadi kesalahan!');
                }
            });

        });
    });

$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:5,
    loop:true,
    nav:false,
    margin:15,
    center:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});

var owl = $('.owl-carousel2');
owl.owlCarousel({
    items:3,
    loop:true,
    nav:false,
    margin:20,
    center:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
</script>

<style type="text/css">

#gambar .content{
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  padding: 5px; /* Some padding */
}

.gambar:hover .overlay{
  opacity: 1;
}
</style>

</body>
</html>

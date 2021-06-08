@include('frontend.template2.header')
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


<div class="main" role="main">
			<div class="container">
                <div class="row" style="padding-top:15px;"> 
                    <div class="col-md-9">
                        <div class="blog-post single-post">
                            <article class="post blog-single-post">
                                <div>
                                    <h2>{{$berita->judul_berita}}</h2>
									<div class="post-meta">
                                        <span><i class="fa fa-calendar"> {{$berita->created_at->format('Y-m-d')}}</i></span>
                                        <span><i class="fa fa-tag"></i><a href='http://localhost/webdinas/kategori/detail/berita-opd'>{{$berita->KategoriBerita->nama_kategori}}</a></span>
                                            <span><i class="fa fa-eye"></i> <a href="#">48</a></span>
									</div>
									
									<div class="td-post-sharing td-post-sharing-top td-pb-padding-side"><span class="td-post-share-title">SHARE</span>
										<div class="td-default-sharing ">
											<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
										   <div class="clearfix"></div>
										</div>
									</div>

									<div class="post-image">
                                        <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                                            <div>
                                                <div class="img-thumbnail" style="display:inherit;">
                                                    <img style="width:100%" class="img-responsive" src="{{('/thumbnails/'.$berita->thumbnail)}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p>
                                    	{!! $berita->isi_berita !!}
                                    </p>

                                    <div>
                      <hr>
                      <h3>Komentar :</h3>
                      </div>
                                    <form action="/lihat/{{$berita->id}}/komentar" method="POST">
                        @csrf
                        <div class="form-group" style="width: 100%;">
                          <textarea name="isi_komentar" class="form-control @error('isi_komentar') is invalid @enderror ml-3" rows="3" value="{{old('isi_komentar')}}"></textarea>
                        </div>
                        @error('isi_komentar')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                        @enderror

                        <button type="submit" class="btn btn-primary ml-3">Buat Komentar</button>
                    </form>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <aside class="siderbar">
							<h4 class="heading-primary">Latest News</h4>
                            <ul class="nav nav-list mb-xlg">
							<li><a href='judul-berita'>Judul Berita</a></li><li><a href='rsud-h-bakri-sungai-penuh'>RSUD H. BAKRI Sungai Penuh</a></li><li><a href='solidaritas-tanpa-batas-untuk-rohingya'>Solidaritas Tanpa Batas untuk Rohingya</a></li><li><a href='7-efek-buruk-dari-konsumsi-obat-tidur'>7 Efek Buruk dari Konsumsi Obat Tidur</a></li><li><a href='apple-iwatch-bakal-dirilis-bulan-depan'>Apple iWatch Bakal Dirilis Bulan Depan</a></li><li><a href='pentax-qs1-kamera-mirorless-style-retro'>Pentax Q-S1 Kamera Mirorless Style Retro</a></li><li><a href='jabatan-belum-tuntas-risma-akan-tolak-tawaran-jadi-menteri'>Risma Akan Tolak Tawaran Jadi Menteri</a></li><li><a href='jokowi-janji-matimatian-bela-palestina'>Jokowi janji mati-matian bela Palestina</a></li>                            </ul>
                            <hr />
							
                            <h4 class="heading-primary">Kategori</h4>
                            <ul class="nav nav-list mb-xlg">
                            @foreach($kategori as $item)
								<li>
									<a href="#">{{$item->nama_kategori}}</a>
								</li>
							@endforeach
							</ul>                       
                        </aside>
                    </div>
                </div>
            </div>
       

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b878e417c0d681d"></script></div>

        

<!--Footer Start-->
@include('frontend.template2.footer')

    </div>

    


  <!-- Vendor -->
<script src="http://localhost/webdinas/template/dinas-1/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/common/common.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/isotope/jquery.isotope.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/vide/vide.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/slider-bootstrap/slider-bootstrap.js"></script>
<script src="http://localhost/webdinas/template/dinas-1/vendor/dataTables/datatables.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="http://localhost/webdinas/template/dinas-1/js/theme.js"></script>

<!-- Theme Custom -->
<script src="http://localhost/webdinas/template/dinas-1/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="http://localhost/webdinas/template/dinas-1/js/theme.init.js"></script>
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
</script>
</body>
</html>
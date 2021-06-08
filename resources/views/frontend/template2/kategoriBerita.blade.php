

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
			<div class="container">
				<br/>
				<h2>Semua Berita</h2>
                <div class="row" style="padding-top:15px;"> 
                    <div class="col-md-9">
                        <div class="blog-post single-post">

                        	@include('frontend.template2.artikel', [
                				'kategoriBerita' => $kategoriBerita
            				])
						                           
						                            
						</div>
						<div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
											
									<ul class="pagination float--right">
										<li>
										<span class='current'>1</span><a href="http://localhost/webdinas/berita/index/15" data-ci-pagination-page="2">2</a><a href="http://localhost/webdinas/berita/index/30" data-ci-pagination-page="3">3</a><a href="http://localhost/webdinas/berita/index/15" data-ci-pagination-page="2" rel="next">&gt;</a><a href="http://localhost/webdinas/berita/index/60" data-ci-pagination-page="5">Last &rsaquo;</a>										</li>
									</ul>
									
								</div>
                    </div>

                    <div class="col-md-3">
                        <aside class="siderbar">
							<h4 class="heading-primary">Latest News</h4>
                            <ul class="nav nav-list mb-xlg">
							<li><a href='judul-berita'>Judul Berita</a></li><li><a href='rsud-h-bakri-sungai-penuh'>RSUD H. BAKRI Sungai Penuh</a></li><li><a href='solidaritas-tanpa-batas-untuk-rohingya'>Solidaritas Tanpa Batas untuk Rohingya</a></li><li><a href='7-efek-buruk-dari-konsumsi-obat-tidur'>7 Efek Buruk dari Konsumsi Obat Tidur</a></li><li><a href='apple-iwatch-bakal-dirilis-bulan-depan'>Apple iWatch Bakal Dirilis Bulan Depan</a></li><li><a href='pentax-qs1-kamera-mirorless-style-retro'>Pentax Q-S1 Kamera Mirorless Style Retro</a></li><li><a href='jabatan-belum-tuntas-risma-akan-tolak-tawaran-jadi-menteri'>Risma Akan Tolak Tawaran Jadi Menteri</a></li><li><a href='jokowi-janji-matimatian-bela-palestina'>Jokowi janji mati-matian bela Palestina</a></li>                            </ul>
                            <hr />
							
                            <h4 class="heading-primary">Categories</h4>
                            <ul class="nav nav-list mb-xlg">
                                                                </ul>
                            <hr />
                            
                       
                        </aside>
                    </div>
                </div>
            </div>
       



</div>

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
@php

$kategori = App\Models\Kategori::where('parent', null)->get();

@endphp

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- start: Meta -->
    <title>Web Resmi Kecamatan Tarogong Kidul</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Berita Indonesia terkini terpercaya, dan terpopuler, politik, ekonomi, tekno, otomotif, dan olahraga ditulis lengkap dan akurat.">
    <meta name="keywords" content="berita, internasional, nasional, daerah, olahraga, otomotif, teknologi, news, hiburan, entertainment, indonesia, swarakalibata, lokomedia">
    <meta name="author" content="lokomedia.web.id">
    <meta name="robots" content="all,index,follow">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta NAME="Distribution" CONTENT="Global">
    <meta NAME="Rating" CONTENT="General">
    <link rel="shortcut icon" href="{{asset('garut.png')}}" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('frontend/template2/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/template2/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/template2/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/template2/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/template2/vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/template2/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/template2/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('frontend/template2/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/template2/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/template2/css/theme-blog.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('frontend/template2/css/skins/default.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend/template2/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('frontend/template2/vendor/modernizr/modernizr.min.js')}}"></script>

    <!-- Slider Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/template2/vendor/slider-bootstrap/slider-bootstrap.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-20166082-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-20166082-2');
    </script>



</head>

<header id="header" class="header-no-border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 190, 'stickySetTop': '-190px', 'stickyChangeLogo': false}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div style="text-align: center;">
            <img style='width:70px;' src="{{asset('garut.png')}}"/>
            <h4><b><span style=" color: #fff;">PEMERINTAH KABUPATEN GARUT</span></b></h4>
            <h4><b><span style=" color: #fff;">KECAMATAN TAROGONG KIDUL</span></b></h4>
                    </div>
                </div>


            </div>
        </div>
        <div class="header-container header-nav header-nav-center header-nav-bar header-nav-bar-primary">

            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                <i class="fa fa-bars"></i>
            </button>
            <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse" style="padding-top:3px;">
                <nav>
                    <ul class="nav nav-pills" id="mainNav">
                        <li class="">
                            <a href="/">
                                <i class="fa fa-home" style="font-size:25px;"></i>
                            </a>
                        </li>



  <li class="dropdown dropdown-mega">
  <a href="#" class="dropdown-toggle">Profil</a>
    <ul class="dropdown-menu">
    <li>
      <div class="dropdown-mega-content container">
        <div class="row">
          <div class="col-md-3">
            <h3><b>Profil</b></h3>
            <p></p>
            <!-- <a target="_blank" href="#" class="btn btn-primary text-color-light">Learn more..</a> -->
          </div>
              <div class="col-md-3">
                <span class="dropdown-mega-sub-title"><h4>Profil Dinas</h4></span>
                <ul class="dropdown-mega-sub-nav">
                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Struktur Organisasi</a></li>
                      <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Sejarah</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Visi dan Misi</a></li>
                  </ul>
              </div>
          </div>
      </div>

    </li>
  </ul>

  

@foreach($kategori as $item)
@if($item->child)
<li class="dropdown dropdown-mega">
  <a href="/Kategori-Berita/{{$item->id}}" class="dropdown-toggle">{{$item->nama_kategori}}</a>
    <ul class="dropdown-menu">
    <li>
      <div class="dropdown-mega-content container">
        <div class="row">
          <div class="col-md-3">
            <h3><b>{{$item->nama_kategori}}</b></h3>
            <p></p>
            <!-- <a target="_blank" href="#" class="btn btn-primary text-color-light">Learn more..</a> -->
          </div>
            <div class="col-md-3">
                            <span class="dropdown-mega-sub-title"><h4>Sub Kategori</h4></span>
                              @foreach($item->child as $itemChild)
                <ul class="dropdown-mega-sub-nav">
                  <li><a href="/Kategori-Berita/{{$itemChild->id}}"><i class="fa fa-chevron-right" aria-hidden="true"></i>{{$itemChild->nama_kategori}}</a></li>
                                </ul>
                                @endforeach
            </div>
        </div>
      </div>
    </li>
  </ul>
</li>
@else
<li>
  <a href="#">{{$item->nama_kategori}}</a>
</li>
@endif
@endforeach

            <li class="">
                <a href="#/">
                  Hubungi Kami
                </a>
            </li>
            <li class="hidden-xs hidden-sm" style="float:right;padding:10px 13px;">
            <form method="POST" action="#">
                            <div class="input-group" style="position:absolute; width:150px; right:50px;">
                <input name="kata" type="text" class="form-control" placeholder="Cari...">
                <span class="input-group-btn">
                <button name="cari" class="btn btn-default" type="submit">
                  <i class="fa fa-search"></i>
                </button>
                </span>
              </div>
            </form>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>
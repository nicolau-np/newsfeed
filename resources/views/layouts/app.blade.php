<?php
use App\Http\Controllers\ControllerStatics;
$dia_semana = ControllerStatics::converterDiaSemana(date('N'));
$mes = ControllerStatics::converteMes(date('m'));
$last_news = ControllerStatics::getLastNews();
$sliderNews = ControllerStatics::sliderNews();
$banners = ControllerStatics::getBanners();
$last_pub = ControllerStatics::getLasPub();
if ($type == 'category') {
$last_newsCategory = ControllerStatics::getLastNewsCategory($getCategoria->id);
$sliderNewsCategory = ControllerStatics::sliderNewsCategory($getCategoria->id);
$last_pubCategory = ControllerStatics::getLasPubCategory($getCategoria->id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Sige Okussoleka o seu blog de notícias angolanas e além fronteira trazemos para sí e sua família o melhor dos acontecimentos em torno do nosso planeta TERRA. Fique actualizado das novas notícias">
    <meta name="keywords"
        content="sigeokussoleka, SigeOkussoleka, Sige Okussoleka, SIGE, SIGE OKUSSOLEKA, angoNews, Sige News, SigeNews, SIGE NEWS, NEWS, news,">
    <meta name="author" content="Nicolau NP">
    <meta name="google-site-verification" content="hXy6FR8P_HZz-DhKfcQR5GRiiMq30TUEvnKl3NQgNLk" />
    @if ($type == 'single_page')
        <meta property="og:title" content="{{ $getNoticia->title }}" />
        <meta property="og:description" content="{{ $getNoticia->min_description }}" />
        <meta property="og:image" content="{{ asset($getNoticia->imagem) }}" />
    @endif
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logonews.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/logonews.png') }}" />


    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- google fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- for news ticker css file -->
    <link href="{{ asset('assets/css/li-scroller.css') }}" rel="stylesheet">
    <!-- slick slider css file -->
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <!-- for fancybox slider -->
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <!-- website theme file -->
    <link href="{{ asset('assets/css/theme-red.css') }}" rel="stylesheet">

    <!-- <link href="theme.css" rel="stylesheet"> -->
    <!-- main site css file -->
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        p {
            text-align: justify;
        }

    </style>

</head>

<body>
    <!-- =========================
    //////////////This Theme Design and Developed //////////////////////
    //////////// by www.wpfreeware.com======================-->

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- End Preloader -->

    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

    <div class="container">
        <!-- start header section -->
        <header id="header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_top">
                        <div class="header_top_left">
                            <ul class="top_nav">
                                <li><a href="/">Principal</a></li>
                                <li><a href="/sobre">Sobre</a></li>
                                <li><a href="/login">Login</a></li>
                            </ul>
                        </div>
                        <div class="header_top_right">
                            <p>{{ $dia_semana }}, {{ $mes }} {{ date('d') }}, {{ date('Y') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_bottom">
                        <div class="logo_area">
                            <!-- for your img logo format
              <a href="home.html" class="logo">
                <img src="" alt="logo">
              </a> -->
                            <!-- for your text logo format -->
                            <a href="#" class="logo">
                                sige <span>News</span>
                            </a>
                        </div>
                        <!-- banner_728x90.gif-->
                        <div class="add_banner">


                        </div>
                    </div>
                </div>
            </div>
        </header><!-- End header section -->
        <!-- start nav section -->
        <section id="navArea">
            <!-- Start navbar -->
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav main_nav">
                        <li class="@if ($menu=='Home' ) active @endif">
                            <a href="/"><span class="fa fa-home desktop-home"></span><span
                                    class="mobile-show">Principal</span></a>
                        </li>
                        <li class="@if ($menu=='Política' ) active @endif"><a href="/category/Política">Política</a></li>
                        <li class="@if ($menu=='Tecnologia' ) active @endif"><a href="/category/Tecnologia">Tecnologia</a></li>
                        <li class="@if ($menu=='Desporto' ) active @endif"><a href="/category/Desporto">Desporto</a></li>
                        <li class="@if ($menu=='Contactar' ) active @endif"><a href="/contact">Contactar</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </nav>
        </section><!-- End nav section -->

        <section id="newsSection">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- start news sticker -->
                    <div class="latest_newsarea">
                        @if ($type == 'category')
                            <span>Últimas {{ $getCategoria->categoria }}</span>
                        @else
                            <span>Últimas notícias</span>
                        @endif

                        <ul id="ticker01" class="news_sticker">
                            @if ($type == 'category')
                                @foreach ($last_newsCategory as $last)
                                    <li><a href="#"><img src="{{ asset($last->imagem) }}"
                                                alt="{{ $last->title }}">{{ $last->title }}</a></li>
                                @endforeach
                            @else
                                @foreach ($last_news as $last)
                                    <li><a href="#"><img src="{{ asset($last->imagem) }}"
                                                alt="{{ $last->title }}">{{ $last->title }}</a></li>
                                @endforeach
                            @endif

                        </ul>
                        <div class="social_area">
                            <ul class="social_nav">
                                <li class="facebook"><a href="#"></a></li>
                                <li class="twitter"><a href="#"></a></li>
                                <li class="flickr"><a href="#"></a></li>
                                <li class="pinterest"><a href="#"></a></li>
                                <li class="googleplus"><a href="#"></a></li>
                                <li class="vimeo"><a href="#"></a></li>
                                <li class="youtube"><a href="#"></a></li>
                                <li class="mail"><a href="mailto:info@smartnews.com"></a></li>
                            </ul>
                        </div>
                    </div><!-- End news sticker -->
                </div>
            </div>
        </section>

        <!-- start slider section -->
        @if ($type == 'home' || $type == 'category')
            <section id="sliderSection">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <!-- Set up your HTML -->
                        <div class="slick_slider">
                            @if ($type == 'category')
                                @foreach ($sliderNewsCategory as $slidernews)
                                    <div class="single_iteam">
                                        <a href="/single_page/{{ $slidernews->id }}"> <img
                                                src="{{ asset($slidernews->imagem) }}" alt="img"></a>
                                        <div class="slider_article">
                                            <h2><a class="slider_tittle"
                                                    href="/single_page/{{ $slidernews->id }}">{{ $slidernews->title }}</a>
                                            </h2>
                                            <p><?php echo $slidernews->min_description; ?></p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @foreach ($sliderNews as $slidernews)
                                    <div class="single_iteam">
                                        <a href="/single_page/{{ $slidernews->id }}"> <img
                                                src="{{ asset($slidernews->imagem) }}" alt="img"></a>
                                        <div class="slider_article">
                                            <h2><a class="slider_tittle"
                                                    href="/single_page/{{ $slidernews->id }}">{{ $slidernews->title }}</a>
                                            </h2>
                                            <p><?php echo $slidernews->min_description; ?></p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="latest_post">
                            <h2>
                                <span>Últimas publicações</span>
                            </h2>
                            <div class="latest_post_container">
                                <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                                <ul class="latest_postnav">
                                    @if ($type == 'category')
                                        @foreach ($last_pubCategory as $lastpub)
                                            <li>
                                                <div class="media">
                                                    <a href="/single_page/{{ $lastpub->id }}" class="media-left">
                                                        <img alt="{{ $lastpub->title }}"
                                                            src="{{ asset($lastpub->imagem) }}">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="/single_page/{{ $lastpub->id }}" class="catg_title">
                                                            {{ $lastpub->title }}</a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        @foreach ($last_pub as $lastpub)
                                            <li>
                                                <div class="media">
                                                    <a href="/single_page/{{ $lastpub->id }}" class="media-left">
                                                        <img alt="{{ $lastpub->title }}"
                                                            src="{{ asset($lastpub->imagem) }}">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="/single_page/{{ $lastpub->id }}" class="catg_title">
                                                            {{ $lastpub->title }}</a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif

                                </ul>
                                <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End slider section -->
        @endif

        <!-- =========================
      //////////////This Theme Design and Developed //////////////////////
      //////////// by www.wpfreeware.com======================-->

        <!-- ==================start content body section=============== -->
        @yield('content')
        <!-- ==================End content body section=============== -->
        <footer id="footer">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInLeftBig">
                            <h2>Imagens do Flickr</h2>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInDown">
                            <h2>Tag</h2>
                            <ul class="tag_nav">
                                <li><a href="#">Jogos</a></li>
                                <li><a href="#">Desportos</a></li>
                                <li><a href="#">Moda</a></li>
                                <li><a href="#">Negócios</a></li>
                                <li><a href="#">Estilo de Vida</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Photo</a></li>
                                <li><a href="#">Slider</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInRightBig">
                            <h2>Contactar</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.</p>
                            <address>
                                Bairro Helder Neto . Lubango Huíla, ANGOLA Telefone: 946-216-795
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <p class="copyright">
                    Todos os direitos reservados <a href="/">angoNews</a>
                </p>
                <p class="developer">Developed By <a href="#" rel="nofollow">Nicolau NP</a></p>
            </div>
        </footer>
    </div> <!-- /.container -->


    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- For content animatin  -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- bootstrap js file -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- slick slider js file -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- news ticker jquery file -->
    <script src="{{ asset('assets/js/jquery.li-scroller.1.0.js') }}"></script>
    <!-- for news slider -->
    <script src="{{ asset('assets/js/jquery.newsTicker.min.js') }}"></script>
    <!-- for fancybox slider -->
    <script src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>
    <!-- custom js file include -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    <!-- =========================
        //////////////This Theme Design and Developed //////////////////////
        //////////// by www.wpfreeware.com======================-->

    <script type="text/javascript">
        var infolinks_pid = 3364430;
        var infolinks_wsid = 0;

    </script>
    <script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>
</body>

</html>

<?php 
use App\Http\Controllers\ControllerStatics;
$dia_semana = ControllerStatics::converterDiaSemana(date('N'));
$mes = ControllerStatics::converteMes(date('m'));
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Angola News">
    <meta name="keywords" content="Angola News, fique actualizado das novas notícias">
    <meta name="author" content="Nicolau NP">
  <title>{{$title}}</title>
    <link rel="shortcut icon" href="{{asset('assets/img/logonews.png')}}" type="image/x-icon" />
      <link rel="apple-touch-icon" href="{{asset('assets/img/logonews.png')}}" />


    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- google fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>   
    <!-- for news ticker css file -->
     <link href="{{asset('assets/css/li-scroller.css')}}" rel="stylesheet">
     <!-- slick slider css file -->
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <!-- for fancybox slider -->
     <link href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet">    
    <!-- website theme file -->
    <link href="{{asset('assets/css/theme-red.css')}}" rel="stylesheet">
 
     <!-- <link href="theme.css" rel="stylesheet"> -->
    <!-- main site css file -->    
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
              <p>{{$dia_semana}}, {{$mes}} {{date('d')}}, {{date('Y')}}</p>
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
                Angola <span>News</span>
              </a> 
            </div>
            <!-- banner_728x90.gif-->
            <div class="add_banner">
              <a href="#"><img src="https://thumbs.gfycat.com/AnchoredPointedBluebird-size_restricted.gif" alt="img"></a>
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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav main_nav">
            <li class="active"><a href="/"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Principal</span></a></li>
            <li><a href="#">Política</a></li>   
            <li><a href="#">Tecnologia</a></li> 
            <li><a href="#">Desporto</a></li> 
            <li><a href="/contact">Contactar</a></li>
          </ul>           
        </div><!--/.nav-collapse -->      
      </nav>
    </section><!-- End nav section -->
	
    <section id="newsSection">
      <div class="row">
        <div class="col-lg-12 col-md-12">
           <!-- start news sticker -->
          <div class="latest_newsarea">      
            <span>Últimas notícias</span>
            <ul id="ticker01" class="news_sticker">
              <li><a href="#"><img src="{{asset('assets/img/news_thumbnail3.jpg')}}" alt="">My First News Item</a></li> 
              <li><a href="#"><img src="{{asset('assets/img/news_thumbnail3.jpg')}}" alt="">My Second News Item</a></li>
              <li><a href="#"><img src="{{asset('assets/img/news_thumbnail3.jpg')}}" alt="">My Third News Item</a></li>
              <li><a href="#"><img src="{{asset('assets/img/news_thumbnail3.jpg')}}" alt="">My Four News Item</a></li> 
              <li><a href="#"><img src="{{asset('assets/img/news_thumbnail3.jpg')}}" alt="">My Five News Item</a></li>
              <li><a href="#"><img src="{{asset('assets/img/news_thumbnail3.jpg')}}" alt="">My Six News Item</a></li>
              <li><a href="#"><img src="{{asset('assets/img/news_thumbnail3.jpg')}}" alt="">My Seven News Item</a></li> 
              <li><a href="#"><img src="{{asset('assets/img/news_thumbnail3.jpg')}}" alt="">My Eight News Item</a></li>
              <li><a href="#"><img src="{{asset('assets/img/news_thumbnail2.jpg')}}" alt="">My Nine News Item</a></li>          
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
    @if ($menu=="Home")
    <section id="sliderSection">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <!-- Set up your HTML -->
          <div class="slick_slider">
            <div class="single_iteam">
              <a href="single_page.html"> <img src="{{asset('assets/img/slider_img4.jpg')}}" alt="img"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
              </div>
            </div>
            <div class="single_iteam">
              <a href="single_page.html"> <img src="{{asset('assets/img/slider_img2.jpg')}}" alt="img"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
              </div>
            </div>
            <div class="single_iteam">
              <a href="single_page.html"> <img src="{{asset('assets/img/slider_img3.jpg')}}" alt="img"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
              </div>
            </div>
            <div class="single_iteam">
              <a href="single_page.html"> <img src="{{asset('assets/img/slider_img1.jpg')}}" alt="img"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="latest_post">
            <h2><span>Útimas publicações</span></h2>
            <div class="latest_post_container">
              <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
              <ul class="latest_postnav">
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                    </div>
                  </div>
                </li>
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
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <address>
                Bairro Helder Neto . Lubango Huíla, ANGOLA Telefone: 946-216-795 
              </address>              
            </div>
          </div>
        </div>
      </div>       
      <div class="footer_bottom">
        <p class="copyright">
          Todos os direitos reservados <a href="/">Notícias</a>
        </p>
        <p class="developer">Developed By <a href="#" rel="nofollow">Nicolau NP</a></p>
      </div>    
    </footer>
  </div> <!-- /.container -->
  

  <!-- jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
  <!-- For content animatin  -->
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
  <!-- bootstrap js file -->
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
  <!-- slick slider js file -->
  <script src="{{asset('assets/js/slick.min.js')}}"></script> 
  <!-- news ticker jquery file -->
  <script src="{{asset('assets/js/jquery.li-scroller.1.0.js')}}"></script>
  <!-- for news slider -->
  <script src="{{asset('assets/js/jquery.newsTicker.min.js')}}"></script>
  <!-- for fancybox slider -->
  <script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
  <!-- custom js file include -->    
  <script src="{{asset('assets/js/custom.js')}}"></script> 
 

  <!-- =========================
        //////////////This Theme Design and Developed //////////////////////
        //////////// by www.wpfreeware.com======================-->
    
      
  </body>
</html>
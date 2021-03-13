<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NewsFeed</title>

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
    <!-- <link href="{{asset('assets/css/theme-red.css')}}" rel="stylesheet"> -->
 
     <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet">
    <!-- main site css file -->    
    <link href="{{asset('style.css')}}" rel="stylesheet">
 

    <!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
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
                <li><a href="home.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            <div class="header_top_right">
              <p>Friday, December 05, 2014</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="header_bottom">
            <div class="logo_area">
              <!-- for your img logo format
              <a href="home.html" class="logo">
                <img src="{{asset('assets/img/logo.jpg')}}" alt="logo">
              </a> -->
              <!-- for your text logo format -->
               <a href="#" class="logo">
                News <span>Feed</span>
              </a> 
            </div>
            <div class="add_banner">
              <a href="#"><img src="{{asset('assets/img/addbanner_728x90_V1.jpg')}}" alt="img"></a>
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
            <li class="active"><a href="home.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
            <li><a href="#">Technology</a></li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Android</a></li>
                <li><a href="#">Samsung</a></li>
                <li><a href="#">Nokia</a></li>
                <li><a href="#">Walton Mobile</a></li>
                <li><a href="#">Sympony</a></li>               
              </ul>
            </li>
            <li><a href="#">Laptops</a></li> 
            <li><a href="#">Tablets</a></li> 
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="404.html">404 Page</a></li>
          </ul>           
        </div><!--/.nav-collapse -->      
      </nav>
    </section><!-- End nav section -->
	
    <section id="newsSection">
      <div class="row">
        <div class="col-lg-12 col-md-12">
           <!-- start news sticker -->
          <div class="latest_newsarea">      
            <span>Latest News</span>
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
            <h2><span>Latest post</span></h2>
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
     <!-- =========================
      //////////////This Theme Design and Developed //////////////////////
      //////////// by www.wpfreeware.com======================-->

    <!-- ==================start content body section=============== -->
    <section id="contentSection">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="left_content">
            <div class="single_post_content">
              <h2><span>Business</span></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav  wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                      <a href="single_page.html" class="featured_img">
                          <img alt="img" src="{{asset('assets/img/featured_img1.jpg')}}">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a>
                      </figcaption>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                        
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- start 2 style category design -->
            <div class="fashion_technology_area">
              <div class="fashion">
                <div class="single_post_content">
                  <h2><span>Fashion</span></h2>              
                  <ul class="business_catgnav wow fadeInDown">
                    <li>
                      <figure class="bsbig_fig">
                        <a href="single_page.html" class="featured_img">
                            <img alt="img" src="{{asset('assets/img/featured_img2.jpg')}}">
                            <span class="overlay"></span>
                        </a>
                        <figcaption>
                          <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a>
                        </figcaption>
                          <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                      </figure>
                    </li>
                  </ul>
                  <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                        
                      </div>
                    </div>
                  </li>
                </ul>
                </div>
              </div>
              <div class="technology">
                <div class="single_post_content">
                  <h2><span>Technology</span></h2>              
                  <ul class="business_catgnav">
                    <li>
                      <figure class="bsbig_fig wow fadeInDown">
                        <a href="single_page.html" class="featured_img">
                            <img alt="img" src="{{asset('assets/img/featured_img3.jpg')}}">
                            <span class="overlay"></span>
                        </a>
                        <figcaption>
                          <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a>
                        </figcaption>
                          <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                      </figure>
                    </li>
                  </ul>
                  <ul class="spost_nav">
                    <li>
                      <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                        </a>
                        <div class="media-body">
                          <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                        </a>
                        <div class="media-body">
                          <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                        </a>
                        <div class="media-body">
                          <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                      
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                        </a>
                        <div class="media-body">
                          <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                       
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End 2 style category design -->
            <!-- start photography stye design -->
            <div class="single_post_content">
              <h2><span>Photography</span></h2>
              <ul class="photograph_nav  wow fadeInDown">                
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                    <a class="fancybox-buttons" data-fancybox-group="button" href="{{asset('assets/img/photograph_img2.jpg')}}" title="Photography Ttile 1">
                    <img src="{{asset('assets/img/photograph_img2.jpg')}}" alt="img06"/></a>  
                    </figure>
                  </div>
                </li>
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                    <a class="fancybox-buttons" data-fancybox-group="button" href="{{asset('assets/img/photograph_img3.jpg')}}" title="Photography Ttile 2">
                      <img src="{{asset('assets/img/photograph_img3.jpg')}}" alt="img06"/>
                      </a>  
                    </figure>
                  </div>
                </li>
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                    <a class="fancybox-buttons" data-fancybox-group="button" href="{{asset('assets/img/photograph_img4.jpg')}}" title="Photography Ttile 3">
                      <img src="{{asset('assets/img/photograph_img4.jpg')}}" alt="img06"/>
                      </a>                        
                    </figure>
                  </div>
                </li>
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                       <a class="fancybox-buttons" data-fancybox-group="button" href="{{asset('assets/img/photograph_img4.jpg')}}" title="Photography Ttile 4">
                        <img src="{{asset('assets/img/photograph_img4.jpg')}}" alt="img06"/>
                      </a>                           
                    </figure>
                  </div>
                </li>                
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                     <a class="fancybox-buttons" data-fancybox-group="button" href="{{asset('assets/img/photograph_img2.jpg')}}" title="Photography Ttile 5">
                        <img src="{{asset('assets/img/photograph_img2.jpg')}}" alt="img06"/>
                      </a>                          
                    </figure>
                  </div>
                </li>
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                       <a class="fancybox-buttons" data-fancybox-group="button" href="{{asset('assets/img/photograph_img3.jpg')}}" title="Photography Ttile 6">
                        <img src="{{asset('assets/img/photograph_img3.jpg')}}" alt="img06"/>
                      </a>                           
                    </figure>
                  </div>
                </li>
              </ul>            
            </div>
            <!-- End photography stye design -->
            <!-- start games category design -->
            <div class="single_post_content">
              <h2><span>Games</span></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig  wow fadeInDown">
                      <a class="featured_img" href="single_page.html">
                          <img src="{{asset('assets/img/featured_img1.jpg')}}" alt="img">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a>
                      </figcaption>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                       
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- End games category design -->            
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <aside class="right_content">
            <div class="single_sidebar">
              <h2><span>Popular Post</span></h2>
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                       
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- start tab section -->
            <div class="single_sidebar">
               <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
                <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
                <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>               
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="category">
                  <ul>
                    <li class="cat-item"><a href="#">Sports</a></li>
                    <li class="cat-item"><a href="#">Fashion</a></li>
                    <li class="cat-item"><a href="#">Business</a></li>
                    <li class="cat-item"><a href="#">Technology</a></li>
                    <li class="cat-item"><a href="#">Games</a></li>
                    <li class="cat-item"><a href="#">Life & Style</a></li>
                    <li class="cat-item"><a href="#">Photography</a></li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="video">
                  <div class="vide_area">                   
                    <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="comments">
                  <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img1.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset('assets/img/post_img2.jpg')}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                       
                    </div>
                  </div>
                </li>
              </ul>
                </div>
              </div>            
            </div>
            <!-- End tab section -->
            <!-- sponsor add -->
            <div class="single_sidebar wow fadeInDown">
              <h2><span>Sponsor</span></h2>
              <a class="sideAdd" href="#"><img src="{{asset('assets/img/add_img.jpg')}}" alt="img"></a>
            </div>
            <!-- End sponsor add -->
             <!-- Category Archive -->
            <div class="single_sidebar wow fadeInDown">
              <h2><span>Category Archive</span></h2>
              <select class="catgArchive">
                <option>Select Category</option>
                <option>Life styles</option>
                <option>Sports</option>
                <option>Technology</option>
                <option>Treads</option>
              </select>
            </div>
            <!-- End category Archive -->
              <!-- sponsor add -->
            <div class="single_sidebar wow fadeInDown">
              <h2><span>Links</span></h2>
              <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Rss Feed</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Life & Style</a></li>
              </ul>
            </div>
            <!-- End sponsor add -->
          </aside>
        </div>
      </div>  
    </section>
    <!-- ==================End content body section=============== -->    
    <footer id="footer">       
      <div class="footer_top">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInLeftBig">
              <h2>Flickr Images</h2>
                       
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInDown">
              <h2>Tag</h2>
              <ul class="tag_nav">
                <li><a href="#">Games</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Life & Style</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Photo</a></li>
                <li><a href="#">Slider</a></li>
              </ul>              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInRightBig">
              <h2>Contact</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <address>
                Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567 
              </address>              
            </div>
          </div>
        </div>
      </div>       
      <div class="footer_bottom">
        <p class="copyright">
          All Rights Reserved <a href="home.html">NewsFeed</a>
        </p>
        <p class="developer">Developed By <a href="http://wpfreeware.com" rel="nofollow">Wpfreeware</a></p>
      </div>    
    </footer>
  </div> <!-- /.container -->
  

  <!-- jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}"></script> 
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
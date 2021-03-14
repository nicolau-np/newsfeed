@extends('layouts.app_error')
@section('content')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
        <!-- start error page -->
          <div class="error_page">
            <h3>Nos desculpe</h3>
            <h1>404</h1>
            <p>Infelizmente, a página que você estava procurando não foi encontrada. Pode estar temporariamente indisponível, movido ou não existe mais</p>
            <span></span>
            <a href="/" class="wow fadeInLeftBig">Vá para a página inicial</a>
          </div> 
          <!-- End error page -->           
        </div>
      </div>
     
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Publicações populares</span></h2>
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
        </aside>
      </div>
    </div>  
  </section>
@endsection
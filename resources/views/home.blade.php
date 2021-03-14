@extends('layouts.app')

@section('content')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Negócios</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>

                  <figure class="bsbig_fig">
                    <a href="single_page.html" class="featured_img">
                        <img alt="img" src="{{asset($getNegocios->first()->imagem)}}" style="height: 13em;">
                        <span class="overlay"></span>
                    </a>
                    <figcaption>
                      <a href="single_page.html">{{$getNegocios->first()->title}}</a>
                    </figcaption>
                      <p>
                        <?php 
                          echo $getNegocios->first()->min_description;
                        ?>
                      </p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                @foreach ($getNegocios as $negocios)
                    <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                      <img alt="{{$negocios->title}}" src="{{asset($negocios->imagem)}}">
                    </a>
                    <div class="media-body">
                    <a href="single_page.html" class="catg_title">{{$negocios->title}}</a>                        
                    </div>
                  </div>
                </li>
                @endforeach
               </ul>
            </div>
          </div>
          <!-- start 2 style category design -->
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Moda</span></h2>              
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                     <figure class="bsbig_fig">
                      <a href="single_page.html" class="featured_img">
                          <img alt="img" src="{{asset($getModa->first()->imagem)}}" style="height: 16.3em;">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                      <a href="single_page.html">{{$getModa->first()->title}}</a>
                      </figcaption>
                        <p>
                          <?php 
                            echo $getModa->first()->min_description;
                          ?>
                        </p>
                    </figure>  

                  </li>
                </ul>
                <ul class="spost_nav">

              @foreach ($getModa as $moda)
                <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="{{asset($moda->imagem)}}">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title">{{$moda->title}}</a>                        
                    </div>
                  </div>
                </li>
              @endforeach
              </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Tecnologia</span></h2>              
                <ul class="business_catgnav">
                  <li>

                    <figure class="bsbig_fig wow fadeInDown">
                      <a href="single_page.html" class="featured_img">
                          <img alt="img" src="{{asset($getTecnologia->first()->imagem)}}" style="height: 16.3em;">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                      <a href="single_page.html">{{$getTecnologia->first()->title}}</a>
                      </figcaption>
                        <p>
                          <?php 
                            echo $getTecnologia->first()->min_description;
                            ?>
                        </p>
                    </figure>

                  </li>
                </ul>
                <ul class="spost_nav">
                  @foreach ($getTecnologia as $tecnologia)
                    <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="{{asset($tecnologia->imagem)}}">
                      </a>
                      <div class="media-body">
                      <a href="single_page.html" class="catg_title">{{$tecnologia->title}}</a>                        
                      </div>
                    </div>
                  </li>
                  @endforeach
               </ul>
              </div>
            </div>
          </div>
          <!-- End 2 style category design -->
          <!-- start photography stye design -->
          <div class="single_post_content">
            <h2><span>Galeria</span></h2>
            <ul class="photograph_nav  wow fadeInDown"> 
                @foreach ($getGaleria as $galeria)
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                    <a class="fancybox-buttons" data-fancybox-group="button" href="{{asset($galeria->imagem)}}" title="{{$galeria->title}}">
                    <img src="{{asset($galeria->imagem)}}" alt="{{$galeria->title}}"/></a>  
                    </figure>
                  </div>
                </li>
                @endforeach             
              
            
            </ul>            
          </div>
          <!-- End photography stye design -->
          <!-- start games category design -->
          <div class="single_post_content">
            <h2><span>Jogos</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown">
                    <a class="featured_img" href="single_page.html">
                    <img src="{{asset($getJogos->first()->imagem)}}" alt="{{$getJogos->first()->title}}">
                        <span class="overlay"></span>
                    </a>
                    <figcaption>
                      <a href="single_page.html">{{$getJogos->first()->title}}</a>
                    </figcaption>
                      <p>
                        <?php 
                          echo $getJogos->first()->min_description;
                        ?>
                      </p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                @foreach ($getJogos as $jogos)
                     <li>
                  <div class="media wow fadeInDown">
                    <a href="single_page.html" class="media-left">
                    <img alt="{{$jogos->title}}" src="{{asset($jogos->imagem)}}">
                    </a>
                    <div class="media-body">
                    <a href="single_page.html" class="catg_title">{{$jogos->min_description}}</a>                        
                    </div>
                  </div>
                </li>
                @endforeach
              
              </ul>
            </div>
          </div>
          <!-- End games category design -->            
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
          <!-- start tab section -->
          <div class="single_sidebar">
             <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Categorias</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  @foreach ($getCategorias as $categorias)
                   <li class="cat-item"><a href="#">{{$categorias->categoria}}</a></li>
                  @endforeach
                 </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">                   
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
             
            </div>            
          </div>
          <!-- End tab section -->
          <!-- sponsor add -->
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Patrocinador</span></h2>
            <a class="sideAdd" href="#"><img src="{{asset('assets/img/add_img.jpg')}}" alt="img"></a>
          </div>
          <!-- End sponsor add -->
           <!-- Category Archive -->
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Arquivo de Categoria</span></h2>
            <select class="catgArchive">
              @foreach ($getCategorias as $categorias)
              <option>{{$categorias->categoria}}</option>
              @endforeach
             </select>
          </div>
          <!-- End category Archive -->
            <!-- sponsor add -->
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="/login">Login</a></li>
              <li><a href="#">Estilo de Vida</a></li>
            </ul>
          </div>
          <!-- End sponsor add -->
        </aside>
      </div>
    </div>  
  </section>
@endsection

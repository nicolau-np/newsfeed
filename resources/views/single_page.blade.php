<?php 
use App\Http\Controllers\ControllerStatics;
$pub_populares = ControllerStatics::getPubPopulares();
?>
@extends('layouts.app')
@section('content')
    
    <!-- ==================start content body section=============== -->
    <section id="contentSection">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
              <div class="single_page">
                <ol class="breadcrumb">
                  <li><a href="/">Home</a></li>
                    <li><a href="#" class="active">{{$getNoticia->categoria->categoria}}</a></li>
                 </ol>
                <h1>{{$getNoticia->title}}</h1>
                <div class="post_commentbox">
                  <a href="#"><i class="fa fa-user"></i>angoNews</a>
                  <span><i class="fa fa-calendar"></i>{{date('d-m-Y', strtotime($getNoticia->created_at))}} {{date('H:i', strtotime($getNoticia->created_at))}}</span>
                  <a href="#"><i class="fa fa-tags"></i>{{$getNoticia->categoria->categoria}}</a>
                </div>
                <div class="single_page_content">
                <img class="img-center" src="{{asset($getNoticia->imagem)}}" alt="{{$getNoticia->title}}">
                  <p>
                    <?php 
                    echo $getNoticia->description;
                    ?>
                  </p>
                  <blockquote>
                    <?php 
                        echo $getNoticia->min_description;
                    ?>
                  
                </div>
                <div class="social_link">
                  <ul class="sociallink_nav">
                  <li><a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/intent/tweet?url={{url()->current()}}&text="><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{url()->current()}}"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://pinterest.com/pin/create/button/?url={{url()->current()}}&media=&description="><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>
                
                <div class="related_post">
                  <h2>Publica????es Relacionadas <i class="fa fa-thumbs-o-up"></i></h2>
                  <ul class="spost_nav wow fadeInDown animated">
                    @foreach ($getNoticiasRelacionadas as $relacionadas)
                        <li>
                      <div class="media">
                      <a class="media-left" href="/single_page/{{$relacionadas->id}}">
                        <img src="{{asset($relacionadas->imagem)}}" alt="{{$relacionadas->title}}">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="/single_page/{{$relacionadas->id}}">{{$relacionadas->title}}</a>                        
                        </div>
                      </div>
                    </li>
                    @endforeach
                    

                  </ul>
                </div>
              </div>            
            </div>
          </div>
          <nav class="nav-slit">
                <a class="prev" href="/item1">
                  <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
                  <div>
                    <h3>City Lights</h3>
                    <img src="{{asset('assets/img/post_img1.jpg')}}" alt="Previous thumb"/>
                  </div>
                </a>
                <a class="next" href="/item3">
                  <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
                  <div>
                    <h3>Street Hills</h3>
                    <img src="{{asset('assets/img/post_img1.jpg')}}" alt="Next thumb"/>
                  </div>
                </a>
              </nav>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <aside class="right_content">
              <div class="single_sidebar">
                <h2><span>Publica????es Populares</span></h2>
                <ul class="spost_nav">
                  @foreach ($pub_populares as $pub_popular)
                  <li>
                    <div class="media wow fadeInDown">
                    <a href="/single_page/{{$pub_popular->id}}" class="media-left">
                        <img alt="{{$pub_popular->title}}" src="{{asset($pub_popular->imagem)}}">
                      </a>
                      <div class="media-body">
                        <a href="/single_page/{{$pub_popular->id}}" class="catg_title">{{$pub_popular->title}}</a>                        
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              <!-- start tab section -->
              <div class="single_sidebar">
                 <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Categoria</a></li>
                  <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
                  
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="category">
                    <ul>
                        @foreach ($getCategorias as $categorias)
                            <li class="cat-item"><a href="/category/{{$categorias->categoria}}">{{$categorias->categoria}}</a></li>
                        @endforeach
                    </ul>
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
  
@endsection


 



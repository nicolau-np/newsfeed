<?php 
use App\Http\Controllers\ControllerStatics;
$pub_populares = ControllerStatics::getPubPopulares();
?>
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
        </aside>
      </div>
    </div>  
  </section>
@endsection
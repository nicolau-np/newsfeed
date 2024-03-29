<?php 
use App\Http\Controllers\ControllerStatics;
$pub_populares = ControllerStatics::getPubPopulares();
?>
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
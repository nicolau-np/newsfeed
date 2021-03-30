@extends('layouts.app')
@section('content')
     <!-- ==================start content body section=============== -->
     <section id="contentSection">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
            <!-- start contact area -->
              <div class="contact_area">
                <h2>Entre em contato conosco</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <form class="contact_form">
                  <input class="form-control" type="text" placeholder="Nome*">
                  <input class="form-control" type="email" placeholder="Email*">
                  <textarea class="form-control" cols="30" rows="10" placeholder="Mensagem*"></textarea>
                  <input type="submit" value="Enviar Mensagem">                
                </form>
              </div>
              <!-- End contact area -->            
            </div>
          </div>
         
          <div class="col-lg-4 col-md-4 col-sm-4">
            <aside class="right_content">
             @include('includes.noticias_populares') 
            </aside>
          </div>
        </div>  
      </section>
      <!-- ==================End content body section=============== -->    
  
  
@endsection
   
  

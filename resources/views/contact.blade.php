@extends('layouts.app')
@section('content')
     <!-- ==================start content body section=============== -->
     <section id="contentSection">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
            <!-- start contact area -->
              <div class="contact_area">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <form class="contact_form">
                  <input class="form-control" type="text" placeholder="Name*">
                  <input class="form-control" type="email" placeholder="Email*">
                  <textarea class="form-control" cols="30" rows="10" placeholder="Message*"></textarea>
                  <input type="submit" value="Send Message">                
                </form>
              </div>
              <!-- End contact area -->            
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
            </aside>
          </div>
        </div>  
      </section>
      <!-- ==================End content body section=============== -->    
  
  
@endsection
   
  

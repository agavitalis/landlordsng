@extends('layouts.app')

@section('header')
    @include("partials.otherHeader")
@endsection
 
@section('content')

<!--Contact-->
<section id="contact-us">
  <div class="contact">
    <div id="map"></div>
    <div class="container">
      <div class="row">
        
           <div class="col-md-4 hidden-xs">
           </div> 
           
           <div class="col-md-4 hidden-xs">
           </div> 
           
           <div class="col-md-4 col-sm-4 col-xs-12  contact-text">
           
            	<div class="agent-p-contact">
                	<div class="our-agent-box bottom30">
                        <h2>get in touch</h2>
                    </div>
                    <div class="agetn-contact-2 bottom30">
                      	 <p><i class="icon-telephone114"></i> (+01) 34 56 7890</p>
                         <p><i class=" icon-icons142"></i> info@landlordsng.com</p>
                         
                         <p><i class="icon-browser2"></i>www.landlordsng.com</p>
                         <p><i class="icon-icons74"></i> Advisor Melbourne, Merrick Way, FL 12345 Australia</p>
                      </div>
                    <ul class="social_share bottom20">
            <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li>
            <li><a href="javascript:void(0)" class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i></a></li>
          </ul>
                </div>
            
            	<div class="agent-p-form">
                	<div class="our-agent-box bottom30">
                        <h2>Send us a message</h2>
                    </div>
                    
                    <div class="row">
                      <form action="#" class="callus">
                        <div class="col-md-12">
                          <div class="single-query form-group">
                            <input type="text" placeholder="Your Name" class="keyword-input">
                            </div>
                            <div class="single-query form-group">
                            <input type="text" placeholder="Phone Number" class="keyword-input">
                          </div>
                          <div class="single-query form-group">
                            <input type="text" placeholder="Email Adress" class="keyword-input">
                          </div>
                          <div class="single-query form-group">
                            <textarea placeholder="Massege" class="form-control"></textarea>
                          </div>
                          <input type="submit" value="submit now" class="btn-blue">
                          </div>
                      </form>
                      
                    </div>
                	
                </div>
                
            </div>
            
        </div>
    </div>
  </div>
</section>
<!-- Contact End -->

@endsection

@section('footer')
    @include("partials.footer")
@endsection
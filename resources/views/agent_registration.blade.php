@extends('layouts.app')

@section('header')
    @include("partials.user.otherHeader")
@endsection
 
@section('content')
<!-- Page Banner Start-->
<section class="page-banner page-banner-bg padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="p-white text-uppercase">Agent Registration</h1>
        <p class="p-white">Complete the registration process to become a LandlordsNG agent.</p>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End --> 



<!-- testimonials Start -->
<section id="contact-us" class="padding">
  <div class="container">
    
   
    <div class="row">
      <div class="col-sm-7 margin40">
        <div class="our-agent-box bottom30">
          <h2>Your Bio</h2>
        </div>
        <form class="callus">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <textarea class="form-control" placeholder="Message"></textarea>
              </div>
            </div>
            <div class="col-sm-12 row">
              <div class="row">
                <div class="col-sm-6">
                  <input type="submit" class="btn-blue uppercase border_radius" value="Complete Registration">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-5 margin40">
        <div class="agent-p-contact">
          <div class="our-agent-box bottom30">
            <h2>Agenct Details</h2>
          </div>
          <div class="agetn-contact-2 bottom30">
            <p><i class="icon-telephone114"></i> (+01) 34 56 7890</p>
            <p><i class=" icon-icons142"></i> info@castle.com</p>
            <p><i class="icon-browser2"></i>www.castle.com</p>
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
      </div>
    </div>
  </div>
</section>
<!-- testimonials End -->

@endsection

@section('footer')
    @include("partials.user.footer")
@endsection


@extends('layouts.app')

@section('header')
    @include("partials.user.otherHeader")
@endsection
 
@section('content')
<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Agent Style 1</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center ">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li><a href="#">Agent</a></li>
          <li class="active">Agent Profile</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->


<!-- Agent Profile -->
<section id="agents" class="padding">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <h3>Bohdan Kononets</h3>
          <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option congue nihil imperdiet doming…</p>
          <table class="agent_contact table">
            <tbody>
              <tr class="bottom10">
                <td><strong>Phone:</strong></td>
                <td class="text-right">(+01) 34 56 7890</td>
              </tr>
              <tr class="bottom10">
                <td><strong>Mobile:</strong></td>
                <td class="text-right">(+033) 34 56 7890</td>
              </tr>
              <tr>
                <td><strong>Email Adress:</strong></td>
                <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
              </tr>
              <tr>
                <td><strong>Skype:</strong></td>
                <td class="text-right"><a href="#.">bohdan.kononets</a></td>
              </tr>
            </tbody>
          </table>
          <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
          <ul class="social_share">
            <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li>
            <li><a href="javascript:void(0)" class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 bottom40">
        <form class="callus">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Message"></textarea>
          </div>
          <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
        </form>
      </div>

      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="images/agent-one.jpg" alt="Agents">
          </div>
        </div>
      </div>

      
      <div class="col-md-12 bottom30 top20">
        <h2 class="text-uppercase">Bohdan Properites</h2>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
      <div class="col-sm-6">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="images/b-d-property.jpg">
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#"><i class="icon-like"></i></a></span>
              <a href="#.">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-microphone"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="images/b-d-property2.jpg">
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#"><i class="icon-like"></i></a></span>
              <a href="#.">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-microphone"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="images/b-d-property3.jpg">
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#"><i class="icon-like"></i></a></span>
              <a href="#.">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-microphone"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="images/b-d-property4.jpg">
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#"><i class="icon-like"></i></a></span>
              <a href="#.">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-microphone"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 text-center">
        <ul class="pager">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Agent Profile End -->


@endsection

@section('footer')
    @include("partials.user.footer")
@endsection
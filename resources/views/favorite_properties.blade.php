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
        <h1 class="text-uppercase">Favorite properties</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">Favorite properties</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->



<!-- Favorite Properties  -->
<section id="property" class="padding_top listing1">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="f-p-links margin_bottom">
          <li><a href="profile.html"><i class="icon-icons230"></i>Profile</a></li>
          <li><a href="my_properties.html"><i class="icon-icons215"></i> My Properties</a></li>
          <li><a href="submit_property.html"><i class="icon-icons215"></i> Submit Property</a></li>
          <li><a href="favorite_properties.html" class="active"><i class="icon-icons43"></i> Favorite Properties</a></li>
          <li><a href="login.html"><i class="icon-lock-open3"></i>Logout</a></li>
        </ul>
        <h2 class="text-uppercase">My favorite Properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="property_item heading_space">
          <div class="image">
            <a href="#."><img src="images/listing1.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="#."><i class="icon-like"></i></a></li>
                <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="one">
              <ul>
                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="property_item heading_space">
          <div class="image">
            <a href="#."><img src="images/listing2.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="#."><i class="icon-like"></i></a></li>
                <li><a href="#two" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="two">
              <ul>
                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="property_item heading_space">
          <div class="image">
            <a href="#."><img src="images/listing3.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="solid">Solid Out</span>
            </div>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="#."><i class="icon-like"></i></a></li>
                <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="three">
              <ul>
                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="property_item heading_space">
          <div class="image">
            <a href="#."><img src="images/listing4.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="#."><i class="icon-like"></i></a></li>
                <li><a href="#five" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="five">
              <ul>
                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="property_item heading_space">
          <div class="image">
            <a href="#."><img src="images/listing5.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="solid">Solid Out</span>
            </div>
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="#."><i class="icon-like"></i></a></li>
                <li><a href="#six" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="six">
              <ul>
                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="property_item heading_space">
          <div class="image">
            <a href="#."><img src="images/listing6.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="#."><i class="icon-like"></i></a></li>
                <li><a href="#seven" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="seven">
              <ul>
                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="property_item heading_space">
          <div class="image">
            <a href="#."><img src="images/listing7.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="#."><i class="icon-like"></i></a></li>
                <li><a href="#eight" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="eight">
              <ul>
                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="property_item heading_space">
          <div class="image">
            <a href="#."><img src="images/listing8.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="#."><i class="icon-like"></i></a></li>
                <li><a href="#nine" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="nine">
              <ul>
                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="property_item heading_space">
          <div class="image">
            <a href="#."><img src="images/listing9.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="#."><i class="icon-like"></i></a></li>
                <li><a href="#ren" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="ren">
              <ul>
                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="padding_bottom text-center">
        <ul class="pager">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Favorite Properties End -->


@endsection

@section('footer')
    @include("partials.user.footer")
@endsection
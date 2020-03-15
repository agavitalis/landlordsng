@extends('layouts.app')

@section('header')
    @include("partials.otherHeader")
@endsection
 
@section('content')
<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Listing Style 1</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li><a href="#">Listing</a></li>
          <li class="active">Listing - 1</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->



<!-- Listing Start -->
<section id="listing1" class="listing1 padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-9">
            <h2 class="uppercase">PROPERTY LISTINGS</h2>
            <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
          </div>
          <div class="col-md-3">
          <form class="callus">
            <div class="single-query">
              <div class="intro">
                <select>
                  <option class="active">Default Order</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                </select>
              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="images/listing1.jpg" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">$8,600 Per Month</span>
                </div>
                <span class="tag_t">For Sale</span> 
                <span class="tag_l">Featured</span>
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
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
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
          
          <div class="col-sm-6">
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
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
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

          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="images/listing7.jpg" alt="latest property" class="img-responsive"></a>
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
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
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

          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="images/listing4.jpg" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">$8,600 Per Month</span>
                </div>
                <span class="tag_t">For Sale</span> 
                <span class="tag_l">Featured</span>
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
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
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

          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="images/listing5.jpg" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">$8,600 Per Month</span>
                </div>
                <span class="tag_t">For Sale</span> 
                <span class="tag_l">Featured</span>
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
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
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

          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="images/listing6.jpg" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">$8,600 Per Month</span>
                </div>
                <span class="tag_t">For Sale</span> 
                <span class="tag_l">Featured</span>
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
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
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
        </div>
        
        <div class="padding_bottom text-center">
          <ul class="pager">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div>
      </div>
      <!-- sidebar -->
      @include("partials.sideBarSearch")
      <!-- sidebar -->
    </div>
  </div>
</section>
<!-- Listing end -->
@endsection

@section('footer')
    @include("partials.footer")
@endsection
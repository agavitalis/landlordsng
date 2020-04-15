@extends('layouts.app')

@section('indexSlider')
@include('partials.user.indexSlider')
@endsection

@section('header')
@include('partials.user.indexHeader')
@endsection

@section('indexAdvancedSearch')
@include('partials.user.indexAdvancedSearch')
@endsection

@section('content')

<!-- Types -->
<section id="types" class="padding bg_gallery">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">Property Types</h2>
                <p class="heading_space">We are proud to present to you some of the best homes, apartments, offices e.g.
                    across Australia for affordable prices.</p>
            </div>
        </div>
        <div id="type-grid" class="cbp cbp-l-grid-mosaic-flat">
        @foreach($property_types as $property_type)
            <div class="cbp-item">
                <a href="/properties/{{$property_type->id}}">
                    <img src="{{$property_type->property_type_picture_url}}" alt="">
                    <div class="grid-caption">
                        <h3>{{$property_type->property_type_name}}</h3>
                        <span>{{$property_type->property_count}} Properties</span>
                    </div>
                </a>
            </div>
        @endforeach            
           
        </div>
    </div>
</section>

<!--Types End-->

<!-- Gallery -->
<section id="property" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">real estate properties</h2>
                <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
        </div>
        <div class="clearfix">
            <div id="filters-property" class="cbp-l-filters-button text-center">
                <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">TRENDING</div>
                @foreach($property_status as $status)
                <div data-filter=".{{strtolower($status->property_status_name)}}" class="cbp-filter-item">{{$status->property_status_name}}</div>
                @endforeach
              
            </div>
        </div>
        <div id="property-gallery" class="cbp listing1">
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail1.html"><img src="images/listing1.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
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
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#seventy" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="seventy">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest rent">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail2.html"><img src="images/listing2.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Rent</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
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
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#six" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="six">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail3.html"><img src="images/listing3.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
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
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#three" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="three">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest rent">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail1.html"><img src="images/listing4.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Rent</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
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
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#twe" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="twe">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail2.html"><img src="images/listing8.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="solid">Solid Out</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
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
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#twomore" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="twomore">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail3.html"><img src="images/listing6.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
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
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#one" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="one">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-12 text-center top20">
            <a href="listing1.html" class="btn-dark border_radius uppercase margin40">more listings</a>
        </div>
    </div>
</section>
<!-- Gallery End -->

<!--Agencies -->
<section id="testinomialBg" class="padding bg_light">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="uppercase">Agencies you can trust</h2>
                <p class="heading_space">Our Agencies are the classical. They have all the connections you need.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="testinomial-slider" class="owl-carousel display navigate">
                    <div class="item">
                        @foreach($agencies as $agency)
                          <div class="col-md-6">
                              <div class="row">
                                  <div class="agent_media bottom10 top10">
                                      <div class="agents"><img src="{{$agency->profile_picture}}" alt="Agency Picture" width="294" height="286"></div>
                                      <div class="agents_white text-center">
                                          <h4>{{$agency->agency_name}}</h4>
                                          <p class="bottom15">{{$agency->email}}</p>
                                          <p class="bottom15">{{$agency->biography}}</p>
                                          <a href="/agency_profile/{{$agency->id}}" class="btn-more">
                                              <i><img src="images/arrowl.png" alt="arrow"></i>
                                              <span>Contact Us</span>
                                              <i><img src="images/arrowr.png" alt="arrow"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        @endforeach                    
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!--Agencies ends-->

<!--Parallax-->
<section id="parallax_four" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 bottom30">
                <h2 class="uppercase">Over then <strong>7000</strong> Happy Customer</h2>
            </div>
            <div class="col-sm-8 col-md-10">
                <div class="row">
                    <div class="col-sm-6 margin40">
                        <i class="icon-presentation"></i>
                        <h4 class="bottom10">Good Sale & Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor
                            cum soluta nobis eleifend.</p>
                    </div>
                    <div class="col-sm-6 margin40">
                        <i class="icon-icons215"></i>
                        <h4 class="bottom10">Good Sale & Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor
                            cum soluta nobis eleifend.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Owner ends-->

<!--Agents-->
<section id="testinomialBg" class="padding bg_light">
    <div id="agent-2" class="padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="uppercase">AGENTS YOU CAN TRUST</h2>
                    <p>We have the best agents, confidently handpicked and always willing to meet you needs.</p>
                </div>
            </div>
            <div class="row">
              @foreach($agents as $agent)
                <div class="col-sm-4 margin40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="images/agent-one.jpg" alt="Agents">
                            <div class="img-info">
                                <h3>{{$agent->agent_name}}</h3>
                                <span>{{$agent->agency->agency_name}}</span>
                                <p class="top20 bottom30">{{$agent->biography}}</p>
                                <table class="agent_contact table">
                                    <tbody>
                                        <tr class="bottom10">
                                            <td><strong>Phone:</strong></td>
                                            <td class="text-right">{{$agent->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email Adress:</strong></td>
                                            <td class="text-right"><a href="#">{{$agent->email}}</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a class="btn-more" href="/agenct_profile/{{$agent->id}}">
                                    <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full
                                        Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</section>
<!--Agents ends-->

<!--Parallax-->
<section id="parallax_four" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 bottom30">
                <h2>We Don’t Just Find <br> <span class="t_yellow">Great Deals</span> We Create Them</h2>
                <h4 class="top20">We are proud to present to you some of the best homes, apartments, offices e.g.
                    across Australia for affordable prices.</h4>
                <a href="listing4.html" class="text-uppercase btn-white top20">view all listings</a>

            </div>
        </div>
    </div>
</section>
<!--About Owner ends-->
@endsection

@section('partners')
@include('partials.user.partners')
@endsection

@section('footer')
@include('partials.user.footer')
@endsection
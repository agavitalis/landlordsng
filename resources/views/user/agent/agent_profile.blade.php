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
                <h1 class="text-uppercase">{{$agent->agent_name}} Profile</h1>
                <p>{{$agent->biography}}</p>
                <ol class="breadcrumb text-center ">
                    <li><a href="#">Home</a></li>
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
                    <h3>{{$agent->agent_name}}</h3>
                    <p class="bottom30">{{$agent->biography}}</p>
                    <table class="agent_contact table">
                        <tbody>
                            <tr class="bottom10">
                                <td><strong>Phone:</strong></td>
                                <td class="text-right">{{$agent->phone}}</td>
                            </tr>
                            <tr class="bottom10">
                                <td><strong>Mobile:</strong></td>
                                <td class="text-right">{{$agent->phone}}</td>
                            </tr>
                            <tr>
                                <td><strong>Email Adress:</strong></td>
                                <td class="text-right"><a href="#.">{{$agent->email}}</a></td>
                            </tr>
                            <tr>
                                <td><strong>Address:</strong></td>
                                <td class="text-right"><a href="#.">{{$agent->address}}</a></td>
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
                <form class="callus" action="/agent_messages" method="post">
                  @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="agent_id" value="{{$agent->id}}">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message" name="message_body"></textarea>
                    </div>
                    <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
                </form>
            </div>

            <div class="col-sm-4 bottom40">
                <div class="agent_wrap">
                    <div class="image">
                        <img src="{{$agent->profile_picture}}" alt="Agents" height="388" width="364">
                    </div>
                </div>
            </div>


            <div class="col-md-12 bottom30 top20">
                <h2 class="text-uppercase">{{$agent->agent_name}} Properites</h2>
                <p>These are the properties belonging to this Agent.</p>
            </div>


            <div class="col-md-12 listing1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="property_item heading_space">
                            <div class="image">
                                <a href="#."><img src="{{asset('images/listing1.jpg')}}" alt="latest property"
                                        class="img-responsive"></a>
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


                                <div class="favroute clearfix">
                                    <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                                    <ul class="pull-right">
                                        <li><a href="#."><i class="icon-like"></i></a></li>
                                        <li><a href="#three" class="share_expender" data-toggle="collapse"><i
                                                    class="icon-share3"></i></a></li>
                                    </ul>
                                </div>
                                <div class="toggle_share collapse" id="three">
                                    <ul>
                                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a>
                                        </li>
                                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="property_item heading_space">
                            <div class="image">
                                <a href="#."><img src="{{asset('images/listing1.jpg')}}" alt="latest property"
                                        class="img-responsive"></a>
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


                                <div class="favroute clearfix">
                                    <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                                    <ul class="pull-right">
                                        <li><a href="#."><i class="icon-like"></i></a></li>
                                        <li><a href="#opening" class="share_expender" data-toggle="collapse"><i
                                                    class="icon-share3"></i></a></li>
                                    </ul>
                                </div>
                                <div class="toggle_share collapse" id="opening">
                                    <ul>
                                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a>
                                        </li>
                                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="property_item heading_space">
                            <div class="image">
                                <a href="#."><img src="{{asset('images/listing1.jpg')}}" alt="latest property"
                                        class="img-responsive"></a>
                                <span class="solid">Solid Out</span>
                                <span class="tag_t">For Sale</span>
                                <span class="tag_l">Featured</span>
                            </div>
                            <div class="proerty_content">
                                <div class="proerty_text">
                                    <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                                    <p>45 Regent Street, London, UK</p>
                                </div>


                                <div class="favroute clearfix">
                                    <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                                    <ul class="pull-right">
                                        <li><a href="#."><i class="icon-like"></i></a></li>
                                        <li><a href="#four" class="share_expender" data-toggle="collapse"><i
                                                    class="icon-share3"></i></a></li>
                                    </ul>
                                </div>
                                <div class="toggle_share collapse" id="four">
                                    <ul>
                                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a>
                                        </li>
                                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="property_item heading_space">
                            <div class="image">
                                <a href="#."><img src="{{asset('images/listing1.jpg')}}" alt="latest property"
                                        class="img-responsive"></a>
                                <span class="solid">Solid Out</span>
                                <span class="tag_t">For Sale</span>
                                <span class="tag_l">Featured</span>
                            </div>
                            <div class="proerty_content">
                                <div class="proerty_text">
                                    <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                                    <p>45 Regent Street, London, UK</p>
                                </div>


                                <div class="favroute clearfix">
                                    <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                                    <ul class="pull-right">
                                        <li><a href="#."><i class="icon-like"></i></a></li>
                                        <li><a href="#five" class="share_expender" data-toggle="collapse"><i
                                                    class="icon-share3"></i></a></li>
                                    </ul>
                                </div>
                                <div class="toggle_share collapse" id="five">
                                    <ul>
                                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a>
                                        </li>
                                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center heading_space">
                        <ul class="pager">
                            <li><a href="#.">1</a></li>
                            <li class="active"><a href="#.">2</a></li>
                            <li><a href="#.">3</a></li>
                        </ul>
                    </div>
                </div>
            </div>

















        </div>
    </div>
</section>
<!-- Agent Profile End -->


@endsection

@section('footer')
@include("partials.user.footer")
@endsection

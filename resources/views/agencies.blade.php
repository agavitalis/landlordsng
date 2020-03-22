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
                <h1 class="text-uppercase">Agencies</h1>
                <p>Trusted Agencies in LandlordNG.</p>
                <ol class="breadcrumb text-center ">
                    <li><a href="/">Home</a></li>
                   
                    <li><a href="#">Agencies</a></li>

                </ol>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->

<!-- Agencies Start -->
<section id="our-agent" class="padding_bottom_half padding_top bg_light">
    <div class="container">
        <div class="row">
            @foreach($agencies as $agency)

            
            <div class="col-md-6 ouragents clearfix">
                <div class="col-md-3 col-sm-6 heading_space">
                    <div class="image"><img src="storage/uploads/{{$agency->profile_picture}}" alt="Owl Image"></div>
                </div>
                <div class="col-md-3 col-sm-6 text-center  bg_white heading_space">
                    <h3>{{$agency->agency_name}}</h3>
                    <span>{{$agency->email}}</span>
                    <p class="top20 bottom20">
                        {{$agency->biography}}
                    </p>
                    <a class="btn-more" href="/agency_profile"><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                        <span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                    </a>
                    <br>
                    <a class="btn-more" href="/become_an_agent"><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                        <span>Register as an Agent</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                    </a>
                </div>
                
            </div>
            @endforeach

            <div class="ouragents clearfix">
                <div class="col-md-3 col-sm-6 heading_space">
                    <div class="image"><img src="images/agent-three3.jpg" alt="Owl Image"></div>
                </div>
                <div class="col-md-3 col-sm-6 text-center  bg_white heading_space">
                    <h3>Bohdan Kononets</h3>
                    <span>sales executive</span>
                    <p class="top20 bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh.</p>
                    <a class="btn-more" href="/agency_profile"><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                        <span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i></a>
                    <br>
                    <a class="btn-more" href="/become_an_agent"><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                        <span>Register as an Agent</span><i><img alt="arrow" src="images/arrow-yellow.png"></i></a>
                </div>
                <div class="col-md-3 col-sm-6 heading_space">
                    <div class="image"><img src="images/agent-three4.jpg" alt="Owl Image"></div>
                </div>
                <div class="col-md-3 col-sm-6 text-center  bg_white heading_space">
                    <h3>Bohdan Kononets</h3>
                    <span>sales executive</span>
                    <p class="top20 bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh.</p>
                    <a class="btn-more" href="agent_profile.html"><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                        <span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i></a>
                </div>
            </div>
            <div class="ouragents clearfix">
                <div class="col-md-3 col-sm-6 heading_space">
                    <div class="image"><img src="images/agent-three5.jpg" alt="Owl Image"></div>
                </div>
                <div class="col-md-3 col-sm-6 text-center  bg_white heading_space">
                    <h3>Bohdan Kononets</h3>
                    <span>sales executive</span>
                    <p class="top20 bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh.</p>
                    <a class="btn-more" href="agent_profile.html"><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                        <span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i></a>
                </div>
                <div class="col-md-3 col-sm-6 heading_space">
                    <div class="image"><img src="images/agent-three6.jpg" alt="Owl Image"></div>
                </div>
                <div class="col-md-3 col-sm-6 text-center  bg_white heading_space">
                    <h3>Bohdan Kononets</h3>
                    <span>sales executive</span>
                    <p class="top20 bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh.</p>
                    <a class="btn-more" href="agent_profile.html"><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                        <span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Agencies End -->


@endsection

@section('footer')
@include("partials.user.footer")
@endsection
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
                <h1 class="text-uppercase">Profile</h1>
                <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                <ol class="breadcrumb text-center">
                    <li><a href="#">Home</a></li>

                    <li class="active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->

<section id="agent-2-peperty" class="profile padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="f-p-links margin_bottom">
                    <li><a href="/profile" class="active"><i class="icon-icons230"></i>Profile</a></li>
                    <li><a href="/my_properties"><i class="icon-icons215"></i> My Properties</a></li>
                    <li><a href="/submit_property"><i class="icon-icons215"></i> Submit Property</a></li>
                    <li><a href="/favorite_properties"><i class="icon-icons43"></i> Favorite Properties</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <i class="icon-lock-open3"></i>Logout
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @include("partials.alert")
            <div class="col-md-3">
                <div class="container-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Messages</a>
                        </li>
                       
                        <hr>
                       
                        
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="false">
                                Agency
                            </a>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body" style="background-color:#ffffff;">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="/become_an_agency" tabindex="-1"  aria-disabled="true">Become an Agency</a>
                                               
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="/agent_requests" tabindex="-1"  aria-disabled="true">Agent Requests</a>
                                               
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="/my_agents" tabindex="-1"  aria-disabled="true">My Agent</a>
                                               
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="/agents_messages" tabindex="-1"  aria-disabled="true">Messages</a>
                                               
                                        </li>
                                    </ul>
                                  
                                </div>
                            </div>
                            
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#agentDiv" role="button"
                                aria-expanded="false">
                                Agent
                            </a>
                            <div class="collapse" id="agentDiv">
                                <div class="card card-body" style="background-color:#ffffff;">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="/agencies" tabindex="-1"  aria-disabled="true">Become an Agent</a>
                                               
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="/agent_messages" tabindex="-1"  aria-disabled="true">My Property</a>
                                               
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="/agent_messages" tabindex="-1"  aria-disabled="true">Messages</a>
                                               
                                        </li>
                                    </ul>
                                  
                                </div>
                            </div>
                            
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="container-3">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <h2 class="text-uppercase bottom30">my profile</h2>
                            <div class="agent-p-img">
                                <img src="images/profile.jpg" class="img-responsive" alt="image" />
                                <a href="#" class="top10 bottom20">Update Profile Picture</a>
                                <p class="text-center">Minimum 215px x 215px<span>*</span></p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="profile-form">
                                <div class="row">
                                    <form class="callus" action="{{route('profile')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="action" value="profile">
                                        <div class="col-sm-4">
                                            <div class="single-query">
                                                <label>Your Name:</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="single-query form-group">
                                                <input type="text" value="{{Auth::user()->name}}" name="name"
                                                    class="keyword-input">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="single-query">
                                                <label>Phone:</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="single-query form-group">
                                                <input type="text" value="{{Auth::user()->phone}}" name="phone"
                                                    class="keyword-input">
                                            </div>
                                        </div>
                                       
                                        <div class="col-sm-4">
                                            <div class="single-query">
                                                <label>Email Adress:</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="single-query form-group">
                                                <input type="text" value="{{Auth::user()->email}}" class="keyword-input"
                                                    name="email">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="single-query">
                                                <label>About:</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="single-query form-group">
                                                <textarea class="form-control" name="biography">
                                                  {{Auth::user()->biography}}
                                                  </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                            <input type="submit" class="btn-blue border_radius" value="Save Changes"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="app">
        <div class="row">
            <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
                <social-link-component></social-link-component>
            </div>
            <div class="col-md-2 hidden-xs"></div>
            <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
                <password-component></password-component>
            </div>
        </div>
    </div>
</section>


@endsection

@section('footer')
@include("partials.user.footer")
@endsection
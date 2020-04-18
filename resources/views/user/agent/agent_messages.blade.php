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
                <h1 class="text-uppercase">Messages</h1>
                <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                <ol class="breadcrumb text-center">
                    <li><a href="#">Home</a></li>

                    <li class="active">Messages</li>
                </ol>
            </div>
        </div>
    </div>
</section>
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
                  <a class="nav-link" href="/agent_messages/{{Auth::user()->id}}">Messages</a>
                </li>

                <hr>


                <li class="nav-item">
                    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false">
                        Agency
                    </a>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body" style="background-color:#ffffff;">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="/become_an_agency" tabindex="-1"
                                        aria-disabled="true">Become an Agency</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="/edit_agency_details" tabindex="-1"
                                        aria-disabled="true">Agency Profile</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="/agent_requests" tabindex="-1"
                                        aria-disabled="true">Agent Requests</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="/my_agents" tabindex="-1"
                                        aria-disabled="true">My Agents</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="/agents_messages" tabindex="-1"
                                        aria-disabled="true">Messages</a>

                                </li>
                            </ul>

                        </div>
                    </div>

                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#agentDiv" role="button" aria-expanded="false">
                        Agent
                    </a>
                    <div class="collapse" id="agentDiv">
                        <div class="card card-body" style="background-color:#ffffff;">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="/agencies" tabindex="-1"
                                        aria-disabled="true">Become an Agent</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="/edit_agent_details" tabindex="-1"
                                        aria-disabled="true">Agent Profile</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="/agent_messages" tabindex="-1"
                                        aria-disabled="true">My Property</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="/agent_messages" tabindex="-1"
                                        aria-disabled="true">Messages</a>

                                </li>
                            </ul>

                        </div>
                    </div>

                </li>

            </ul>
        </div>
    </div>
    <div class="col-md-9">
      <div class="mt-4">
        @if(count($messages)>0)
          @foreach($messages as $message)
            <p class="text-center mb-2">{{$message->message_body}}</p>
          @endforeach
        @else
          <p class="text-danger text-center">You have no messages</p>
        @endif
      </div>
    </div>
  </div>
</div>

<!-- Page Banner End -->


<!-- Agent Profile -->
<section id="agents" class="padding">
  <div class="container">
    <div class="row">



    </div>
  </div>
</section>
<!-- Agent Profile End -->

@endsection

@section('footer')
    @include("partials.user.footer")
@endsection

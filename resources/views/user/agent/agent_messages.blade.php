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
                <h1 class="text-uppercase">My Messages</h1>
                <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                <ol class="breadcrumb text-center">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Agent</a></li>
                    <li class="active">My Messages</li>
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
            @include("partials.user.profileSidebar")
        </div>
        <div class="col-md-9">
            <div class="mt-4">
        
                <!-- Message Start -->
                @if(count($messages)>0)
                   
                    <div class="panel-group" id="accordion">
                        @foreach($messages as $message)
                            <div class="panel panel-default">
                                <div class="panel-heading active">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse"
                                            data-parent="#accordion" href="#panel{{$message->id}}">
                                            Message from: {{$message->user->first_name}} {{$message->user->last_name}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="panel{{$message->id}}" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p class="bottom20">
                                            {{$message->message_body}}
                                        </p>
                                       
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#messageModal"> Reply Message </button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       
              
                    </div>
                   
                @else
                <p class="text-danger text-center">You have no messages</p>
                @endif
        
                <!-- Message End -->
            </div>
        </div>
    </div>
</div>

<!-- Page Banner End -->
<!-- Reply Message Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Message Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- View Message Modal -->


@endsection

@section('footer')
@include("partials.user.footer")
@endsection
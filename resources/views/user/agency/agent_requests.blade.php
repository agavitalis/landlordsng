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
                    <h1 class="text-uppercase">Requests to become my agent</h1>
                    <p>Manage your agency requests here.</p>
                    <ol class="breadcrumb text-center">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Agency</a></li>
                        <li class="active">Agent Request</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->



    <!-- My - Property Start -->
    <section id="agent-2-peperty" class="my-pro padding">
        <div class="container">
            <div class="row bottom30">
                @include("partials.alert")
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase">Agent Requests</h2>
                </div>
            </div>
        </div>
        <div class="container  list-t-border">
        @foreach($agent_requests as $agent_request)
            <div class="row bg-hover {{ $agent_request->id % 2 == 0? 'bg-color-gray':'' }}">
                <div class="my-pro-list">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <img src="images/my-p-list.png" alt="image" />
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="feature-p-text">
                            <h4>{{$agent_request->name}}</h4>
                            <p>{{$agent_request->message}}</p>
                            <span><b>Email:</b> {{$agent_request->email}}</span><br>
                            <div class="button-my-pro-list">
                                <a href="#.">Phone: {{$agent_request->phone}}</a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="select-pro-list">
                            <a href="approve_agent_requst/{{$agent_request->id}}"><i class="icon-like2" title="approve"></i></a>
                            <a href="reject_agent_requst/{{$agent_request->id}}"><i class="icon-cross" title="reject"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
             
        </div>
        <div class="container">
            <div class="row padding_top">
                <div class="col-md-12">
                    <ul class="pager">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- My - Property end -->


@endsection

@section('footer')
    @include("partials.user.footer")
@endsection
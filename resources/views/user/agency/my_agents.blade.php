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
                    <h1 class="text-uppercase">My Agency Agents</h1>
                    <p>Manage your agents here.</p>
                    <ol class="breadcrumb text-center">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Agency</a></li>
                        <li class="active">Agents</li>
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
                    <h2 class="text-uppercase">My Agents</h2>
                </div>
            </div>
        </div>
        <div class="container  list-t-border">
        @foreach($agents as $agent)
            <div class="row bg-hover {{ $agent->id % 2 == 0? 'bg-color-gray':'' }}">
                <div class="my-pro-list">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <img src="images/my-p-list.png" alt="image" />
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="feature-p-text">
                            <h4>{{$agent->agent_name}}</h4>
                            <p>{{$agent->biography}}</p>
                            <span><b>Email:</b> {{$agent->email}}</span><br>
                            <div class="button-my-pro-list">
                                <a href="#.">Phone: {{$agent->phone}}</a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="select-pro-list">
                            <a href="approve_agent_requst/{{$agent->id}}"><i class="icon-eye" title="View Details"></i></a>
                            <a href="approve_agent_requst/{{$agent->id}}"><i class="icon-home" title="View Properties"></i></a>
                            <a href="reject_agent_requst/{{$agent->id}}"><i class="icon-cross" title="Suspend"></i></a>
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
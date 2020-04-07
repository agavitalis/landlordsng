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
                <h1 class="text-uppercase">My properties</h1>
                <p>View and Manage your Properties</p>
                <ol class="breadcrumb text-center">
                    <li><a href="/">Home</a></li>
                    <li class="active">My properties</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->



<!-- My - Property Start -->
<section id="agent-2-peperty" class="my-pro padding">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="f-p-links margin_bottom">
                    <li><a href="/profile"><i class="icon-icons230"></i>Profile</a></li>
                    <li><a href="/my_properties" class="active"><i class="icon-icons215"></i> My Properties</a></li>
                    <li><a href="/submit_property"><i class="icon-icons215"></i> Submit Property</a></li>
                    <li><a href="/favorite_properties"><i class="icon-icons43"></i> Favorite Properties</a></li>
                    <li><a href="login.html"><i class="icon-lock-open3"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="row bottom30">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase">My Properties</h2>
            </div>
        </div>
    </div>
    <div class="container  list-t-border">
    @if(count($properties) > 0 )
        @foreach($properties as $props)
        <div class="row bg-hover {{($props->id % 2) == 0? 'bg-color-gray':''}}">
            <div class="my-pro-list">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <img src="images/my-p-list.png" alt="image" />
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="feature-p-text">
                        <h4>{{$props->title}}</h4>
                        <p>{{$props->location}}</p>
                        <span><b>Status:</b>{{$props->property_status->property_status_name}}</span><br>
                        <div class="button-my-pro-list">
                            <a href="#.">NGN{{$props->price}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="select-pro-list">
                        <a href="#"><i class="icon-pen2"></i></a>
                        <a href="#"><i class="icon-cross"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row bg-hover bg-color-gray">
            <div class="my-pro-list">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <img src="images/my-p-list.png" alt="image" />
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="feature-p-text">
                        <h4>Historic Town House</h4>
                        <p>Action Area I, Newtown, New Town, West Bengal, India</p>
                        <span><b>Status:</b> For Sale</span><br>
                        <div class="button-my-pro-list">
                            <a href="#.">$128,600</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="select-pro-list">
                        <a href="#"><i class="icon-pen2"></i></a>
                        <a href="#"><i class="icon-cross"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
        @endforeach
    @else
        <div class="jumbotron m-2">
            <h1 class="display-4">Hi!</h1>
            <p class="lead">You don't have any property uploaded yet</p>
            <hr class="my-4">
            <p>kindly consider using any of the buttons below.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/agencies" role="button">Become an Agent</a>
                <a class="btn btn-primary btn-lg" href="/upload_properties" role="button">Upload Properties</a>
            </p>
        </div>
    @endif
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
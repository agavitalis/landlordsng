@extends('layouts.app')

@section('header')
@include("partials.user.otherHeader")
@endsection

@section('content')
<!-- Page Banner Start-->
<section class="page-banner page-banner-bg padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="p-white text-uppercase"> Agency Registration</h1>
                <p class="p-white">Complete the registration process to become a LandLordNG Agency.</p>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->

<!-- testimonials Start -->
<section id="contact-us" class="padding">
    <div class="container">

        <div class="row">
            @include("partials.alert")
            <div class="col-sm-1 margin40"></div>
            <div class="col-sm-10 margin40">
                <div class="our-agent-box bottom30">
                    <h2>Agency Information</h2>
                </div>
                <form class="callus" action="/become_an_agency" method="post">
                    @csrf
                   
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" Placeholder="Agency Name" name="agency_name"
                                    value="">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" Placeholder="Founder" name="founder"
                                    value="{{Auth::user()->name}}">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" Placeholder="Agency Email" name="email"
                                    value="{{Auth::user()->email}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" Placeholder="Agency Phone" name="phone"
                                    value="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" Placeholder="Agency Office Address" name="address"
                                    value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                          
                            <div class="form-group">
                                <label for="file">Select a Profile Picture</label>
                                <input type="file" class="form-control" Placeholder="Profile Picture" name="profile_picture"
                                    value="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Message">About this agency</textarea>
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6">
                                    <input type="submit" class="btn-blue uppercase border_radius"
                                        value="Complete Registration">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- testimonials End -->

@endsection

@section('footer')
@include("partials.user.footer")
@endsection
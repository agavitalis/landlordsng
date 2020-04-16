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
                <h1 class="p-white text-uppercase"> Update Agent Details</h1>
                <p class="p-white">Update your agent details here.</p>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->

<!-- testimonials Start -->
<section id="contact-us" class="padding">
    <div class="container-fluid">

        <div class="row">
            @include("partials.alert")
            <div class="col-sm-1 margin40"></div>
            <div class="col-sm-10 margin40">
                <div class="our-agent-box bottom30">
                    <h2 class="text-center">Agent Information</h2>
                </div>

                <form class="callus" action="/edit_agent_details" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="agent_name">Agent Name</label>
                                <input type="text" class="form-control" Placeholder="Agency Name" name="agent_name"
                                    value="{{$agent->agent_name}}">
                            </div>

                            <div class="form-group">
                                <label for="agent_email">Agent Email</label>
                                <input type="email" class="form-control" Placeholder="Agency Email" name="email"
                                    value="{{$agent->email}}">
                            </div>
                            <div class="form-group">
                                <label for="agent_phone">Agent Phone</label>
                                <input type="text" class="form-control" Placeholder="Agency Phone" name="phone"
                                    value="{{$agent->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="file">Select a Profile Picture</label>
                                <input type="file" class="form-control" Placeholder="Profile Picture" name="profile_picture"
                                    value="">
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="agent_name">Twitter Handle</label>
                                <input type="text" class="form-control" Placeholder="Twitter Handle" name="twitter"
                                    value="{{$agent->twitter}}">
                            </div>

                            <div class="form-group">
                                <label for="agent_email">Facebook Handle</label>
                                <input type="email" class="form-control" Placeholder="Facebook URL" name="facebook"
                                    value="{{$agent->facebook}}">
                            </div>
                            <div class="form-group">
                                <label for="agent_phone">Instagram Handle</label>
                                <input type="text" class="form-control" Placeholder="Instagram Account" name="instagram"
                                    value="{{$agent->instagram}}">
                            </div>
                            <div class="form-group">
                                <label for="agent_phone">Linkedin Handle</label>
                                <input type="text" class="form-control" Placeholder="Linkedin" name="linkedin"
                                    value="{{$agent->linkedin}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                              <label for="agent_address">Website</label>
                              <input type="text" class="form-control" Placeholder="Agency Office Address" name="website"
                                  value="{{$agent->website}}">
                          </div>
                          
                           
                            <div class="form-group">
                                <label for="agent_address">Your Address</label>
                                <textarea name="address" class="form-control" placeholder="Message" rows='5' cols='5'> {{$agent->address}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="agent_address">Quick Intro</label>
                                <textarea name="biography" class="form-control" placeholder="Message" rows='5' cols='5'> {{$agent->biography}}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">  <a href="#" class="btn-blue uppercase border_radius"
                                       >View Profile as a User</a></div>
                                <div class="col-sm-6">
                                    <input type="submit" class="btn-blue uppercase border_radius"
                                        value="Update Profile">
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

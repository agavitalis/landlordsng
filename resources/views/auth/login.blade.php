@extends('layouts.app')

@section('header')
    @include('partials.user.otherHeader')
@endsection

@section('content')
<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Login</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="/">LandlordsNG</a></li>
         
          <li class="active">Login</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End --> 


<!-- Login -->
<section id="login" class="padding">
  <div class="container">
    <h3 class="hidden">hidden</h3>
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="profile-login">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content padding_half">
            <div role="tabpanel" class="tab-pane fade in active" id="home">
              <div class="agent-p-form">
               
                <form method="POST" action="{{ route('login') }}"  class="callus clearfix">
                   @csrf
                  <div class="single-query form-group col-sm-12">
                 
                    <input id="email" type="email" Placeholder="Email" class="keyword-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                           
                   
                  </div>
                  <div class="single-query form-group  col-sm-12">
                  
                    <input id="password" type="password" Placeholder="Password" class="keyword-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="col-sm-6">
                        <div class="search-form-group white form-group text-left">
                          <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                          <span>Remember Me</span>
                        </div>
                      </div>
                      <div class="col-sm-6 text-right">
                        <a href="#" class="lost-pass">Lost your password?</a>
                      </div>
                    </div>
                  </div>
                  <div class=" col-sm-12">
                    <input type="submit" value="Login" class="btn-slide border_radius"> 
                  </div>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile">
              <div class="agent-p-form">
                <form method="POST" action="{{ route('register') }}" class="callus clearfix">
                  @csrf
                  <div class="single-query col-sm-12 form-group">
                    <input id="name" type="text" Placeholder="Name" class="keyword-input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="col-sm-12 form-group">
                    <input id="email" type="email" Placeholder="Email" class="keyword-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="col-sm-12 form-group">
                    <input id="password" type="password" Placeholder="Password" class="keyword-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="col-sm-12 form-group">
                    <input id="password-confirm" type="password" Placeholder="Confirm Password" class=" keyword-input form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                  <div class="search-form-group white col-sm-12 form-group text-left">
                    <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                    <span>Receive Newsletter</span>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="query-submit-button">
                      <input type="submit" value="Register" class="btn-slide">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Login end -->
@endsection

@section('footer')
    @include('partials.user.footer')
@endsection

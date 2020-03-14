@extends('layouts.app')

@section('header')
    @include('partials.otherHeader')
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
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
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
                <form action="#" class="callus clearfix">
                  <div class="single-query form-group col-sm-12">
                    <input type="text" class="keyword-input" placeholder="username">
                  </div>
                  <div class="single-query form-group  col-sm-12">
                    <input type="text" class="keyword-input" placeholder="Email Address">
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
                    <input type="submit" value="submit now" class="btn-slide border_radius"> 
                  </div>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile">
              <div class="agent-p-form">
                <form class="callus clearfix">
                  <div class="single-query col-sm-12 form-group">
                    <input type="text" class="keyword-input" placeholder="username" required>
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="text" class="keyword-input" placeholder="Email Address">
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="password" class="keyword-input" placeholder="Password">
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="password" class="keyword-input" placeholder="Confirm  Password" readonly>
                  </div>
                  <div class="search-form-group white col-sm-12 form-group text-left">
                    <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                    <span>Receive Newsletter</span>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="query-submit-button">
                      <input type="submit" value="Creat an Account" class="btn-slide">
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
    @include('partials.footer')
@endsection

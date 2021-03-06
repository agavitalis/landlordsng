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
        <h1 class="text-uppercase">Agents</h1>
        <p>We have the most trusted agents from reputable agencies</p>
        <ol class="breadcrumb text-center ">
          <li><a href="/">Home</a></li>
          <li class="active"><a href="#">Agents</a></li>
          
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->

<!-- Agent Start -->
<section id="agent-2" class="padding_top padding_bottom_half">
  <div class="container">
    <div class="row">
    @foreach($agents as $agent)
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="images/agent-one.jpg" alt="Agents">
            <div class="img-info">
              <h3>{{$agent->agent_name}}</h3>
              <span>Agency: {{$agent->agency->agency_name}}</span>
              <p class="top20 bottom30">{{$agent->biography}}</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">{{$agent->phone}}</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">{{$agent->email}}</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="/agent_profile/{{$agent->id}}">
              <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    
    </div>
  </div>
</section>
<!-- Agent End -->


@endsection

@section('footer')
    @include("partials.user.footer")
@endsection
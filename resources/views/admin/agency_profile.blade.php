@extends('layouts.admin')

@section('header')
@include("partials.admin.header")
@endsection

@section('sidebar')
@include("partials.admin.sidebar")
@endsection

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        @include("partials.admin.breadcrom")
        <!-- end row -->

        <div class="page-content-wrapper">
            <div class="row">


                <div class="col-lg-12">
                    <div class="card m-b-20 rounded-0">
                        <div class="card-body">

                            <h1 class="mt-0 text-center">
                              {{$agency->agency_name}}</h1>
                            <p class="text-muted m-b-30 ">
                              <h5 class="">Biography</h5>
                                {{$agency->biography}}
                            </p>
                            <div class="row">
                              <div class="col-md-6">
                                <p class="text-muted m-b-30 ">
                                    Founder: {{$agency->founder}}
                                </p>
                              </div>
                              <div class="col-md-6">
                                <p class="text-muted m-b-30 ">
                                  Email:  {{$agency->email}}
                                </p>
                              </div>
                              <div class="col-md-6">
                                <p class="text-muted m-b-30 ">
                                  Phone:  {{$agency->phone}}
                                </p>
                              </div>
                              <div class="col-md-6">
                                <p class="text-muted m-b-30 ">
                                    Founder: {{$agency->address}}
                                </p>
                              </div>
                            </div>
                            <a class="btn btn-default btn-sm"
                            href="/admin_agencies">Back</a>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- end page content-->

    </div> <!-- container-fluid -->

</div> <!-- content -->
@endsection

@section('scripts')
<!-- Parsley js -->
<script src="../plugins/parsleyjs/parsley.min.js"></script>

<script>
$(document).ready(function() {
    $('form').parsley();
});
</script>
@endsection

@section('footer')
@include("partials.admin.footer")
@endsection

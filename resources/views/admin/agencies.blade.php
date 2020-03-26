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

        <div class="">
            <div class="">


                <div class="col-lg-12">
                  <h2 class="mb-4 text-center">Agencies</h2>
                    <div class=" m-b-20 rounded-0">
                        <div class="row">
                            @if(count($agencies)>0)
                              @foreach($agencies as $agency)
                                <div class="col-md-4">
                                    <h4 class="text-center"><a href="agencies/{{$agency->id}}"> {{$agency->agency_name}}</a></h4>

                                    <p class="mt-2 mb-2">Address: {{$agency->address}}</p>
                                    <p class="mt-2 mb-2">Biography: {{$agency->biography}}</p>
                                </div>
                              @endforeach
                            @endif
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

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
            <status-component></status-component>
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

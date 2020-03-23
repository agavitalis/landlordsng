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


                <div class="col-lg-5">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Property Types</h4>
                            <p class="text-muted m-b-30 ">
                                 Impedit ad eius est perferendis consequuntur commodi
                                  et vero neque at, dignissimos magni iure similique unde
                                  cum doloribus quia aliquid ut excepturi?.
                            </p>
                            <type-component></type-component>
                            
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

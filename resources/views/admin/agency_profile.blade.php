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
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Agency Profile</h4>
                            <p class="text-muted m-b-30 ">
                                Impedit ad eius est perferendis consequuntur commodi
                                et vero neque at, dignissimos magni iure similique unde
                                cum doloribus quia aliquid ut excepturi?.
                            </p>

                            <form action="#" method="#">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Agency Name</label>
                                            <div>
                                                <input type="text" class="form-control" readonly
                                                    data-parsley-minlength="6" value="{{$agency->agency_name}}" name="agency_name" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Founded By</label>
                                            <div>
                                                <input type="text" class="form-control" readonly
                                                    data-parsley-minlength="6" value="{{$agency->founder}}"  name="founder" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <div>
                                                <input type="text" class="form-control" readonly
                                                    data-parsley-minlength="6" value="{{$agency->phone}}"  name="phone" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email(This must be a registered User)</label>
                                            <div>
                                                <input type="text" class="form-control" readonly
                                                    data-parsley-minlength="6" value="{{$agency->email}}"  name="email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <div>
                                                <textarea class="form-control" readonly  name="address" id="" cols="30"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Biography</label>
                                            <div>
                                                <textarea class="form-control" readonly name="biography" id="" cols="30"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Profile Picture(294 * 286)</label>
                                            <div>
                                                <input type="file" class="form-control" name="profile_picture"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <div>
                                                <input type="text" class="form-control"
                                                    data-parsley-minlength="6" value="{{$agency->facebook}}" readonly name="facebook"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <div>
                                                <input type="text" class="form-control"
                                                    data-parsley-minlength="6" value="{{$agency->twitter}}" readonly name="twitter"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <div>
                                                <input type="text" class="form-control"
                                                    data-parsley-minlength="6" value="{{$agency->instagram}}" readonly name="instagram"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Website</label>
                                            <div>
                                                <input type="text" class="form-control"
                                                    data-parsley-minlength="6" value="{{$agency->website}}" readonly name="website" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group m-b-0">
                                    <div>
                                        <button type="" class="btn btn-primary waves-effect waves-light">
                                            Goto Edit Profile
                                        </button>
                                        <button type="" class="btn btn-secondary waves-effect waves-light">
                                           View Agents
                                        </button>
                          
                                    </div>
                                </div>
                            </form>

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
<script src="{{asset('plugins/parsleyjs/parsley.min.js')}}"></script>

<script>
$(document).ready(function() {
    $('form').parsley();
});
</script>
@endsection

@section('footer')
@include("partials.admin.footer")
@endsection

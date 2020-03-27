
@extends('layouts.app')

@section('header')
@include("partials.user.otherHeader")
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="css/editor.css">
<link rel="stylesheet" type="text/css" href="css/dropzone.min.css">
@endsection

@section('content')

<!-- Page Banner Start-->
<section class="page-banner padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-uppercase">Favorite properties</h1>
                <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                <ol class="breadcrumb text-center">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">My properties</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->



<!-- My Properties  -->
<section id="property" class="padding listing1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="f-p-links margin_bottom">
                    <li><a href="profile.html"><i class="icon-icons230"></i>Profile</a></li>
                    <li><a href="my_properties.html"><i class="icon-icons215"></i> My Properties</a></li>
                    <li><a href="submit_property.html" class="active"><i class="icon-icons215"></i> Submit Property</a>
                    </li>
                    <li><a href="favorite_properties.html"><i class="icon-icons43"></i> Favorite Properties</a></li>
                    <li><a href="login.html"><i class="icon-lock-open3"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-1 col-md-2"></div>
            <div class="col-sm-10 col-md-8">
                <h2 class="text-uppercase bottom40">Add Your Property</h2>
                <form class="callus clearfix border_radius submit_property" action="#" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                        <div class="col-sm-6">

                            <div class="single-query form-group bottom20">
                                <label>Title*</label>
                                <input type="text" name="title" class="keyword-input" required placeholder="Enter your property title">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Location*</label>
                                <input type="text" name="location" class="keyword-input" required placeholder="Enter Proprty Location">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query bottom20">
                                <label>Country*</label>
                                <div class="intro">
                                    <select name="country" required>
                                        <option value="Nigeria" selected class="active">Nigeria</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query bottom20">
                                <label>State*</label>
                                <div class="intro">
                                    <select name="state" id="state" required>
                                        <option value="Lagos" class="active">Lagos</option>
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query bottom20">
                                <label>Status*</label>
                                <div class="intro">
                                    <select name="status" required>
                                        <option value="" class="active">Property Status</option>
                                        @foreach($property_status as $property_status )
                                            <option value ="{{$property_status->id}}">{{$property_status->property_status_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query bottom20">
                                <label>Type*</label>
                                <div class="intro">
                                    <select name="type" required >
                                        <option value="" class="active">Property Type</option>
                                        @foreach($property_type as $property_type )
                                            <option value ="{{$property_type->id}}">{{$property_type->property_type_name}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="single-query form-group bottom20">
                                <label>Price*</label>
                                <input type="text" name="price" required class="keyword-input" placeholder="Eg:20,000 Per Month">
                            </div>
                        </div>
                    </div>
               
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="margin40 bottom15">Property Photos*<i class="fa fa-info-circle help"
                                    data-toggle="tooltip" title="add images to upload for property!"></i></h3>
                            <p>(the first picture will automatically be the cover picture)</p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                                                                                                                                                                                                                
                            <div class="file_uploader bottom20">
                                <div id="myDropzone"  class="dropzone">
                                    <div class="dz-default dz-message">
                                        <span>
                                            <i class="fa fa-plus-circle"></i>
                                            Click here or drop files to upload
                                        </span>
                                    </div>
                                                                                                                        
                                </div>
                            </div>
                        </div>
                    </div>
              
                
                    <div class="row">

                        <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Property Description*</h3>
                            <textarea name="description" id="txtEditor"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Property Additional Attributes</h3>
                            <div class="table-responsive summery_table">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <i class="fa fa-bars titles"></i>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Title</label>
                                                <input name="attr_title[]" type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Value</label>
                                                <input name="attr_value[]" type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#." class="close-t"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-bars titles"></i>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Title</label>
                                                <input type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Value</label>
                                                <input type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#." class="close-t"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-bars titles"></i>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Title</label>
                                                <input type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Value</label>
                                                <input type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#." class="close-t"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>

                                </table>
                                <a href="#." class="add-new"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                       
                        <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Video Presentation</h3>
                            <div class="single-query form-group bottom15">
                                <label>Vimeo or Youtube URL</label>
                                <input name="video" type="text" class="keyword-input" placeholder="https://vimeo.com">
                            </div>
                        </div>
                        <input type="hidden" name="agent_id" value="{{Auth::user()->agent->id}}">
                        <div class="col-md-4">
                            <button type="button" id="submitAll" class="btn-blue border_radius margin40">submit property</button>
                        </div>


                    </div>

                </form>

            </div>
           

        </div>

    </div>
</section>
<!-- My Properties End -->



@endsection

@section('footer')
@include("partials.user.footer")
@endsection

@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../js/dropzone.min.js"></script>
<script src="../js/editor.js"></script>
<script type="text/javascript">
   $("#txtEditor").Editor();
   $('[data-toggle="tooltip"]').tooltip(); 

    Dropzone.options.myDropzone = {
        url: "/submit_property",
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 100,
        maxFiles: 100,
        acceptedFiles: "image/*",
        addRemoveLinks: true,
        dictRemoveFile: "Remove image",

        init: function () {

            var submitButton = document.querySelector("#submitAll");
            var wrapperThis = this;

            submitButton.addEventListener("click", function () {

                if($('input[name=title]').val() == "" || $('input[name=location]').val() == "" || $('input[name=state]').val() == "" || $('input[name=price]').val() == ""){

                    swal("Oops!", "Please fill all fields", "error");
                }else  if($('input[name=country]').val() == "" || $('input[name=property_status_id]').val() == "" || $('input[name=property_type_id]').val() == ""){

                    swal("Oops!", "Please fill all fields", "error");
                }else{

                    alert($('input[name=state] :selected').val())
                    alert($("#state option:selected").val())
                   // $("#foo option:selected").val();
                    //Upload to the server
                   // wrapperThis.processQueue();
                }
                
               
            });

         

            this.on('sendingmultiple', function (data, xhr, formData) {
                
                formData.append("_token", $('input[name=_token]').val());
                formData.append("title", $('input[name=title]').val());
                formData.append("location", $('input[name=location]').val());
                formData.append("country", $('input[name=country]').val());
                formData.append("state", $('input[name=state]').val());
                formData.append("status", $('input[name=status]').val());
                formData.append("type", $('input[name=type]').val());
                formData.append("price", $('input[name=price]').val());
                formData.append("description", $('input[name=description]').val());
                formData.append("attr_title", $('input[name=attr_title]').val());
                formData.append("attr_value", $('input[name=attr_value]').val());
                formData.append("video", $('input[name=video]').val());
                formData.append("agent_id", $('input[name=agent_id]').val());
                                    
            });

            this.on('success',function(file, response)
            {
                console.log(file)
                console.log(response)
            })

            this.on('error',function(file, response)
            {
                console.log(file)
                console.log(response)
            })
        }
    };

</script>

@endsection
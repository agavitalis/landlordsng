
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
                <form class="callus clearfix border_radius submit_property">
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="single-query form-group bottom20">
                                <label>Title</label>
                                <input type="text" class="keyword-input" placeholder="Enter your property title">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Location</label>
                                <input type="text" class="keyword-input" placeholder="Enter Proprty Location">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query bottom20">
                                <label>Status </label>
                                <div class="intro">
                                    <select>
                                        <option class="active">For Sale</option>
                                        <option>For Sale</option>
                                        <option>For Sale </option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Price</label>
                                <input type="text" class="keyword-input" placeholder="23,000">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="margin40 bottom15">Propertie Photos <i class="fa fa-info-circle help"
                                data-toggle="tooltip" title="add images to upload for property!"></i></h3>



                        <div class="file_uploader bottom20">
                            <form id="upload-widget" method="post" action="/upload" class="dropzone">
                                <div class="dz-default dz-message">
                                    <span>
                                        <i class="fa fa-plus-circle"></i>
                                        Click here or drop files to upload
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="bottom15 margin40">Propertie Detail</h3>
                    </div>
                </div>
                <form class="callus clearfix border_radius submit_property">
                    <div class="row">

                        <div class="col-sm-4">

                            <div class="single-query form-group bottom20">
                                <label>Size Prefix</label>
                                <div class="intro">
                                    <select>
                                        <option class="active">Sq Ft</option>
                                        <option>For Sale</option>
                                        <option>For Sale </option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">

                            <div class="single-query form-group bottom20">
                                <label>Bedrooms</label>
                                <div class="intro">
                                    <select>
                                        <option class="active">Number of Bedrooms</option>
                                        <option>For Sale</option>
                                        <option>For Sale </option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">

                            <div class="single-query  form-group bottom20">
                                <label>Bathrooms</label>
                                <div class="intro">
                                    <select>
                                        <option class="active">Number of bathrooms</option>
                                        <option>For Sale</option>
                                        <option>For Sale </option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>

                        </div>


                        <div class="col-sm-4">

                            <div class="single-query form-group bottom20">
                                <label>TV Lounge</label>
                                <div class="intro">
                                    <select>
                                        <option class="active">Number of TV Lounge</option>
                                        <option>For Sale</option>
                                        <option>For Sale </option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">

                            <div class="single-query form-group  bottom20">
                                <label>Garages</label>
                                <div class="intro">
                                    <select>
                                        <option class="active">Number of Garages</option>
                                        <option>For Sale</option>
                                        <option>For Sale </option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">

                            <div class="single-query form-group bottom20">
                                <label>Swimming Pool</label>
                                <div class="intro">
                                    <select>
                                        <option class="active">Number of Pool</option>
                                        <option>For Sale</option>
                                        <option>For Sale </option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Properties Description </h3>
                            <textarea id="txtEditor"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Quick Summary</h3>
                            <div class="table-responsive summery_table">
                                <table class="table">
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
                            <h3 class="bottom15 margin40">Property Features</h3>
                            <div class="search-propertie-filters">
                                <div class="container-2">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Air Conditioning</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Balcony</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Gas Heat</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Fire Place</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Washer and Dryer</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Swimming Pool</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Laundry Room</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Home Theater</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Smoking allowed</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Cable TV</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Window Coverings</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                     
                        <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Place on Map</h3>
                            <div class="single-query form-group bottom15">
                                <label>Property Address</label>
                                <input type="text" class="keyword-input" placeholder="Enter a Location">
                            </div>
                            
                        </div>
                        <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Video Presentation</h3>
                            <div class="single-query form-group bottom15">
                                <label>Vimeo or Youtube URL</label>
                                <input type="text" class="keyword-input" placeholder="https://vimeo.com">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn-blue border_radius margin40">submit property</button>
                        </div>

                    </div>








                </form>


            </div>
            <div class="col-sm-1 col-md-2"></div>



            <div class="col-sm-4">





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
<script src="../js/dropzone.min.js"></script>
<script src="../js/editor.js"></script>
<script type="text/javascript">
   $("#txtEditor").Editor();
   $('[data-toggle="tooltip"]').tooltip(); 
</script>
@endsection
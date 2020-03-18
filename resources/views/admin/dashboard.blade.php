@extends('layouts.admin')

@section('header')
    @include("partials.admin.header")
@endsection

@section('sidebar')
    @include("partials.admin.sidebar")
@endsection

@section('content')
   
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Welcome to Agroxa Dashboard</li>
                        </ol>

                        <div class="state-information d-none d-sm-block">
                            <div class="state-graph">
                                <div id="header-chart-1"></div>
                                <div class="info">Balance $ 2,317</div>
                            </div>
                            <div class="state-graph">
                                <div id="header-chart-2"></div>
                                <div class="info">Item Sold 1230</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Orders</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">Orders</h6>
                                        <h3 class="mb-3 mt-0">1,587</h3>
                                        <div class="">
                                            <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                        </div>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Revenue</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">Revenue</h6>
                                        <h3 class="mb-3 mt-0">$46,785</h3>
                                        <div class="">
                                            <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                                        </div>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-buffer display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Av. Price</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">Average Price</h6>
                                        <h3 class="mb-3 mt-0">15.9</h3>
                                        <div class="">
                                            <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">From previous period</span>
                                        </div>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-tag-text-outline display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white-50">Pr. Sold</h6>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mt-0 text-white-50">Product Sold</h6>
                                        <h3 class="mb-3 mt-0">1890</h3>
                                        <div class="">
                                            <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span>
                                        </div>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-briefcase-check display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                
                
                
                

            </div>
            <!-- end page content-->

        </div> <!-- container-fluid -->

    </div> 

@endsection

@section('footer')
    @include("partials.admin.footer")
@endsection
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
                
                <div class="col-12">

                    <div class="card m-b-20">
                         @include("partials.alert")
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Manage Agencies</h4>
                            <p class="text-muted m-b-30">The Buttons extension for DataTables
                                provides a common set of options, API methods and styling to display
                                buttons on a page that will interact with a DataTable. The core library
                                provides the based framework upon which plug-ins can built.
                            </p>

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Agency</th>
                                    <th>Founder</th>
                                    <th>Phone</th>
                                    <th>Phone</th>
                                    <th>Details</th>
                                    <th>Edit</th>
                                    <th>Suspend</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                @csrf

                                <tbody>
                                    @foreach($agencies as $agency)
                                    
                                    <tr>
                                        <td>{{$agency->agency_name}}</td>
                                        <td>{{$agency->founder}}</td>
                                        <td>{{$agency->email}}</td>
                                        <td>{{$agency->phone}}</td>
                                        <td> <a href="/admin_manage_agencies/{{$agency->id}}"><button class='btn btn-success'><i class="fas fa-eye"></i></button></a></td>
                                        <td> <a href="/admin_edit_agency/{{$agency->id}}"><button class='btn btn-primary'><i class="fas fa-edit"></i></button></a></td>
                                        <td><button class='btn btn-warning' onclick="manage({{$agency->id}},'pend')"><i class="fas fa-exclamation"></i></button></td>
                                        <td><button class='btn btn-danger'  onclick="manage({{$agency->id}},'delete')"><i class="fas fa-trash"></i></button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div>
        <!-- end page content-->


</div> <!-- content -->
@endsection


@section('footer')
@include("partials.admin.footer")
@endsection 

@section('scripts')
   <!-- Required datatable js -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/jszip.min.js"></script>
    <script src="../plugins/datatables/pdfmake.min.js"></script>
    <script src="../plugins/datatables/vfs_fonts.js"></script>
    <script src="../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../plugins/datatables/buttons.print.min.js"></script>
    <script src="../plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="../assets/pages/datatables.init.js"></script>
    
    <!-- Sweet-Alert  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function manage(id,  action) {
            swal("Do you really want to proceed?", {
                buttons: {
                    cancel: "Close",
                    proceed: {
                        text: "Yes,Proceed",
                        value: "proceed",
                    },
                },
                })
                .then((value) => {
                switch (value) {
                           
                    case "proceed":
                        $.ajax({                                                                                                                                                      
                        type: 'post',
                        url: '/admin_become_an_agent',
                        data: {
                            '_token': $('input[name=_token]').val(),
                            'id': id,
                            'action':action
                        },
                        success: function (data) {
                            
                            swal("Gotcha!", data.success, "success");
                            // refresh the page 
                            // setTimeout(function () {
                            //     location.reload();
                            // }, 2000)
                            // },

                        },
                        error: function (data) {
                            console.log(data)
                        }});
                   
                    break;
                
                    default:
                    swal("Gotcha!", "Got away safely!", "success");
                }
            });
        }
    </script>



@endsection

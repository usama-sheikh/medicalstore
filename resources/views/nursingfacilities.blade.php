@extends('index')
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper col-md-12 col-sm-12">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome {{session('name')}}</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href='nursingfacilities' class="text-muted">Nursing facilities</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- start Container fluid  -->
            <!-- ============================================================== -->
            <div class="col-md-12 col-sm-10 ">
                <div class="container-fluid">
                    <!--order details-->
                     <div class="container-xl">
                         <div class="table-responsive">
                             <div class="table-wrapper">
                                 <div class="table-title">
                                     <div class="row">
                                         <div class="col-sm-8"><h2>Nursing Facilities <b>Details</b></h2></div>
                                         <div class="col-sm-4">

                                         </div>
                                     </div>
                                 </div>
                                 <table class="table table-striped table-hover table-bordered">
                                     <thead>
                                         <tr>
                                         <th> Id</th>
                                         <th>Name</th>
                                         <th>Charges</th>
                                         <th>Details</th>
                                         <th>Edit</th>
                                         <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @foreach($nursingfacilities as $nursingfacility)
                                         <tr>
                                            <td scope="col">{{$nursingfacility['id']}}</td>
                                            <td scope="col">{{$nursingfacility['facility_Name']}}</td>
                                            <td scope="col">{{$nursingfacility['charges']}}</td>
                                            <td scope="col">{{$nursingfacility['Description']}}</td>
                                             <td><p data-placement="top" data-toggle="tooltip" title="view"><button class="btn btn-success btn-xs" data-title="view" data-toggle="modal" data-target="#view"><span class="glyphicon glyphicon-pencil"><a href={{ 'editnursingfacility'.$nursingfacility['id'] }} style="text-decoration: none;     color: white; ">Edit </a></span></button></p></td>
                                             <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"><a href={{ 'deletenursingfacility'.$nursingfacility['id'] }} style="text-decoration: none;     color: white; ">Delete </a></span></button></p></td>
                                         </tr>
                                         @endforeach



                                     </tbody>
                                 </table>

                             </div>
                         </div>
                     </div>
                     <!--order details end-->
                 </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->

@endsection

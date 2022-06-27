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
                                    <li class="breadcrumb-item"><a href='medicines' class="text-muted">Medicines</a>
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
            <div class="col-md-9 col-sm-8 ">
                <!--medicines details-->
                    <div class="container-xl">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                            <div class="col-sm-8"><h2>Medicine <b>Details</b></h2></div>
                                            <div class="col-sm-4">

                                     </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th> ID</th>
                                            <th>Name </th>
                                            <th>Generic name </th>
                                            <th>Formula</th>
                                            <th>Company</th>
                                            <th>Price</th>
                                            <th>Description </th>
                                            <th>category </th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($medicines as $medicine)
                                            <tr>
                                                <td scope="col">{{$medicine['id']}}</td>
                                                <td scope="col">{{$medicine['Medicine_Name']}}</td>
                                                <td scope="col">{{$medicine['Generic_Name']}}</td>
                                                <td scope="col">{{$medicine['Medicine_Formula']}}</td>
                                                <td scope="col">{{$medicine['Company']}}</td>
                                                <td scope="col">{{$medicine['Price']}}</td>
                                                <td scope="col">{{$medicine['Description']}}</td>

                                                <td scope="col">{{$medicine['category']}}</td>
                                                <td>
                                                    <a href={{ 'editmedicine'.$medicine['id'] }} class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                    <a href={{ 'deletemedicine'.$medicine['id'] }} class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                             </div>
                         </div>
                    </div>
            <!--medicines details end-->

             </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->

@endsection

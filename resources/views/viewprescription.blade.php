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
                                    <li class="breadcrumb-item"><a href='orders' class="text-muted">prescription</a>
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
                <img src="{{ asset('assets/images/vio-4.jpg')}}" class="img-fluid" alt="prescription">
                <p data-placement="top" data-toggle="tooltip" title="approve"><button class="btn btn-primary btn-xs" data-title="view" data-toggle="modal" data-target="#view"><span class="glyphicon glyphicon-pencil"><a href={{ 'approverecord'.$orders['id'] }} style="text-decoration: none; color: white;">Approve </a></span></button></p>
                <p data-placement="top" data-toggle="tooltip" title="decline"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"><a href={{ 'declinerecord'.$orders['id'] }} style="text-decoration: none; color: white;">Decline </a></span></button></p>

            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->

@endsection

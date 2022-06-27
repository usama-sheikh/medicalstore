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
                                    <li class="breadcrumb-item"><a href='customers'class="text-muted">Customers</a>
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
            <div class="col-md-10 col-sm-9">
                <!--cusstomer details-->
<div class="container-xl">
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Customer <b>Details</b></h2></div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th> ID</th>
                    <th>Name </th>
                    <th>Address</th>
                    <th>City </th>
                    <th>Mobile</th>
                    <th>Email </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td scope="col">{{$customer['id']}}</td>
                    <td scope="col">{{$customer['Customer_name']}}</td>
                    <td scope="col">{{$customer['address']}}</td>
                    <td scope="col">{{$customer['city']}}</td>
                    <td scope="col">{{$customer['mobile']}}</td>
                    <td scope="col">{{$customer['email']}}</td>
                    <td>
                        <a href={{ 'editcustomer'.$customer['id'] }} class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                        <a href={{ 'deletecustomer'.$customer['id'] }} class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
</div>
</div>
</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->

@endsection

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
                                    <li class="breadcrumb-item"><a href='orders' class="text-muted">Orders</a>
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
                <div class="container-fluid">
                    <!--order details-->
                     <div class="container-xl">
                         <div class="table-responsive">
                             <div class="table-wrapper">
                                 <div class="table-title">
                                     <div class="row">
                                         <div class="col-sm-8"><h2>Order <b>Details</b></h2></div>
                                         <div class="col-sm-4">

                                         </div>
                                     </div>
                                 </div>
                                 <table class="table table-striped table-hover table-bordered">
                                     <thead>
                                         <tr>
                                         <th>Order Id</th>
                                         <th>Customer Name</th>
                                         <th>City</th>
                                         <th>Phone no</th>
                                         <th>Status</th>
                                         <th>Payment Method</th>
                                         <th>Edit Details</th>
                                         <th>View Order Details</th>


                                         <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>

                                         @foreach($orders as $order)
                                            <tr>
                                                <td scope="col">{{$order['id']}}</td>
                                                <td scope="col">{{$order['customer_name']}}</td>
                                                <td scope="col">{{$order['city']}}</td>
                                                <td scope="col">{{$order['phone_no']}}</td>
                                                <td scope="col">{{$order['status']}}</td>
                                                <td scope="col">{{$order['payment_method']}}</td>
                                                <td><p data-placement="top" data-toggle="tooltip" title="view"><button class="btn btn-success btn-xs" data-title="view" data-toggle="modal" data-target="#view"><span class="glyphicon glyphicon-pencil"><a href={{ 'editorder'.$order['id'] }} style="text-decoration: none;     color: white; ">Edit </a></span></button></p></td>

                                                <td><p data-placement="top" data-toggle="tooltip" title="view"><button class="btn btn-primary btn-xs" data-title="view" data-toggle="modal" data-target="#view"><span class="glyphicon glyphicon-pencil"><a href={{ 'vieworder'.$order['id'] }} style="text-decoration: none;     color: white; ">View </a></span></button></p></td>


                                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"><a href={{ 'deleteorder'.$order['id'] }} style="text-decoration: none;     color: white; ">Delete </a></span></button></p></td>
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

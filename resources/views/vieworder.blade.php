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
                                    <li class="breadcrumb-item"><a href='editorder' class="text-muted">Order Details </a>
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
            <div class="row ">
                <div class="col-md-5 col-sm-5" style="float: left">
                    <div class="container bootstrap snippets bootdey">
                        <h1 class="text-primary"> Order Details</h1>
                          <hr>
                        <div class="row">
                            @foreach($orderdd as $orderd )

                            <?php $total+=($orderd['Qantity']*$orderd['Price']); ?>


                           @endforeach

                                  <!-- edit form column -->
                                  <div class="col-md-9 personal-info">
                                    <h3>Order </h3>
                                    <form class="form-horizontal" >
                                        @csrf

                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">ID:</label>

                                                <div class="col-lg-12">
                                                    <h5>{{$order['id']}}</h5>
                                                </div>
                                            <label class="col-lg-12 control-label">Name:</label>

                                            <div class="col-lg-12">
                                              <h5>{{$order['customer_name']}}</h5>
                                          </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="col-lg-12 control-label">Total:</label>
                                            <div class="col-lg-12">
                                              <h5>{{$total}} </h5>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="col-lg-12 control-label">Phone_no:</label>
                                            <div class="col-lg-12">
                                                <h5>{{$order['phone_no']}} </h5>
                                            </div>
                                            </div>

                                            <div class="form-group">
                                            <label class="col-lg-12 control-label">Payment Method:</label>
                                            <div class="col-lg-12">
                                                <h5>{{ $order['payment_method'] }} </h5>
                                            </div>
                                            </div>
                                            <div class="pt-1 mb-4">
                                                <button class="btn btn-dark btn-lg btn-block" type="button"  style="font-size:15px">
                                                               <a href='orders' style="color: white; text-decoration:none;"> Back</a>
                                                   </button>
                                         </div>
                                           <div class="pt-1 mb-4">
                                                <button class="btn btn-dark btn-lg btn-block" type="button"  style="font-size:15px">
                                                               <a href={{  'viewprescription'.$order['id']}} style="color: white; text-decoration:none;"> View Prescription</a>
                                                   </button>
                                         </div>

                                            </form>
                                        </div>


                                </div>
                            </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="container bootstrap snippets bootdey">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="row">

                                  <!-- edit form column -->
                                  <div class="col-md-9 personal-info">
                                    <form class="form-horizontal" >
                                        @csrf
                                        <table border="1" style="text-align: center; ">
                                             <tr>
                                                <td style="padding:3px;">medicine name</td>
                                                <td style="padding:3px;">quantity</td>
                                                <td style="padding:3px;">price</td>
                                            </tr>

                                            @foreach($orderdd as $orderd )


                                            <tr>
                                                <td style="padding:3px;"> {{$orderd['Medicine_Name']}} </td>
                                                <td style="padding:3px;">{{$orderd['Qantity']}}</td>
                                                <td style="padding:3px;"> {{$orderd['Price']}} </td>

                                            </tr>



                                           @endforeach

                                        </table>

                                            </form>
                                        </div>


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

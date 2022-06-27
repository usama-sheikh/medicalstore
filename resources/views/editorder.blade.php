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
            <div class="col-md-12 col-sm-10 ">
                <div class="container bootstrap snippets bootdey">
                    <h1 class="text-primary">Edit Order Details</h1>
                      <hr>
                    <div class="row">

                              <!-- edit form column -->
                              <div class="col-md-9 personal-info">
                                <h3>Edit Order</h3>
                                <form class="form-horizontal" role="form" method="POST"
                                action="/updateorder">
                                    @csrf

                                        <div class="form-group">
                                        <label class="col-lg-12 control-label">Name:</label>
                                        <div class="col-lg-12">
                                            <input class="form-control" type="hidden" name="id"  value="{{$order['id']}}">
                                        </div>
                                        <div class="col-lg-12">
                                            <input class="form-control" type="text" name="name"  value="{{$order['customer_name']}}">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-lg-12 control-label">Phone_no:</label>
                                        <div class="col-lg-12">
                                            <input class="form-control" type="text" name="phone_no"  value="{{$order['phone_no']}}">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-lg-12 control-label">Status:</label>
                                        <div class="col-lg-12">
                                            <input class="form-control" type="text" name="status"  value="{{$order['status']}}">
                                            <p  style="color: grey; text-align:right;">*Pending / *Completed </p>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-lg-12 control-label">Payment Method:</label>
                                        <div class="col-lg-12">
                                            <input class="form-control" type="text" name="payment_method"  value="{{$order['payment_method']}}">
                                        </div>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" style="font-size:15px">
                                                            Update
                                               </button>
                                     </div>

                                        </form>
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

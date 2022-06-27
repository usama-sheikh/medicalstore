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
                                    <li class="breadcrumb-item"><a href='sales' class="text-muted">Sales</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select form-control" id="monthoption">
                                <option selected="" >Select Month</option>
                                <option value="1">January</option>
                                <option value="2">Februrary</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">Septemberr</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <script>
                                function run() {
                                  $m =  document.getElementById("monthoption").value;
                                    echo $m;
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- start Container fluid  -->
            <!-- ============================================================== -->
            <div class="col-md-12 col-sm-10 ">
                <div class="col-xl-9 col-lg-8 col-md-12 d-flex align-items-stretch justify-content-strech">
                    <div class="card w-100">
                        <div class="card-body">
                            <h4 class="card-title">Sales Statastics</h4>

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th>Customer Name </th>
                                        <th>Date </th>
                                        <th>Total </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($orderdetail as $order)
                                        <tr>
                                            <td scope="col">{{$order['id']}}</td>
                                            <td scope="col">{{$order['customer_name']}}</td>
                                            <td scope="col">{{$order['created_at']}}</td>
                                            <td scope="col">{{$order['total']}}</td>


                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>

                            <ul class="list-inline text-center mt-4 mb-0">
                                <li class="list-inline-item text-muted"><i class="font-10 fas fa-circle mr-2 text-info"></i>Sales
                                </li>
                                <li class="list-inline-item text-muted"><i class="font-10 fas fa-circle mr-2 text-light"></i>Earnings
                                </li>
                            </ul>
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
{{--         select *from orders where month(created_at)=6;
 --}}
@endsection

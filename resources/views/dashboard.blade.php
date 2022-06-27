@extends('index')
@section('content')
<style>
    body{

    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}




.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>
  <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper col-md-12 col-sm-12">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome
                            {{session('name')}}</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href='dashboard' class="text-muted">Dashboard</a>
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
            <div class="container-fluid">

                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container col-md-12 col-sm-12">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Orders Received</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>{{session('records')}}</span></h2>
                    <a href='orders' class="m-b-0">View Order Details<span class="f-right"></span></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Orders Completed</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>{{session('completed')}}</span></h2>
                    <a href='orders' class="m-b-0"> View Order Details<span class="f-right"></span></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Orders Pending</h6>
                    <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>{{session('remainingrecords')}}</span></h2>
                    <a href='orders' class="m-b-0"> View Order Details<span class="f-right"></span></a>
                </div>
            </div>
        </div>


	</div>
</div>

<div class="containe-fluid">

    <div class="row">
        <div class="col-lg-12">

        </div>
    </div>


    <div class="row mt-3 ml-3 mr-3">
            <div class="col-lg-12 col-sm-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-4 offset-sm-2">
                                <div class="card bg-primary">
                                        <div class="card-body text-white">
                                            <p>
                                                <b>
                                                    <a href='addmedicine'><large style=" color: white; text-decoration: none;">Add Medicine</large></a>
                                                    </b>
                                                </p>
                                            <hr>

                                        </div>
                                </div>

                            </div>
                        <div class="col-sm-4">
                                <div class="card bg-primary">
                                        <div class="card-body text-white">
                                            <p>
                                                <b>
                                                    <a href='addnursingfacilities'><large style=" color: white; text-decoration: none;">Add Nursing facilities</large></a>
                                                    </b>
                                                </p>
                                            <hr>

                                        </div>
                                    </div>
                                </div>
                            </div>


                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-sm-4 offset-sm-2">
                                <div class="card bg-primary">
                                        <div class="card-body text-white">
                                            <p>
                                                <b>
                                                    <a href='salesreport'><large style=" color: white; text-decoration: none;">Sales Report</large></a>
                                                    </b>
                                                </p>
                                            <hr>

                                        </div>
                                    </div>
                                </div>   <div class="col-sm-4">
                                <div class="card bg-primary">
                                        <div class="card-body text-white">
                                            <p>
                                                <b>
                                                    <a href='medcategory'><large style=" color: white; text-decoration: none;">Create Medicine category</large></a>
                                                    </b>
                                                </p>
                                            <hr>

                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

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

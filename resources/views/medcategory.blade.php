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
                                    <li class="breadcrumb-item"><a href='sales' class="text-muted">Medicine Category</a>
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
                    <h1 class="text-primary">Create Medicine Category</h1>
                      <hr>
                    <div class="row">

                              <!-- edit form column -->
                              <div class="col-md-9 personal-info">
                                <h3>Add Category</h3>
                                <form class="form-horizontal" role="form" method="POST"
                                action="/createcategory">
                                    @csrf
                                        <div class="form-group">
                                        <label class="col-lg-12 control-label">Name:</label>
                                        <div class="col-lg-12">
                                            <input class="form-control" type="text" name="cat_name">
                                        </div>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" style="font-size:15px">
                                                            Add
                                               </button>
                                     </div>

                                        </form>
                                        <div class="pt-1 mb-4">
                                         <a href="allcategories">
                                            <button class="btn btn-dark btn-lg btn-block" type="button" style="font-size:15px">
                                                View all categories
                                              </button>
                                        </a>
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
{{-- <div class="col-md-9 col-sm-8 ">
    <!--category details-->
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                                <div class="col-sm-8"><h2>All <b>Categories</b></h2></div>
                                <div class="col-sm-4">
                                <div class="search-box">
                                    <input type="text" class="form-control" placeholder="Search…">
                                </div>
                         </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th> ID</th>
                                <th>Name </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($medicines as $medicine)
                                <tr>
                                    <td scope="col">{{$medicine['id']}}</td>
                                    <td scope="col">{{$medicine['Medicine_Name']}}</td>

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
<!--category details end-->

 </div> --}}

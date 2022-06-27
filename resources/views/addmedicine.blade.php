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
            <div class="col-md-12 col-sm-10 ">
                <div class="container bootstrap snippets bootdey">
                    <h1 class="text-primary">Add Medicine</h1>
                      <hr>

                    <div class="row">
                      <!-- left column -->


                      <!-- edit form column -->
                      <div class="col-md-9 personal-info">
                        <h3>Medicine info</h3>

                        <form class="form-horizontal" role="form" method="POST" action="/savemedicine" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col col-md-4 col-sm-6">
                                        <div class="text-center">
                                          <h6>Upload photo...</h6>

                                          <input type="file" class="form-control" name="image">
                                        </div>
                                </div>
                                <div class="col col-md-8 col-sm-6">
                                    <div class="form-group">
                                        <label class="col-lg-12 control-label">Medicine name:</label>
                                        <div class="col-lg-12">
                                          <input class="form-control" type="text" name="med_name" value="">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-12 control-label">Generic name:</label>
                                        <div class="col-lg-12">
                                          <input class="form-control" type="text" name="gen_name" value="">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-12 control-label">Medicine formula:</label>
                                        <div class="col-lg-12">
                                          <input class="form-control" type="text" name="med_formula" value="">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-12 control-label">Company:</label>
                                        <div class="col-lg-12">
                                          <input class="form-control" type="text" name="company" value="">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-12 control-label">Price:</label>
                                        <div class="col-lg-12">
                                          <input class="form-control" name="price" type="text">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-12 control-label">Description:</label>
                                        <div class="col-lg-12">
                                          <input class="form-control" name="description" type="text">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-12 control-label">Category:</label>
                                        <div class="col-lg-12">

                                         <div class="select-wrapper">

                                            <select name="category">
                                                @foreach ($category as $cat)
                                                <option name="categoty" value= "{{$cat['category_name']}}">{{$cat['category_name']}}  </option>
                                                @endforeach
                                                </select>


                                    </div>

                                        </div>
                                        </div>
                                      </div>
                                      <div class="col-lg-8" style="position:relative; left:250px">

                                      <div class="pt-1 mb-4">
                                                        <button class="btn btn-dark btn-lg btn-block" type="submit" style="font-size:15px">
                                                          Add
                                                        </button>
                                                      </div>
                                      </div>
                                </div>
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

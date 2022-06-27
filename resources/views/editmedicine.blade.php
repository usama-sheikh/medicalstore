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
                                    <li class="breadcrumb-item"><a href='editmedicine' class="text-muted">Medicine Details</a>
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
                    <h1 class="text-primary">Edit Medicine data</h1>
                      <hr>
                    <div class="row">

                              <!-- edit form column -->
                              <div class="col-md-9 personal-info">
                                <h3>Edit Medicine data</h3>
                                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                                action="/savemedicinedata">
                                    @csrf
                                        <div class="form-group">
                                        <label class="col-lg-12 control-label">Medicine_Name:</label>
                                        <div class="col-lg-12">
                                            <input class="form-control" type="hidden" name="id"  value="{{$medicine['id']}}">
                                        </div>
                                        <div class="col-lg-12">
                                            <input class="form-control" type="text" name="name"  value="{{$medicine['Medicine_Name']}}">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-lg-12 control-label">Generic_Name:</label>
                                        <div class="col-lg-12">
                                            <input class="form-control" type="text" name="Gen_Name"  value="{{$medicine['Generic_Name']}}">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-12 control-label">Medicine_Formula:</label>
                                            <div class="col-lg-12">
                                                <input class="form-control" type="text" name="formula"  value="{{$medicine['Medicine_Formula']}}">
                                            </div>
                                         </div>
                                         <div class="form-group">
                                            <label class="col-lg-12 control-label">Company:</label>
                                            <div class="col-lg-12">
                                                <input class="form-control" type="text" name="company"  value="{{$medicine['Company']}}">
                                           </div>
                                       </div>
                                         <div class="form-group">
                                                <label class="col-lg-12 control-label">Price:</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" type="text" name="price"  value="{{$medicine['Price']}}">
                                                </div>
                                           </div>
                                           <div class="form-group">
                                                <label class="col-lg-12 control-label">Description:</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" type="text" name="description"  value="{{$medicine['Description']}}">
                                                </div>
                                           </div>
                                            {{-- <div class="form-group">
                                                <label class="col-lg-12 control-label">Category:</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" type="text" name="category"  value="{{$medicine['category']}}">
                                                </div>
                                           </div> --}}
                                           <div class="form-group">
                                            <label class="col-lg-12 control-label">Category:</label>
                                            <div class="col-lg-12">

                                             <div class="select-wrapper">
                                      {{--  @foreach ($category as $category)--}}
                                      <select name="category">
                                        @foreach ($category as $cat)
                                        <option name="categoty" value= "{{$cat['category_name']}}">{{$cat['category_name']}}  </option>
                                        @endforeach
                                        </select>

                                               {{--  @endforeach --}}

                                        </div>

                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-12 control-label">Medicine_Image:</label>
                                                <div class="col-lg-12">
                                                    <input class="form-control" type="file" name="image"  value="{{$medicine['Medicine_Image']}}">
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

    <title>Pharmakon Login</title>
   <!--bootstrap styling file-->
   <link href="{{ asset('login/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
   <link href="{{ asset('login/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!--for personal styling-->
   <link href="{{ asset('login/css/personalstyling.css')}}" rel="stylesheet" type="text/css">

<section class="vh-100" style="background-color: #3674c3;">
     <div class="container py-5 h-100">
       <div class="row d-flex justify-content-center align-items-center h-100">
         <div class="col col-xl-10">
           <div class="card" style="border-radius: 1rem;">
             <div class="row g-0">
               <div class="col-md-6 col-lg-5 d-none d-md-block">
                 <img src="{{ asset('login/images/01.jpg')}}" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 500px;">
               </div>
               <div class="col-md-6 col-lg-7 d-flex align-items-center">
                 <div class="card-body p-4 p-lg-5 text-black">

                   <form action="adminlogin" method="POST">
                    @csrf

                     <div class="d-flex align-items-center mb-3 pb-1">
                       <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                       <span class="h1 fw-bold mb-0">
                         <img src="">
                       </span>
                     </div>

                     <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                     <div class="form-outline mb-4">
                       <input type="email" id="admin_email" name="admin_email" class="form-control form-control-lg">
                       <label class="form-label" for="admin_email">Email:</label>
                     </div>

                     <div class="form-outline mb-4">
                       <input type="password" id="admin_password" name="admin_password" class="form-control form-control-lg">
                       <label class="form-label" for="admin_password">Password</label>
                     </div>

                     <div class="pt-1 mb-4">
                       <button class="btn btn-dark btn-lg btn-block" type="submit">
                         <h5 style="color: white; text-decoration: none;">Login</h5>
                       </button>
                     </div>
                     <a href="#!" class="small text-muted">Terms of use.</a>
                     <a href="#!" class="small text-muted">Privacy policy</a>
                   </form>

                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!--login form end-->
   <script src="{{ asset('login/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('login/js/bootstrap.js')}}"></script>


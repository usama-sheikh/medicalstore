
        <header class="topbar" data-navbarbg="skin1">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href='dashboard'>
                            <b class="logo-icon" style="float: left">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="{{ asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{ asset('assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{ asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <p style="color: white;
                                font-size: x-large;
                                margin-top: 0;
                                margin-bottom: 1rem;">Pharmakon </p>
                           </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin1">
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav w-100 align-items-center">
                        <li class="nav-item ml-0 ml-md-3 ml-lg-0">
                            <a class="nav-link search-bar" href="javascript:void(0)">
                                <form class="my-2 my-lg-0">
                                    <div class="customize-input customize-input-v4">
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <li class="nav-item ml-auto">
                            <div class="upgrade-btn">
                                <a href='logout'
                                    class="btn btn-success text-white" >logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
<!-- Left Sidebar -->
        <!-- ============================================================== -->
        <aside class="left-sidebar my-2" data-sidebarbg="skin6">

            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href='dashboard' aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href='customers' aria-expanded="false">
                                <i data-feather="users" class="feather-icon"></i>
                                <span class="hide-menu">Customers</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href='medicines' aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Medicines</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href='orders' aria-expanded="false">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <span class="hide-menu">Orders</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href='sales' aria-expanded="false">
                                <i data-feather="check-square" class="feather-icon"></i>
                                <span class="hide-menu"> Sales</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href='nursingfacilities' aria-expanded="false">
                                <i data-feather="user-x" class="feather-icon"></i>
                                <span class="hide-menu">Nursing Facilities</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <div class="text-center p-5 d-none d-lg-block">
                                <a href='logout'
                                    class="btn btn-block btn-success" >Logout</a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: auto;">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
        <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">KATARIA ECOTECH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{url('/admin/dashboard')}}" class="d-block">{{ Session::get('name') }} ( Admin )</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="{{url('/admin/rf-feding')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            RM Feding
                            <!--  <i class="fas fa-angle-left right"></i>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/admin/batching-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Batching Report
                            <!--  <i class="fas fa-angle-left right"></i>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/admin/flow-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Flow Report
                            <!--  <i class="fas fa-angle-left right"></i>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/raising-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Raising & Titing Report
                            <!-- <span class="right badge badge-danger">New</span>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('/admin/cutting-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Cutting Report
                            <!--  <i class="fas fa-angle-left right"></i>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('admin/autoclave-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Autoclave Report
                            <!--  <i class="fas fa-angle-left right"></i>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('/admin/labour-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Labour deployment
                            <!--  <i class="fas fa-angle-left right"></i>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('/admin/logbook-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Log Book Maintenance
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('/admin/operator')}}" class="nav-link">
                        <i class="nav-icon fas fa-child"></i>
                        <p>
                            Operator
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('/logout')}}" class="nav-link">
                        <i class="nav-icon fas fa-lock"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

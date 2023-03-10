<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: auto;">
    <!-- Brand Logo -->
    <a href="{{url('admin')}}" class="brand-link">
        <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">KATARIA ECOTECH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="{{url('/admin')}}" class="d-block">{{ Session::get('admin')->name}} ( Admin )</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="{{url('/admin/rf-feding')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Rf Feeding
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/admin/autoclave-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Autoclave
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/admin/batching-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Batching
                            <!--  <i class="fas fa-angle-left right"></i>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/admin/cutting-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Cutting
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/admin/flow-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Flow
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/admin/labour-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Labour Deployment
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/admin/raising-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Raising
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/admin/logbook-report')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Logbook
                        </p>
                    </a>
                </li>
                <?php if(session()->has('superadmin'))
                    {
                        ?>
                <li class="nav-item ">
                    <a href="{{url('/superadmin')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Superadmin Dashboard
                        </p>
                    </a>
                </li>
<?php
                    }?>

                <li class="nav-item ">
                    <a href="{{url('/logout')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

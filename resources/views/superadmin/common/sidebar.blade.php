<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: auto;">
    <!-- Brand Logo -->
    <a href="{{url('/superadmin')}}" class="brand-link">
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
                <a href="{{url('/superadmin')}}" class="d-block">{{ Session::get('superadmin')->name }}<br>(SuperAdmin)</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('/superadmin/department')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Department
                            <!--  <i class="fas fa-angle-left right"></i>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/superadmin/employee')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Employee
                            <!--  <i class="fas fa-angle-left right"></i>-->
                        </p>
                    </a>
                </li>
                <?php if(session()->has('superadmin'))
                {
                ?>
                <li class="nav-item ">
                    <a href="{{url('/admin')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Admin Dashboard
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
                            <!--  <i class="fas fa-angle-left right"></i>-->
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

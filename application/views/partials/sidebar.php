<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('/admin'); ?>" class="brand-link">
        <img src="<?php echo base_url('assets/AdminLTE-3.2.0/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MHA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/AdminLTE-3.2.0/dist/img/user2-160x160.jpg'); ?>"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Ganis Badilum</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo site_url('admin'); ?>"
                        class="nav-link <?php echo (isset($title) && $title == 'Dashboard Admin' || $title == 'AdHoc Perikanan' || $title == 'Pengadilan Perikanan' || $title == 'Data Usulan' || $title == 'Data Mutasi') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link <?php echo (isset($title) && $title == 'AdHoc Perikanan' || $title == 'Pengadilan Perikanan' || $title == 'Data Usulan' || $title == 'Data Mutasi') ? 'active' : ''; ?>">
                                <i class="fas fa-fish nav-icon"></i>
                                <p>AdHoc Perikanan</p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('admin/adhoc/perikanan'); ?>"
                                        class="nav-link <?php echo (isset($title) && $title == 'AdHoc Perikanan') ? 'active' : ''; ?>">
                                        <i class="fas fa-gavel nav-icon"></i>
                                        <p>Data Hakim</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('admin/adhoc/perikanan/data_pengadilan'); ?>"
                                        class="nav-link <?php echo (isset($title) && $title == 'Pengadilan Perikanan') ? 'active' : ''; ?>">
                                        <i class="fas fa-university nav-icon"></i>
                                        <p>Data Pengadilan</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('admin/adhoc/perikanan/data_usulan'); ?>"
                                        class="nav-link <?php echo (isset($title) && $title == 'Data Usulan') ? 'active' : ''; ?>">
                                        <i class="fas fa-envelope-open-text nav-icon"></i>
                                        <p>Data Usulan</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('admin/adhoc/data-mutasi'); ?>"
                                        class="nav-link <?php echo (isset($title) && $title == 'Data Mutasi') ? 'active' : ''; ?>">
                                        <i class="fas fa-people-arrows nav-icon"></i>
                                        <p>Data Mutasi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin'); ?>" class="nav-link">
                                <i class="far fa-building nav-icon"></i>
                                <p>AdHoc PHI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin'); ?>" class="nav-link">
                                <i class="fas fa-money-check nav-icon"></i>
                                <p>AdHoc Tipikor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin'); ?>" class="nav-link">
                                <i class="fas fa-child nav-icon"></i>
                                <p>AdHoc HAM</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
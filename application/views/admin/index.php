<!-- Include Head Elements -->
<?php $this->load->view('./partials/head'); ?>



<!-- Preloader -->
<?php $this->load->view('./partials/preloader'); ?>

<!-- Navbar -->
<?php $this->load->view('./partials/navbar'); ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php $this->load->view('./partials/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php $this->load->view('./partials/content-header'); ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Hello Alexx from <?php echo isset($title) ? $title : ''; ?></h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a href="./assets/AdminLTE-3.2.0/#" class="dropdown-item">Action</a>
                                        <a href="./assets/AdminLTE-3.2.0/#" class="dropdown-item">Another
                                            action</a>
                                        <a href="./assets/AdminLTE-3.2.0/#" class="dropdown-item">Something else
                                            here</a>
                                        <a class="dropdown-divider"></a>
                                        <a href="./assets/AdminLTE-3.2.0/#" class="dropdown-item">Separated
                                            link</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        </div>
                        <!-- ./card-body -->
                        <div class="card-footer">
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<?php $this->load->view('./partials/control-sidebar'); ?>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<?php $this->load->view('./partials/main-footer'); ?>
<!-- /.main-footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('./partials/scripts'); ?>

<!-- Optional Scripts -->

<!-- Bottom of file -->
<?php $this->load->view('./partials/bottom'); ?>
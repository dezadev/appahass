<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- icon boostrab -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url(); ?>/dist/img/ahass.png" alt="AdminLTELogo" height="80" width="80">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li> -->

            </ul>
        </nav>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <?= $this->include('template/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->

        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid mt-2">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">CPU Traffic</span>
                                    <span class="info-box-number">
                                        10
                                        <small>%</small>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Likes</span>
                                    <span class="info-box-number">41,410</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Sales</span>
                                    <span class="info-box-number">760</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">New Members</span>
                                    <span class="info-box-number">2,000</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Monthly Recap Report</h5>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                                <i class="fas fa-wrench"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a href="#" class="dropdown-item">Action</a>
                                                <a href="#" class="dropdown-item">Another action</a>
                                                <a href="#" class="dropdown-item">Something else here</a>
                                                <a class="dropdown-divider"></a>
                                                <a href="#" class="dropdown-item">Separated link</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="text-center">
                                                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                            </p>

                                            <div class="chart">
                                                <!-- Sales Chart Canvas -->
                                                <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                            </div>
                                            <!-- /.chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4">
                                            <p class="text-center">
                                                <strong>Goal Completion</strong>
                                            </p>

                                            <div class="progress-group">
                                                Add Products to Cart
                                                <span class="float-right"><b>160</b>/200</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div>
                                            <!-- /.progress-group -->

                                            <div class="progress-group">
                                                Complete Purchase
                                                <span class="float-right"><b>310</b>/400</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                                                </div>
                                            </div>

                                            <!-- /.progress-group -->
                                            <div class="progress-group">
                                                <span class="progress-text">Visit Premium Page</span>
                                                <span class="float-right"><b>480</b>/800</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                                </div>
                                            </div>

                                            <!-- /.progress-group -->
                                            <div class="progress-group">
                                                Send Inquiries
                                                <span class="float-right"><b>250</b>/500</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                </div>
                                            </div>
                                            <!-- /.progress-group -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./card-body -->
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                                <h5 class="description-header">$35,210.43</h5>
                                                <span class="description-text">TOTAL REVENUE</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                                                <h5 class="description-header">$10,390.90</h5>
                                                <span class="description-text">TOTAL COST</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                                <h5 class="description-header">$24,813.53</h5>
                                                <span class="description-text">TOTAL PROFIT</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block">
                                                <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                                                <h5 class="description-header">1200</h5>
                                                <span class="description-text">GOAL COMPLETIONS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->

                    <!-- /.row -->
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- <?= $this->renderSection('content'); ?> -->

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        Copyright &copy; 2019-<?= date('Y'); ?> <a href="#">TSD JATENG</a>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url(); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url(); ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url(); ?>/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url(); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url(); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url(); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url(); ?>/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url(); ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url(); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url(); ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url(); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url(); ?>/dist/js/pages/dashboard.js"></script>
</body>

</html>
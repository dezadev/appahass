<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="<?= base_url(); ?>/dist/img/ahass.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AHASS LEARNING</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            MENU
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/home/asy" class="nav-link">
                                <i class="far fa-circle text-warning nav-icon"></i>
                                <p>AHASS SYSTEM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/home/claim" class="nav-link">
                                <i class="far fa-circle text-danger nav-icon"></i>
                                <p>WARRANTY CLAIM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/home/lkh" class="nav-link">
                                <i class="far fa-circle text-info nav-icon"></i>
                                <p>PQM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/home/nsp" class="nav-link">
                                <i class="far fa-circle text-success nav-icon"></i>
                                <p>NSP</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <br>
                <!-- menu ke dua -->
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            MASTER DATA
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="/materi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>MATERI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/group" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>GROUP</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/login/logout" class="nav-link btn btn-outline-success mr-3">logout</a>
                </li>
            </ul>

        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
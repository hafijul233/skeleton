<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= esc($title) ?> | <?= APP_NAME ?></title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('css/admin-lte.css') ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <?= $this->include('App\Views\Includes\AdminNavBar') ?>

    <!-- Main Sidebar Container -->
    <?= $this->include('App\Views\Includes\AdminLeftSide') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Page Header -->
        <?= $this->include('App\Views\Includes\AdminBreadcrumb') ?>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <?= $this->renderSection('content') ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <?= $this->include('App\Views\Includes\AdminRightSide') ?>
    <!-- Main Footer -->
    <?= $this->include('App\Views\Includes\AdminFooter') ?>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('js/adminlte.min.js') ?>"></script>
</body>
</html>

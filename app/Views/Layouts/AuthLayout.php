<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= esc($title) ?> | <?= APP_NAME ?></title>

    <!-- Vendor Styles -->
    <?= $this->renderSection('css-vendor') ?>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('plugins/toastr/toastr.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('css/admin-lte.css') ?>">
    <!-- Custom Styles -->
    <?= $this->renderSection('css') ?>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?= base_url() ?>"><b><?= APP_NAME ?></b></a>
    </div>
    <!-- /.login-logo -->
    <?= $this->renderSection('content') ?>
    <!-- public System Footer -->
    <?= $this->include('App\Views\Includes\SystemFooter') ?>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Vendor JS -->
<?= $this->renderSection('js-vendor') ?>
<!-- Toastr -->
<script src="<?= base_url('plugins/toastr/toastr.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('js/adminlte.min.js') ?>"></script>
<!-- Custom JS -->
<?= $this->renderSection('js') ?>
<!-- Notification -->
<?= toastr_render() ?>
</body>
</html>

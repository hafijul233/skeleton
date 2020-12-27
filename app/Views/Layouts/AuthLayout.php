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
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Vendor Scripts -->
<?= $this->renderSection('js-vendor') ?>
<!-- Toastr -->
<script src="<?= base_url('plugins/toastr/toastr.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('js/adminlte.min.js') ?>"></script>
<!-- Custom Scripts -->
<?= $this->renderSection('js') ?>
<script type="text/javascript">
    $(function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.', 'Notification');
        $('.toastrDefaultSuccess').click(function () {
            toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultInfo').click(function () {
            toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultError').click(function () {
            toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultWarning').click(function () {
            toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
    });
</script>
</body>
</html>

<?= $this->extend('App\Views\Layouts\AuthLayout') ?>

<?= $this->section('css-vendor') ?>
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<!-- Toastr -->
<link rel="stylesheet" href="<?= base_url('plugins/toastr/toastr.min.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary card-outline">
    <div class="card-header text-center border-bottom-0">
        <h3 class="m-0"><?= esc($title) ?></h3>
    </div>
    <div class="card-body login-card-body">
        <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

        <form action="login.html" method="post">
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Confirm Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Change password</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p class="mt-3 mb-1">
                <a href="login.html">Login</a>
            </p>
        </div>
    </div>
    <!-- /.login-card-body -->
</div>
<?= $this->endSection() ?>

<?= $this->section('js-vendor') ?>
<!-- Toastr -->
<script src="<?= base_url('plugins/toastr/toastr.min.js') ?>"></script>
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>

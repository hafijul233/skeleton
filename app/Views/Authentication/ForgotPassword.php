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
        <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

        <form action="<?= route_to('forgot') ?>" method="post"
              accept-charset="UTF-8" autocomplete="off" spellcheck="false">
            <?= csrf_field() ?>
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="email"
                           class="form-control <?= invalid('email') ?>"
                           name="email" minlength="3" maxlength="255" size="255" value="<?= old('email') ?>"
                           placeholder="Email Address"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <?= error('email', 'email-error') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="social-auth-links text-center mb-3">
            <p class="mt-3 mb-1">
                <a href="<?= route_to('login') ?>">Already Registered? Login</a>
            </p>
            <!--        <p class="mb-0">
                        <a href="register.html" class="text-center">Register a new membership</a>
                    </p>-->
        </div>
        <!-- /.social-auth-links -->
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

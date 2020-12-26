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
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="<?= route_to('login') ?>" method="post"
              accept-charset="UTF-8" autocomplete="off" spellcheck="false">
            <?= csrf_field() ?>
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text"
                           class="form-control <?= session('errors.credential') ? 'is-invalid' : null ?>"
                           name="credential" minlength="3" maxlength="255" size="255" value="<?= old('credential') ?>"
                           placeholder="Email Address or Username"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <span id="credential-error" class="invalid-feedback"><?= session('errors.credential') ?></span>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password"
                       class="form-control <?= session('errors.password') ? 'is-invalid' : null ?>"
                       name="password" minlength="3" maxlength="255" size="255" value="<?= old('password') ?>"
                       placeholder="Email Address or Username"
                />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                <span id="password-error" class="invalid-feedback"><?= session('errors.password') ?></span>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center mb-3">
            <p class="mt-3 mb-1">
                <a href="<?= route_to('forgot') ?>">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="<?= route_to('register') ?>" class="text-center">Register a new membership</a>
            </p>
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
<script type="text/javascript">
    $(function() {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.');
        $('.toastrDefaultSuccess').click(function() {
            toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultInfo').click(function() {
            toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultError').click(function() {
            toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultWarning').click(function() {
            toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
    });
</script>
<?= $this->endSection() ?>

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
    <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="<?= route_to('register') ?>" method="post"
              accept-charset="UTF-8" autocomplete="off" spellcheck="false">
            <?= csrf_field() ?>
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text"
                           class="form-control <?= session('errors.name') ? 'is-invalid' : null ?>"
                           name="name" minlength="3" maxlength="255" size="255" value="<?= old('name') ?>"
                           placeholder="Full Name"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <span id="name-error" class="invalid-feedback"><?= session('errors.name') ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text"
                           class="form-control <?= session('errors.email') ? 'is-invalid' : null ?>"
                           name="email" minlength="3" maxlength="255" size="255" value="<?= old('email') ?>"
                           placeholder="Email Address"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <span id="email-error" class="invalid-feedback"><?= session('errors.email') ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="password"
                           class="form-control <?= session('errors.password') ? 'is-invalid' : null ?>"
                           name="password" minlength="3" maxlength="255" size="255" value="<?= old('password') ?>"
                           placeholder="Password"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <span id="password-error" class="invalid-feedback"><?= session('errors.password') ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="password"
                           class="form-control <?= session('errors.confirm_password') ? 'is-invalid' : null ?>"
                           name="confirm_password" minlength="3" maxlength="255" size="255"
                           value="<?= old('confirm_password') ?>"
                           placeholder="Retype Password"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock-open"></span>
                        </div>
                    </div>
                    <span id="password-error" class="invalid-feedback"><?= session('errors.password') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                            I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p class="mt-3 mb-1">
                <a href="<?= route_to('login') ?>" class="text-center">I already have a membership</a>
            </p>
        </div>


    </div>
    <!-- /.form-box -->
</div>
<?= $this->endSection() ?>

<?= $this->section('js-vendor') ?>
<!-- Toastr -->
<script src="<?= base_url('plugins/toastr/toastr.min.js') ?>"></script>
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>

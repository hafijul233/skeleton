<?= $this->extend('App\Views\Layouts\AuthLayout') ?>

<?= $this->section('css-vendor') ?>
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
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
                           class="form-control <?= invalid('credential') ?>"
                           name="credential" minlength="3" maxlength="255" size="255" value="<?= old('credential') ?>"
                           placeholder="Email Address or Username"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <?= error('credential', 'credential-error') ?>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="password"
                           class="form-control <?= invalid('password') ?>"
                           name="password" minlength="5" maxlength="255" size="255" value="<?= old('password') ?>"
                           placeholder="Password"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <?= error('password', 'password-error') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember" class="<?= invalid('remember') ?>">
                            Remember Me
                        </label>
                    </div>
                    <?= error('remember', 'remember-error') ?>
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
                <a href="<?= route_to('forgot') ?>" class="text-center">I forgot my password</a>
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

<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>

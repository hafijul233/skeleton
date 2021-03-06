<?= $this->extend('App\Views\Layouts\AuthLayout') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="<?= route_to('login') ?>" method="post"
              accept-charset="UTF-8" autocomplete="off" spellcheck="false">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="email" class="form-control is-valid" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <span class="invalid-feedback text-success">testing</span>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
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

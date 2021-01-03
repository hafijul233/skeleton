<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Version: <strong><?= APP_VERSION . '_' . APP_BUILD ?></strong>
    </div>
    <!-- Default to the left -->
    Copyright &copy; <?= date('Y', strtotime(APP_RELEASED)) ?>.
    <strong><a href="<?= SUPPORT_URL ?>" class="text-black"><?= ORG_TITLE_LONG ?></a></strong>.
</footer>

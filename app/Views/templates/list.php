<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger errors" role="alert">
        <ul class="list-group">
            <?php foreach ($errors as $error) : ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

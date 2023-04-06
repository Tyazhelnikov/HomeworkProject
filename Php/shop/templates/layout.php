<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $config['name'] ?></title>
    <link rel="shortcut icon" href="images/logo.png">

    <?php foreach ($config['assets']['css'] as $file) : ?>
        <link rel="stylesheet" href="<?= $file ?>">
    <?php endforeach ?>

<?= $content ?>

<?php foreach ($config['assets']['js'] as $file) : ?>
    <script src="<?= $file ?>"></script>
<?php endforeach; ?>
</body>
</html>




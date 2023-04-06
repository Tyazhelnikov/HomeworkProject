<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $config['name'] ?></title>
    <link rel="shortcut icon" href="img/logo.png">

    <?php foreach ($config['assets']['css'] as $file) : ?>
        <link rel="stylesheet" href="<?= $file ?>">
    <?php endforeach ?>

    <?= $content ?>
    <?php if (isset($data[0])) : ?>
        <p>Result: <?=$data[0]?></p>
    <?php else : ?>
        <p>Result: </p>
    <?php endif ?>

    <?php foreach ($config['assets']['js'] as $file) : ?>
        <script src="<?= $file ?>"></script>
    <?php endforeach; ?>
    </body>
</html>

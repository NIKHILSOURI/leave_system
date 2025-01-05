<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_settings->info('name') ?></title>
    <?php require_once('inc/header.php') ?>
</head>
<body class="bg-dark">
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    if(!file_exists($page.".php")){
        include '404.html';
    } else {
        include $page.'.php';
    }
    ?>
    <?php require_once('inc/footer.php') ?>
</body>
</html>
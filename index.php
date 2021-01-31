<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>

    <?php $basedir = realpath(__DIR__); ?>

    <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body>
    <?php
        include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');
        header('location: /eveg-js/Home/');
     ?>

</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>

</html>

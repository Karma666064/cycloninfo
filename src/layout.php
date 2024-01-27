<?php require_once('autoload.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../assets/css/style-index.css">

        <title>CyclonInfo - <?= $title ?></title>
    </head>

    <body>
        <?= navSprite(); ?>
        <?= $content ?>
    </body>
</html>
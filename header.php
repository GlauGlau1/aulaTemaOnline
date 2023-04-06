<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Primeira Pagina</title>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    </head>
    <body>
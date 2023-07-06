<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
</head>

<body>

    <nav>
        <?php
        the_custom_logo();

        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'menu_id' => 'primary-menu'
            )
        )
        ?>
    </nav>
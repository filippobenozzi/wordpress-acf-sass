<!DOCTYPE html>
<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]><body class="ie7"><![endif]-->
<!--[if IE 8 ]><body class="ie8"><![endif]-->
<!--[if IE 9 ]><body class="ie9"><![endif<]-->
<!--[ifload (gt IE 9)|!(IE)]><!--><!--<![endif]-->

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">

    <?php wp_head(); ?>
    <title><?php wp_title('&ndash;','true','right'); ?><?php bloginfo('name'); ?></title>
    <meta name="keywords" content="#" />

    <meta name="author" content="Dinamiza">
    <meta name="Copyright" content="Copyright 2022 Filippo Benozzi">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/common/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/common/img/apple-touch-icon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="common/js/html5.js"></script>
    <![endif]-->

</head>

<body lang="it">

    <section id="infocontent" style="display: none">
        <h3><a href="https://filippo.im" target="_blank" title="Filippo Benozzi">Filippo Benozzi</a></h3>
    </section><!--infocontent-->

    <?php render_theme_block('navbar'); ?>
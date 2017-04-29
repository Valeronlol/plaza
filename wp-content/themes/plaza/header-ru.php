<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="utf-8">
    <title><?php the_title();?></title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <?php wp_head(); ?>
</head>

<body>
<div id="main" class="<?php
echo get_field( "background_color", $post->ID ) . ' ';

if (is_category()){
    echo ' bluebg';
}
;?>">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-md-5">
                    <ul class="header-left-menu">
                        <li><a href="<?php echo get_permalink(44) ;?>">О центре</a></li>
                        <li><a href="<?php echo get_permalink(100) ;?>">Дордой плаза два</a></li>
                    </ul>
                </div>
                <div class="col-xs-2 col-md-2 header-logo-wrap">
                    <div class="header-logo">
                        <a href="/">
                            <span class="logo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/logo.png)"></span>
                        </a>
                    </div>
                </div>
                <div class="col-xs-5 col-md-5">
                    <ul class="header-right-menu">
                        <li>
                            <a class="header-menu-contacts" href="<?php echo get_permalink(64) ;?>">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                Контакты
                            </a>
                        </li>
                        <ul class="lang"><?php pll_the_languages() ;?></ul>
                        <li>
                            <i class="fa fa-search" aria-hidden="true" id="searchform_fa">
                                <?php get_search_form(); ?>
                            </i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
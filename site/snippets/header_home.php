<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> <?php echo $page->title() ?></title>
    <meta name="description" content="<?php echo $site->description() ?>"/>
    <link rel="shortcut icon" href="<?php echo $site->images()->find('favicon.jpg')->url() ?>">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo $site->title() ?>" />
    <meta property="og:title" content="<?php echo $page->title() ?>"/>
    <meta property="og:description" content="<?php echo $site->description() ?>" />
    <meta property="og:image" content="<?php echo $site->images()->find('splash_mobile.jpg')->url() ?>"/>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"  content="<?php echo $page->title() ?>"/>
    <meta name="twitter:description" content="<?php echo $site->description() ?>" />
    <meta name="twitter:image"  content="<?php echo $site->images()->find('splash_mobile.jpg')->url() ?>"/>

    <!--
         _____ ______   ___  ___  __    _______   ________   ________  ___  ___      ___    ___ _______   ________       _____ ______   _______
        |\   _ \  _   \|\  \|\  \|\  \ |\  ___ \ |\   ___  \|\   ____\|\  \|\  \    |\  \  /  /|\  ___ \ |\   ___  \    |\   _ \  _   \|\  ___ \
        \ \  \\\__\ \  \ \  \ \  \/  /|\ \   __/|\ \  \\ \  \ \  \___|\ \  \\\  \   \ \  \/  / | \   __/|\ \  \\ \  \   \ \  \\\__\ \  \ \   __/|
         \ \  \\|__| \  \ \  \ \   ___  \ \  \_|/_\ \  \\ \  \ \  \  __\ \  \\\  \   \ \    / / \ \  \_|/_\ \  \\ \  \   \ \  \\|__| \  \ \  \_|/__
          \ \  \    \ \  \ \  \ \  \\ \  \ \  \_|\ \ \  \\ \  \ \  \|\  \ \  \\\  \   \/  /  /   \ \  \_|\ \ \  \\ \  \ __\ \  \    \ \  \ \  \_|\ \
           \ \__\    \ \__\ \__\ \__\\ \__\ \_______\ \__\\ \__\ \_______\ \_______\__/  / /      \ \_______\ \__\\ \__\\__\ \__\    \ \__\ \_______\
            \|__|     \|__|\|__|\|__| \|__|\|_______|\|__| \|__|\|_______|\|_______|\___/ /        \|_______|\|__| \|__\|__|\|__|     \|__|\|_______|
                                                                                   \|___|/

    designed by http://mikenguyen.me ϟ
    ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––-->

    <?php include('googleanalytics.php') ?>
    <?php echo js('assets/js/jquery.js') ?>
    <?php echo js('assets/js/modernizr.js') ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php echo css('assets/css/foundation.css') ?>
    <?php echo css('assets/css/style.css') ?>
    <?php echo css('assets/css/animate.css') ?>

    <script type="text/javascript">
        var html = document.getElementsByTagName('html')[0];
        html.className += '  wf-loading';
        setTimeout(function () {
            html.className = html.className.replace(' wf-loading', '');
        }, 260);

    </script>

    <script src="https://use.typekit.net/txg3whs.js"></script>
    <script>try {
        Typekit.load({async: true});
    } catch (e) {
    }</script>


</head>


<body>

<div id="preloader">
    <div id="status">
        <div class="fadeInDown">
            <img src="<?php echo $site->images()->find('loading.png')->url() ?>" />
        </div>
    </div>
</div>

<div class="menu">
    <div class="main-menu">
        <ul>
            <li><a href="https://legalhustleclothing.com/shop/product-category/adults/">Adults</a></li>
            <li><a href="https://legalhustleclothing.com/shop/product-category/littlehustlersclothing/">Little Hustlers</a></li>
            <li><a href="mailto:info@legalhustleclothing.com">Contact us</a></li>
            <li><a href="http://instagram.com/legalhustleclothing">Instagram</a></li>
        </ul>
    </div>
</div>

<div class="show-for-small">
    <nav class="top-nav">
        <div class="row">
            <div class="small-2 columns">
                <div id="logo-small">
                    <a href="http://legalhustleclothing.com">
                        <img src="content/LHCLogo.png" />
                    </a>
                </div>
            </div>
            <div class="large-6 medium-8 small-10 columns">
                <div id="button-wrapper">
                    <button type="button" role="button" aria-label="Toggle Navigation" class="lines-button x">
                        <span class="lines-white"></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</div>


<div class="hide-for-small">
    <header>
        <div class="row">
                    <nav class="large-5 medium-4 small-10 columns">
                        <div class="hide-for-small">
                            <ul id="header-nav">
                                <li><a href="">HOME</a></li>
                                <li><a href="https://legalhustleclothing.com/shop/product-category/adults">ADULTS</a></li>
                                <li><a href="https://legalhustleclothing.com/shop/product-category/littlehustlersclothing">KIDS</a></li>
                                 <li><a href=""> </a></li>
                            </ul>
                        </div>
                    </nav>

            <div class="small-1 columns">
                <div id="logo">
                    <a href="http://legalhustleclothing.com">
                         <img src="content/LHCLogo.png" />
                    </a>
                </div>
            </div>

            <nav class="large-5 medium-4 small-10 columns">
                       <div class="hide-for-small">
                            <ul id="header-nav">
                                   <li><a href=""> </a></li>
                                 <li><a href="http://legalhustleclothing.com/shop/">BLOG</a></li>
                                 <li><a href="mailto:info@legalhustleclothing.com">CONTACT US</a></li>

                             </ul>
                         </div>
                     </nav>
        </div>
    </header>
</div>

<script>



</script>

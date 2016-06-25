<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> <?php echo $page->title() ?></title>
    <meta name="description" content="<?php echo $site->description() ?>"/>
    <link rel="shortcut icon" href="<?php echo $site->images()->find('favicon.jpg')->url() ?>">

    <meta property="og:site_name" content="<?php echo $site->title() ?>" />
    <meta property="og:title" content="<?php echo $page->title() ?> :: Axisfocal Wedding Photography" />
    <meta property="og:description" content="<?php echo $site->description() ?>" />

    <!--
         _____ ______   ___  ___  __    _______   ________   ________  ___  ___      ___    ___ _______   ________       _____ ______   _______
        |\   _ \  _   \|\  \|\  \|\  \ |\  ___ \ |\   ___  \|\   ____\|\  \|\  \    |\  \  /  /|\  ___ \ |\   ___  \    |\   _ \  _   \|\  ___ \
        \ \  \\\__\ \  \ \  \ \  \/  /|\ \   __/|\ \  \\ \  \ \  \___|\ \  \\\  \   \ \  \/  / | \   __/|\ \  \\ \  \   \ \  \\\__\ \  \ \   __/|
         \ \  \\|__| \  \ \  \ \   ___  \ \  \_|/_\ \  \\ \  \ \  \  __\ \  \\\  \   \ \    / / \ \  \_|/_\ \  \\ \  \   \ \  \\|__| \  \ \  \_|/__
          \ \  \    \ \  \ \  \ \  \\ \  \ \  \_|\ \ \  \\ \  \ \  \|\  \ \  \\\  \   \/  /  /   \ \  \_|\ \ \  \\ \  \ __\ \  \    \ \  \ \  \_|\ \
           \ \__\    \ \__\ \__\ \__\\ \__\ \_______\ \__\\ \__\ \_______\ \_______\__/  / /      \ \_______\ \__\\ \__\\__\ \__\    \ \__\ \_______\
            \|__|     \|__|\|__|\|__| \|__|\|_______|\|__| \|__|\|_______|\|_______|\___/ /        \|_______|\|__| \|__\|__|\|__|     \|__|\|_______|
                                                                                   \|___|/

    designed by http://mikenguyen.me ϟ COMMON STUDIO twitter.com/cmmnstudio
    ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––-->

    <?php include("googleanalytics.php"); ?>
    <?php echo js('assets/js/jquery.js') ?>
    <?php echo js('assets/js/modernizr.js') ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
            <li><a href="<?php echo $site->find('about')->id() ?>"><?php echo $site->find('about')->title() ?></a></li>
            <li><a href="<?php echo $site->find('portfolio')->id() ?>"><?php echo $site->find('portfolio')->title() ?></a></li>
            <li class="blog-link"><a><?php echo $site->find('training')->title() ?></a></li>
            <li><a href="<?php echo $site->find('contact')->id() ?>"><?php echo $site->find('contact')->title() ?></a></li>
        </ul>
    </div>
</div>

<div class="show-for-small">
    <nav class="top-nav">
        <div class="row">
            <div class="small-2 columns">
                <div id="logo-small">
                    <a href="http://axisfocal.com">
                        <img src="<?php echo  $site->images()->find('header_logo.png')->url() ?>" />
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
            <div class="small-2 columns">
                <div id="logo">
                    <a href="http://axisfocal.com">
                        <img src="<?php echo  $site->images()->find('header_logo.png')->url() ?>" />
                    </a>
                </div>
            </div>
            <nav class="large-7 large-offset-3 medium-8 medium-offset-2 small-10 columns">
                <div class="hide-for-small">
                    <ul id="header-nav">
                        <li><a href="<?php echo $site->find('about')->id() ?>"><?php echo $site->find('about')->title() ?></a></li>
                        <li><a href="<?php echo $site->find('portfolio')->id() ?>"><?php echo $site->find('portfolio')->title() ?></a></li>
                        <li class="blog-link"><a><?php echo $site->find('training')->title() ?></a></li>
                        <li><a href="<?php echo $site->find('contact')->id() ?>"><?php echo $site->find('contact')->title() ?></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</div>

<script>


     var bloglink = '.blog-link';
        $(bloglink).click(function(){
            $(bloglink).addClass('animated shake').one('webKitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',

            function() {
                $(bloglink).removeClass('animated shake');
            });
        });


</script>

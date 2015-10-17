<?php
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 12:38 PM
 */

?>
<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Sakshi sang Prashant</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <!--[if lte IE 8]>
    <script src="<?php echo assets_css_url('horizons'); ?>/css/ie/html5shiv.js"></script>
    <![endif]-->
    <script src="<?php echo assets_js_url('horizons'); ?>/jquery.min.js"></script>
    <script src="<?php echo assets_js_url('horizons'); ?>/jquery.dropotron.min.js"></script>
    <script src="<?php echo assets_js_url('horizons'); ?>/skel.min.js"></script>
    <script src="<?php echo assets_js_url('horizons'); ?>/skel-layers.min.js"></script>
    <script src="<?php echo assets_js_url('horizons'); ?>/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="<?php echo assets_css_url('horizons'); ?>skel.css" />
        <link rel="stylesheet" href="<?php echo assets_css_url('horizons'); ?>style.css" />
    </noscript>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo assets_css_url('horizons'); ?>/ie/v8.css" />
    <![endif]-->
</head>
<body class="homepage">

<!-- Header -->
<div id="header">
    <div class="container">

        <!-- Logo -->
        <!--<h1><a href="#" id="logo">Horizons</a></h1>-->

        <?php $this->load->view(THEME_NAV_MENU); ?>


        <!-- Banner -->
        <div id="banner">
            <div class="container">
                <section>
                    <header class="major">
                        <h2>Sakshi sang Prashant!</h2>
                        <!--<span class="byline">&hellip; a responsive HTML5 site template freebie by <a
                                href="http://templated.co">TEMPLATED</a>. Released for free under the <a
                                href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash;
                            just give us credit!</span>-->
                    </header>
                    <?php echo anchor('login', 'Sign In', 'class="button alt"') ?>
                </section>
            </div>
        </div>

    </div>
</div>




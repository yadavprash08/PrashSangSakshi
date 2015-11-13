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
        <?php
        if (isset($include_bootstrap)) {
            ?>
            <link rel="stylesheet" href="<?php echo assets_css_url('bootstrap') ?>/corousal.css"/>
            <link rel="stylesheet" href="<?php echo assets_css_url('bootstrap') ?>/glyphicon.css"/>

            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <?php } ?>
        <link rel="stylesheet" href="<?php echo assets_css_url() ?>/main.css"/>
        <!--[if lte IE 8]>
        <script src="<?php echo assets_css_url('horizons'); ?>/css/ie/html5shiv.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- <script src="<?php echo assets_js_url('horizons'); ?>/jquery.dropotron.min.js"></script>
        <script src="<?php echo assets_js_url('horizons'); ?>/skel.min.js"></script>
        <script src="<?php echo assets_js_url('horizons'); ?>/skel-layers.min.js"></script>
        <script src="<?php echo assets_js_url('horizons'); ?>/init.js"></script> -->
        <link rel="stylesheet" href="<?php echo assets_css_url('horizons'); ?>/skel.css"/>
        <link rel="stylesheet" href="<?php echo assets_css_url('horizons'); ?>/style.css"/>
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo assets_css_url('horizons'); ?>/ie/v8.css"/>
        <![endif]-->
    </head>
<body class="homepage">

<!-- Header -->
<div id="header">
    <div class="container">

        <!-- Logo -->
        <!--<h1><a href="#" id="logo">Horizons</a></h1>-->

        <!-- Banner -->
        <div id="banner">
            <div class="container">
                <section>
                    <header class="major">
                        <h2>Sakshi &amp; Prashant</h2>
                        <span class="byline">Save the dates</span>

                        <h2>&nbsp;</h2>

                        <h2>&nbsp;</h2>

                        <h3>December 7<sup>th</sup>, 2015</h3>

                        <h3>

                        </h3>
                    </header>
                    <?php // echo anchor('login', 'Sign In', 'class="button alt"'); ?>
                </section>
            </div>
        </div>

    </div>
</div>
<?php
$this->load->view(THEME_NAV_MENU);


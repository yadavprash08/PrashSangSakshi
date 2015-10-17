<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 7:48 PM
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
    <title><?php echo page_title(); ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="stylesheet" href="<?php echo assets_css_url('bootstrap') ?>/corousal.css"/>
    <link rel="stylesheet" href="<?php echo assets_css_url('bootstrap') ?>/glyphicon.css"/>
    <link rel="stylesheet" href="<?php echo assets_css_url('timeline')?>/style.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--[if lte IE 8]>
    <script src="<?php echo assets_css_url('horizons'); ?>/css/ie/html5shiv.js"></script>

    <![endif]-->
    <script src="<?php echo assets_js_url('horizons'); ?>/jquery.min.js"></script>
    <script src="<?php echo assets_js_url('horizons'); ?>/jquery.dropotron.min.js"></script>
    <script src="<?php echo assets_js_url('horizons'); ?>/skel.min.js"></script>
    <script src="<?php echo assets_js_url('horizons'); ?>/skel-layers.min.js"></script>
    <script src="<?php echo assets_js_url('horizons'); ?>/init.js"></script>
    <script src="<?php echo assets_js_url('timeline')?>/jquery.easing.1.3.js"></script>
    <script src="<?php echo assets_js_url('timeline')?>/modernizr.custom.11333.js"></script>
    <noscript>
        <link rel="stylesheet" href="<?php echo assets_css_url('horizons'); ?>skel.css"/>
        <link rel="stylesheet" href="<?php echo assets_css_url('horizons'); ?>style.css"/>
    </noscript>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo assets_css_url('horizons'); ?>/ie/v8.css"/><![endif]-->

    <!--    Adding the controller specific javascript -->
    <?php
    $controller_name = $this->uri->segment(1);
    $view_name = $this->uri->segment(2);
    $controller_js = $controller_name . ".js";
    $view_js = "{$controller_name}/{$view_name}.js";
    echo include_js_script($controller_js)."\n";
    echo include_js_script($view_js)."\n";
    ?>
    </head >
<body class="no-sidebar" >

<!--Header -->
<div id = "header" >
    <div class="container" >

        <!--Logo -->
        <h1 ><a href = "#" id = "logo" > Sakshi sang Prashant </a ></h1 >
        <?php $this->load->view(THEME_NAV_MENU); ?>
    </div>
</div>
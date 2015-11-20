<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 11/13/15
 * Time: 5:36 PM
 */

$arr_stylesheets = array('main.css', 'flexslider.css', 'animate.css', 'magnific-popup.css', 'vegas.min.css', 'flipclock.css', 'pace.css');
if (isset($header_include_css)) {
    array_push($arr_stylesheets, $header_include_css);
}

$arr_javascripts = array('pace.js');

?>

<html>
<head>
    <title>Prashant weds Sakshi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="www.sakshiprashant.com/facivon.ico"/>

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.min.js"></script>-->
    <?php
    foreach ($arr_javascripts as $js_file) {
        echo "\n";
        ?>
        <script src="<?php echo assets_js_url($js_file); ?>"></script><?php
    }
    ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Tangerine:400,700|Great+Vibes|Niconne' rel='stylesheet' type='text/css'>
    <?php
    foreach ($arr_stylesheets as $style_css) {
        echo "\n";
        ?>
        <link type="text/css" rel="stylesheet" href="<?php echo assets_css_url($style_css); ?>" /><?php
    }
    ?>

</head>
<body>

<section class="header">
    <header class="top-header">
        <h1 class="section-header site-header">Prashant <span style="font-size: .5em;">weds</span> Sakshi</h1>
        <div class="text-center">
            <div class="center-countdown-row">
                <div id="getting-started" class="center-countdown"></div>
            </div>
        </div>
    </header>
    <div class="image-arrows">&nbsp;</div>
</section>

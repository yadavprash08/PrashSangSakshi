<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 11/13/15
 * Time: 5:36 PM
 */

$arr_stylesheets = array('main.css', 'animate.css', 'magnific-popup.css', 'vegas.min.css', 'flipclock.css');
if (isset($header_include_css)) {
    array_push($arr_stylesheets, $header_include_css);
}


?>

<html>
<head>
    <title>Prashant weds Sakshi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="www.sakshiprashant.com/facivon.ico"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
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
        <div class="text-center">
            <div class="center-countdown-row">
                <div id="getting-started" class="center-countdown"></div>
            </div>
        </div>
    </header>
    <div class="image-arrows">&nbsp;</div>
</section>

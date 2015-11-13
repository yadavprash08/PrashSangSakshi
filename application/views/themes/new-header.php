<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 11/13/15
 * Time: 5:36 PM
 */

$arr_stylesheets = array('main.css');
$arr_javascripts = array();

if (isset($header_include_css)) {
    array_push($arr_stylesheets, $header_include_css);
}

if (isset($header_include_js)) {
    array_push($arr_javascripts, $header_include_js);
}

?>

<html>
<head>
    <title>Sakshi Prashant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <?php
    foreach ($arr_stylesheets as $style_css) {
        ?>
        <link type="text/css" rel="stylesheet" href="<?php echo assets_css_url($style_css); ?>" /><?php
    }
    ?>

    <?php
    foreach ($arr_javascripts as $js_file) {
        ?>
        <script src="<?php echo assets_js_url($js_file); ?>"></script><?php
    }
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<section class="header">
    <header class="top-header">
        <h1><i class="fa fa-camera fa-2x"></i>&nbsp;</h1>
    </header>
    <div class="image-arrows">&nbsp;</div>
</section>

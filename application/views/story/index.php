<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 9/10/15
 * Time: 8:06 AM
 */
?>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        body{
            padding: 0px;
            margin: 0px;
        }
        .paralex:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
        }
        .paralex{
            background-image: url("http://localhost/marriage/assets/images/horizons/pic01.jpg");
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;

            position: relative;
        }

        .paralex > * {
            z-index: 0;
            position: relative;
        }
        .wrapper{
            height: 100vh;
        }
    </style>

</head>

<body>
<div class="paralex">
    <div>&nbsp;</div>
</div>
<div id="main" class="wrapper style1">
Hi
</div>
</body>

</html>

<?php
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 12:38 PM
 */

$arr_javascripts = array('jquery.magnific-popup.min.js', 'vegas.min.js', 'flipclock.min.js', 'smooth-scroll.js','jquery.waypoints.min.js','modernizr.js', 'main.js');
if (isset($header_include_js)) {
    array_push($arr_javascripts, $header_include_js);
}
?>

<div class="wrapper style1">
    <!--<div class="image-arrows2">&nbsp;</div>-->
    <!-- Footer -->
    <div id="footer">
        <div class="container">

            <!-- Copyright -->
            <div class="copyright">
                Design: &copy; Prashant Yadav &amp; Sakshi Agrawal
            </div>

        </div>
    </div>
</div>
<!-- Including the javascripts -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/1.3.1/lazysizes.min.js" async=""></script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.min.js"></script>-->
<?php
foreach ($arr_javascripts as $js_file) {
    echo "\n";
    ?>
    <script src="<?php echo assets_js_url($js_file); ?>"></script><?php
}
?>

</body>
</html>


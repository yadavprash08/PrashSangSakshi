<div class="page-parallax-bg">
    <!-- Featured -->
    <div class="wrapper style1">
        <section class="container">
            <header class="major">
                <div class="row">
                    <h2 class="section-header col-mid-12"><i class="fa fa-amazon"></i> Groom &amp; Bride <i
                            class="fa fa-windows"></i></h2>
                </div>
            </header>
            <section>
                <?php
                $_col_style_class_img = "col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center";
                $_col_style_class_side = "col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center bride_groom_div";
                ?>
                <div class="row">
                    <div class="<?php echo $_col_style_class_side; ?>">&nbsp;</div>
                    <div class="<?php echo $_col_style_class_img; ?>">
                        <a class="bride_groom_a" href="<?php echo assets_url('images/bride_groom.jpg'); ?>">
                            <div class="animate bride_groom groom" style="margin-left: 0px;"
                                 data-animation="flipInY"
                                 data-animation-delay="100">
                                &nbsp;</div>
                        </a>
                    </div>
                    <div class="<?php echo $_col_style_class_side; ?>">
                        <i class="fa fa-heart fa-5x"></i>
                    </div>
                    <div class="<?php echo $_col_style_class_img; ?>">
                        <a class="bride_groom_a" href="<?php echo assets_url('images/bride_groom.jpg'); ?>">
                            <div class="animate bride_groom bride" style="margin-right: 0px;" data-animation="flipInY"
                                 data-animation-delay="100">
                                &nbsp;</div>
                        </a>
                    </div>
                    <div class="<?php echo $_col_style_class_side; ?>">&nbsp;</div>
                    <div class="col-md-12">
                        &nbsp;
                    </div>
                </div>

                <div class="text-center poem">
                    <p>At first I thought we would just be friends.</p>

                    <p>A little did we know, our friendship would bend</p>

                    <p>To a love that’s so big for the world to see</p>

                    <p>that you and me are meant to be.</p>

                    <p>&nbsp;</p>

                    <p>Sun or snow, rain or shine</p>

                    <p>forever, forever you will be mine</p>

                    <p>Mine for me, mine to be</p>

                    <p>Mine for all eternity.</p>

                    <p>&nbsp;</p>
                </div>
            </section>
        </section>
    </div>
    <div class="image-arrows2">&nbsp;</div>
    <!-- Main -->
    <div class="wrapper style2">
        <!--<div class="page-parallax-bg">
            <div class="bg_wrapper2">-->
        <section class="container">

            <header>
                <h2 class="animate section-header" data-animation="fadeIn" data-animation-delay="100"><span>When</span><span
                        style="color: #ff0000;">&nbsp;&amp;&nbsp;</span><span class="animate-plus"
                                                                              data-animations="bounceIn"
                                                                              data-delay="100">Where</span></h2>
            </header>
            <div class="row">
                <div class=" col-xs-12 col-md-4 col-sm-12 col-lg-4">
                    <h2><i class="fa fa-bell fa-1x"></i> Engagement</h2>
                    <h4>Sunday December 06, 2015</h4>
                    <h5>05:00 PM onwards</h5>

                    <h3>Hotel Laxmi Villas</h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-2 col-md-2">
                    &nbsp;
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 border-map animate" data-animation="zoomIn">
                    <iframe class="border-map" width="100%" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?q=Hotel%20Laxmi%20Villas%2C%20Narayan%20Singh%20Circle%2C%20Jaipur&key=AIzaSyBxyqIPaqi9pCu6owQ2Av8tRld82rcZp2A"
                            allowfullscreen></iframe>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    &nbsp;
                </div>

                <div class=" col-xs-12 col-md-4 col-sm-12 col-lg-4">
                    <h2><i class="fa fa-bell fa-1x"></i>Wedding</h2>
                    <h4>Monday December 07, 2015</h4>
                    <h5>08:00 PM onwards</h5>

                    <h3>Entertainment Paradise</h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-2 col-md-2">
                    &nbsp;
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 border-map fadeIn animate"
                     data-animation-delay="500" data-animation="zoomIn">
                    <iframe width="100%" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?q=EP%20Entertainment%20Pradise%2C%20Jaipur%2C%20Rajasthan%2C%20India&key=AIzaSyBxyqIPaqi9pCu6owQ2Av8tRld82rcZp2A"
                            allowfullscreen></iframe>
                </div>
            </div>

        </section>
        <!--</div>
    </div>-->
        <div class="image-arrows">&nbsp;</div>
    </div>

    <?php
    $family_data = array('SatyaveerSingh.jpg' => 'Dr. Satyaveer Singh',
    );
    ?>

    <div class="wrapper style1">
        <section class="container">
            <header class="major">
                <h2 class="h2-center section-header">Family</h2>
            </header>

            <div class="row family-tree">
                <?php foreach ($family_data as $key => $val): ?>
                    <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3 family-intro">
                        <img src="<?php echo assets_url("images/${key}") ?>" alt="<?php echo $key; ?>"/>

                        <h3><?php echo $val; ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
    <div class="image-arrows2">&nbsp;</div>
    <div class="wrapper style2">
        <section class="container">
            <h2 class="text-center section-header">Wedding Invitation</h2>
        </section>
        <div class="image-arrows">&nbsp;</div>
    </div>

    <?php $gal_images = array('pic01.jpg',
        'pic02.jpg',
        'pic03.jpg',
        'pic04.jpg',
        'pic05.jpg',
        'pic06.jpg',
        'pic07.jpg',
        'pic08.jpg',
        'pic09.jpg',
        'pic10.jpg',
        'pic11.jpg',
        'pic12.jpg'); ?>

    <!-- Featured -->
    <div class="wrapper style1">
        <div id="gallery" class="container">
            <header class="major">
                <h2 class="animate section-header" data-animation="slideInLeft" data-animation-delay="150">Gallery</h2>
            </header>
            <div class="row poem">
                <p>&nbsp;</p>

                <p>Every love story is beautiful but ours is my favorite.</p>

                <p>&nbsp;</p>
            </div>
            <div class="row my-gallery">
                <?php
                foreach ($gal_images as $gal_img) {
                    $url = assets_url('images/photo-galery');
                    $img_url = "{$url}/{$gal_img}";
                    ?>
                    <a href="<?php echo $img_url; ?>">
                        <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3 gallery-img-container">
                            <img class="left photo-galary-small-img"
                                 src="<?php echo $img_url; ?>"
                                 alt="">
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>
            </section>
        </div>
    </div>
    <div class="image-arrows2">&nbsp;</div>

    <div class="wrapper style2">
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1040614595951557";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="container">
            <h2 class="section-header"> Wishes</h2>

            <div class="row">
                <div class="fb-comments" data-href="https://www.facebook.com/yadavprash08#"
                     data-width="100%"
                     data-numposts="10"></div>
            </div>
        </div>
        <div class="image-arrows">&nbsp;</div>
    </div>

    <div class="wrapper style1" style="height: 20vh;">

    </div>

</div>

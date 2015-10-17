<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 8:35 PM
 */
?>
<!--Nav -->
<nav id="nav">
    <ul>
        <li><a href="<?php echo $this->config->base_url(); ?>"> Home</a></li>
        <li><?php echo anchor('location', 'Directions'); ?></li>
        <li><?php echo anchor('story', 'Our Story')?></li>
        <li>
            <?php echo anchor('home', 'About'); ?>
            <ul>
                <li><?php echo anchor('about/yadavs', 'Yadav Family'); ?></li>
                <li><?php echo anchor('about/agarwals', 'Agarwal Family'); ?></li>
            </ul>
        </li>
    </ul>
</nav>

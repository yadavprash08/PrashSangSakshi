<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 8:35 PM
 */
if(!function_exists('get_nav_menu_items')){
    function get_nav_menu_items(){
        $str_code = "";
        if (isset($menu_items) && is_array($menu_items)) {
            foreach ($menu_items as $menu) {
                $str_code = "{$str_code}\n<li>".anchor($menu[0], $menu[1], $menu[2])."</li>";
            }
        }
        return $str_code;
    }
}


?>
<!--Nav -->
<nav id="nav">
    <ul>
        <li><a href="<?php echo $this->config->base_url(); ?>"> Home</a></li>
        <li><?php echo anchor('location', 'Directions'); ?></li>
        <li><?php echo anchor('story', 'Our Story') ?></li>
        <?php echo get_nav_menu_items(); ?>
        <li>
            <?php echo anchor('home', 'About'); ?>
            <ul>
                <li><?php echo anchor('about/yadavs', 'Yadav Family'); ?></li>
                <li><?php echo anchor('about/agarwals', 'Agarwal Family'); ?></li>
            </ul>
        </li>
    </ul>
</nav>

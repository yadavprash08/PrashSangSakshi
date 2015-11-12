<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 7:54 PM
 */

if (!function_exists('assets_url')) {
    /**
     * --------------------------------------------------------------------------------
     * Assets directory to list the assets in the website.
     * --------------------------------------------------------------------------------
     * This function would return the url for the assets directory in the website.
     *
     * @param null $group
     * @return the url for the file
     */
    function assets_url($group = null)
    {
        $site_base_url = rtrim(site_url(), "/");
        $site_base_url = rtrim($site_base_url, "index.php");
        $site_base_url = rtrim($site_base_url, "/");
        $group_str = "";
        if (null != $group) {
            if (is_array($group)) {
                $group_str = implode('/', $group);
            } else {
                $group_str = "{$group}";
            }
        }
        $url = "{$site_base_url}/assets/{$group_str}";
        return rtrim($url, '/');
    }
}

if (!function_exists('assets_js_url')) {
    /**
     * --------------------------------------------------------------------------------
     *  produce the js assets link to be used in the website
     * --------------------------------------------------------------------------------
     * @param null $group
     */
    function assets_js_url($group = null)
    {
        $group_arr = array('js');
        if (null != $group) {
            array_push($group_arr, $group);
        }
        return assets_url($group_arr);
    }
}

if (!function_exists('assets_css_url')) {
    /**
     * --------------------------------------------------------------------------------
     *  produce the css assets link to be used in the website
     * --------------------------------------------------------------------------------
     * @param null $group
     */
    function assets_css_url($group = null)
    {
        $group_arr = array('css');
        if (null != $group) {
            array_push($group_arr, $group);
        }
        return assets_url($group_arr);
    }
}

if (!function_exists('page_title')) {
    function page_title()
    {
        if (isset($page_title)) {
            return $page_title;
        }

        $ci =& get_instance();
        $controller_name = ucfirst($ci->router->fetch_class());
        $controller_method = ucfirst($ci->router->fetch_method());
        $controller_method = ("Index" === $controller_method) ? "" : $controller_method;
        return rtrim("{$controller_name}-{$controller_method}", "-");
    }
}

if (!function_exists('include_js_script')) {
    /**
     * --------------------------------------------------------------------------------
     *  produce the import statement to embed the javascript in the page.
     * --------------------------------------------------------------------------------
     * @param null $group
     * @return string to be placed on the html page to include the javascript
     */
    function include_js_script($group = null)
    {
        $group_arr = array('css');
        if (null != $group) {
            array_push($group_arr, $group);
        }
        $assets_url = assets_url($group_arr);
        return "<script type=\"text/javascript\" src=\"${assets_url}\"></script>";
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 7:42 PM
 */
class Location extends CI_Controller
{

    public function index()
    {
        $this->load->view(THEME_HEADER);
        $this->load->view('location/index.php');
        $this->load->view(THEME_FOOTER);
    }

}
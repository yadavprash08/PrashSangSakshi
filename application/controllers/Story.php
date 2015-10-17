<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 9/10/15
 * Time: 8:04 AM
 */
class Story extends CI_Controller
{

    public function index()
    {
        $this->load->view(THEME_HEADER);
        // @todo custom code goes here
        $this->load->view('story/index.php');
        $this->load->view(THEME_FOOTER);
    }
}
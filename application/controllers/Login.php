<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 7:18 PM
 */
class Login extends CI_Controller
{

    /**
     * Index function to start the authentication for the current user.
     */
    public function index()
    {
        $this->load->view(THEME_HEADER);
        $this->load->view(THEME_FOOTER);
    }

}
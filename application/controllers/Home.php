<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 12:33 PM
 */
class Home extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        // custom constructor code goes here

    }

    public function index(){
        $this->load->view(THEME_HOME_HEADER);
        $this->load->view('home/index.php');
        $this->load->view(THEME_FOOTER);
    }

}
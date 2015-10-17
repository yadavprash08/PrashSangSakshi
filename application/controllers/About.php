<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: yprasha
 * Date: 8/23/15
 * Time: 10:26 PM
 */
class About extends CI_Controller
{

    /**
     * About constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Index
     */
    public function index(){
        $this->load->view(THEME_HEADER);
        $this->load->view('about/index.php');
        $this->load->view(THEME_FOOTER);
    }

    /**
     * Yadavs
     */
    public function yadavs()
    {
        $this->load->view(THEME_HEADER);
        $this->load->view('about/yadavs.php');
        $this->load->view(THEME_FOOTER);
    }

    /**
     * Agarwals
     */
    public function agarwals()
    {
        $this->load->view(THEME_HEADER);
        $this->load->view('about/agarwals.php');
        $this->load->view(THEME_FOOTER);
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Home
 */
class Home extends MX_Controller
{
    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 網站首頁
     */
    public function index()
    {
        $this->load->view('home');
    }
}

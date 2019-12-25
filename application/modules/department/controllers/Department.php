<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends MX_Controller
{
    /**
     * Department constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 科系管理系統頁面
     */
    public function index()
    {
        $this->load->view('department');
    }
}
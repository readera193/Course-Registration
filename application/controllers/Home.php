<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller
{
    /**
     * @var
     */
    protected $department_api;

    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->department_api = Modules::load('department');
    }

    /**
     * 網站首頁
     */
    public function index()
    {
        $this->department_api->get_department_view();
    }
}

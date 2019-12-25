<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Home
 */
class Home extends MX_Controller
{
    /**
     * @var department
     */
    protected $department;

    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->department = Modules::load('department');
    }

    /**
     * 網站首頁
     */
    public function index()
    {
        $this->department->get_department_view();
    }
}

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

    public function get_department_view()
    {
        $this->load->view('department');
    }
}
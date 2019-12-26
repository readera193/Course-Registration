<?php

/**
 * Class Department
 *
 * @property Department_model $department_model
 */
class Department extends MX_Controller
{
    /**
     * Department constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Department_model', 'department_model');
    }

    /**
     * 科系管理系統頁面
     */
    public function index()
    {
        $result = $this->department_model->get_department_data();
        $this->load->view('department', array('departments' => $result->result_array()));
    }
}
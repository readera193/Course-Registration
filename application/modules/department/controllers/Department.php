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

    /**
     * 新增科系資料頁面
     */
    public function insert()
    {
        $this->load->view('insert_view');
    }

    /**
     * 新增科系資料到資料庫
     */
    public function insert_db()
    {
        $department_data = $this->input->post();
        // 多一個 0 => [系主任的輸入值]
        array_pop($department_data);
        $this->department_model->insert_department_data($department_data);

        echo "新增成功<br>";
        $this->load->view('navigate_department');
    }
}
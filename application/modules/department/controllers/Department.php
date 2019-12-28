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
        $result = $this->department_model->get_data();
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
        $department_data = array(
            '系碼' => $this->input->post('系碼'),
            '系名' => $this->input->post('系名'),
            '系主任' => $this->input->post('系主任')
        );
        $this->department_model->insert_data($department_data);

        echo "新增成功<br>";
        $this->load->view('navigate_department');
    }

    /**
     * 刪除科系資料
     *
     * @param string $id 科系代碼
     */
    public function delete($id)
    {
        $this->department_model->delete_data($id);

        echo "刪除成功<br>";
        $this->load->view('navigate_department');
    }
}
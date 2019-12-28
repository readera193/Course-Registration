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

        echo "新增成功";
        $this->load->view('navigate_department');
    }

    /**
     * 修改科系資料
     *
     * @param string $id 科系代碼
     */
    public function update($id)
    {
        $result = $this->department_model->get_data_by_id($id)->first_row('array');
        $this->load->view('update_view', array('department_data' => $result));
    }

    /**
     * 修改科系代碼表的資料
     *
     * @param string $id 科系代碼
     */
    public function update_db($id)
    {
        $name = $this->input->post('系名');
        $dean = $this->input->post('系主任');
        $this->department_model->update_data($id, $name, $dean);

        echo "修改成功";
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

        echo "刪除成功";
        $this->load->view('navigate_department');
    }

    public function search()
    {
        $id = $this->input->post('系碼');
        $result = $this->department_model->get_data_by_id($id);
        if ($result->num_rows() > 0){
            $department = $result->first_row('array');
            echo "
            <table border='1'>
                <tr>
                    <th>系碼</th>
                    <th>系名</th>
                    <th>系主任</th>
                </tr>
                <tr>
                    <td>{$department['系碼']}</td>
                    <td>{$department['系名']}</td>
                    <td>{$department['系主任']}</td>
                </tr>
            </table>";
        }
        else{
            echo "查無資料";
        }
        $this->load->view('navigate_department');
    }
}


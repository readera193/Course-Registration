<?php

/**
 * Class Student
 *
 * @property Student_model $student_model
 */
class Student extends MX_Controller
{
    /**
     * Student constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model', 'student_model');
    }

    /**
     * 學生管理系統頁面
     */
    public function index()
    {
        $result = $this->student_model->get_data();
        $this->load->view('student', array('students' => $result->result_array()));
    }

    /**
     * 新增學生資料頁面
     */
    public function insert()
    {
        $this->load->view('insert_view');
    }

    /**
     * 新增學生資料到資料庫
     */
    public function insert_db()
    {
        $student_data = array(
            '學號' => $this->input->post('學號'),
            '姓名' => $this->input->post('姓名'),
            '系碼' => $this->input->post('系碼')
        );
        $result = $this->student_model->insert_data($student_data);

        if ($result) {
            echo "新增成功";
        } else {
            echo "新增失敗";
        }
        $this->load->view('navigate_student');
    }

    /**
     * 修改學生資料
     *
     * @param string $id 學號
     */
    public function update($id)
    {
        $result = $this->student_model->get_data_by_id($id)->first_row('array');
        $this->load->view('update_view', array('student_data' => $result));
    }

    /**
     * 修改學生資料表的資料
     *
     * @param string $student_id 學號
     */
    public function update_db($student_id)
    {
        $name = $this->input->post('姓名');
        $department_id = $this->input->post('系碼');
        $result = $this->student_model->update_data($student_id, $name, $department_id);

        if ($result) {
            echo "修改成功";
        } else {
            echo "修改失敗";
        }
        $this->load->view('navigate_student');
    }

    /**
     * 刪除學生資料
     *
     * @param string $id 學號
     */
    public function delete($id)
    {
        $this->student_model->delete_data($id);

        echo "刪除成功";
        $this->load->view('navigate_student');
    }

    /**
     * 用學號查詢學生資料表
     */
    public function search()
    {
        $id = $this->input->post('學號');
        $result = $this->student_model->get_data_by_id($id);
        if ($result->num_rows() > 0) {
            $student = $result->first_row('array');
            echo "
            <table border='1'>
                <tr>
                    <th>學號</th>
                    <th>姓名</th>
                    <th>系碼</th>
                </tr>
                <tr>
                    <td>{$student['學號']}</td>
                    <td>{$student['姓名']}</td>
                    <td>{$student['系碼']}</td>
                </tr>
            </table>";
        } else {
            echo "查無資料";
        }
        $this->load->view('navigate_student');
    }
}


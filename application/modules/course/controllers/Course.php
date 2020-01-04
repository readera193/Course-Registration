<?php

/**
 * Class Course
 *
 * @property Course_model $course_model
 */
class Course extends MX_Controller
{
    /**
     * Course constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model', 'course_model');
    }

    /**
     * 課程管理系統頁面
     */
    public function index()
    {
        $result = $this->get_courses();
        $this->load->view('course', array('courses' => $result->result_array()));
    }

    /**
     * 取得所有課程資料
     *
     * @return CI_DB_result
     */
    public function get_courses()
    {
        return $this->course_model->get_data();
    }

    /**
     * 新增課程資料頁面
     */
    public function insert()
    {
        $this->load->view('insert_view');
    }

    /**
     * 新增課程資料到資料庫
     */
    public function insert_db()
    {
        $course_data = array(
            '課號' => $this->input->post('課號'),
            '課名' => $this->input->post('課名'),
            '學分數' => $this->input->post('學分數')
        );
        $result = $this->course_model->insert_data($course_data);

        if ($result) {
            echo "新增成功";
        } else {
            echo "新增失敗";
        }
        $this->load->view('navigate_course');
    }

    /**
     * 修改課程資料
     *
     * @param string $id 課程代碼
     */
    public function update($id)
    {
        $result = $this->course_model->get_data_by_id($id)->first_row('array');
        $this->load->view('update_view', array('course_data' => $result));
    }

    /**
     * 修改課程資料表的資料
     *
     * @param string $id 課號
     */
    public function update_db($id)
    {
        $name = $this->input->post('課名');
        $credit = $this->input->post('學分數');
        $result = $this->course_model->update_data($id, $name, $credit);

        if ($result) {
            echo "修改成功";
        } else {
            echo "修改失敗";
        }
        $this->load->view('navigate_course');
    }

    /**
     * 刪除課程資料
     *
     * @param string $id 課號
     */
    public function delete($id)
    {
        $this->course_model->delete_data($id);

        echo "刪除成功";
        $this->load->view('navigate_course');
    }

    /**
     * 用課號查詢課程資料表
     */
    public function search()
    {
        $id = $this->input->post('課號');
        $result = $this->course_model->get_data_by_id($id);
        if ($result->num_rows() > 0) {
            $course = $result->first_row('array');
            echo "
            <table border='1'>
                <tr>
                    <th>課號</th>
                    <th>課名</th>
                    <th>學分數</th>
                </tr>
                <tr>
                    <td>{$course['課號']}</td>
                    <td>{$course['課名']}</td>
                    <td>{$course['學分數']}</td>
                </tr>
            </table>";
        } else {
            echo "查無資料";
        }
        $this->load->view('navigate_course');
    }
}


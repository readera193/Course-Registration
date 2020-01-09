<?php

/**
 * Class Elective
 *
 * @property Elective_model $elective_model
 */
class Elective extends MX_Controller
{
    /**
     * @var Student module
     */
    private $student;

    /**
     * @var Course module
     */
    private $course;

    /**
     * Elective constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Elective_model', 'elective_model');
        $this->student = Modules::load('student');
        $this->course = Modules::load('course');
    }

    /**
     * 選課作業系統頁面
     */
    public function index()
    {
        $data = array(
            'students' => $this->student->get_students()->result_array(),
            'courses' => $this->course->get_courses()->result_array(),
        );
        $this->load->view('elective', $data);
    }

    /**
     * 取得已選課程的課號
     */
    public function ajax_get_courses()
    {
        $optional_course_content = "";
        $selected_course_content = "";
        $selected_course_list = array();

        $student_id = $this->input->post('student_id');
        $course_list = $this->course->get_courses()->result_array();
        $elective_list = $this->elective_model->get_elective_by_id($student_id)->result_array();

        foreach ($elective_list as $elective) {
            array_push($selected_course_list, $elective['課號']);
        }

        foreach ($course_list as $course) {
            $content =
                "<tr class='course_tr'>
                    <td><input type='checkbox' value='{$course['課號']}'></td>
                    <td>{$course['課號']}</td>
                    <td>{$course['課名']}</td>
                    <td>{$course['學分數']}</td>
                </tr>";

            if (in_array($course['課號'], $selected_course_list)) {
                $selected_course_content .= $content;
            } else {
                $optional_course_content .= $content;
            }
        }

        echo json_encode(array(
            'optional' => $optional_course_content,
            'selected' => $selected_course_content
        ));
    }

    /**
     * 加選課程
     */
    public function enroll()
    {
        $student_id = $this->input->post('student_id');
        $course_id = $this->input->post('course_id');
        $result = $this->elective_model->enroll($student_id, $course_id);

        echo json_encode($result);
    }

    /**
     * 退選課程
     */
    public function drop()
    {
        $student_id = $this->input->post('student_id');
        $course_id = $this->input->post('course_id');
        $this->elective_model->drop($student_id, $course_id);
    }
}


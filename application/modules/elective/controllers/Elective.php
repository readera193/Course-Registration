<?php

/**
 * Class Elective
 *
 * @property Student module $student
 * @property Student_model $student_model
 */
class Elective extends MX_Controller
{
    /**
     * @var Student module
     */
    private $student;

    /**
     * Elective constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->student = Modules::load('student');
        $this->student->load->model('Student_model', 'student_model');
    }

    /**
     * 選課作業系統頁面
     */
    public function index()
    {
        $result = $this->student_model->get_data();
        $this->load->view('elective', array('students' => $result->result_array()));
    }
}


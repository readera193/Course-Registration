<?php

/**
 * Class Elective
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
    }

    /**
     * 選課作業系統頁面
     */
    public function index()
    {
        $data = array(
            'students' => $this->student->get_students()->result_array(),
        );
        $this->load->view('elective', $data);
    }
}


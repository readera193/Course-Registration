<?php

/**
 * Class Elective
 */
class Elective extends MX_Controller
{
    /**
     * Elective constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 選課作業系統頁面
     */
    public function index()
    {
        $this->load->view('elective');
    }
}


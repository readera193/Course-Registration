<?php

/**
 * Class Elective_model
 */
class Elective_model extends CI_Model
{
    /**
     * Elective_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $student_id 學號
     * @return CI_DB_result 此學生已選課程的課號
     */
    public function get_elective_by_id($student_id)
    {
        $this->db->select('課號');
        $this->db->from('選課資料表');
        $this->db->where('學號', $student_id);
        return $this->db->get();
    }
}


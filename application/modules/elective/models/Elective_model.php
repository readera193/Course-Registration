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
     * 取得此學生已選課程的課號
     *
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

    /**
     * 加選課程
     *
     * @param string $student_id 學號
     * @param string $course_id 課號
     * @return bool 是否選課成功
     */
    public function enroll($student_id, $course_id)
    {
        $elective_data = array(
            '課號' => $course_id,
            '學號' => $student_id,
        );

        $this->db->trans_start();
        $this->db->insert('選課資料表', $elective_data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    /**
     * 退選課程
     *
     * @param string $student_id 學號
     * @param string $course_id 課號
     */
    public function drop($student_id, $course_id)
    {
        $elective_data = array(
            '課號' => $course_id,
            '學號' => $student_id,
        );
        $this->db->where($elective_data);
        $this->db->delete('選課資料表');
    }
}


<?php

/**
 * Class Course_model
 *
 */
class Course_model extends CI_Model
{
    /**
     * Course_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 取得課程資料表
     *
     * @return CI_DB_result
     */
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('課程資料表');
        return $this->db->get();
    }

    /**
     * 取得特定課號的資料
     *
     * @param string $id 課號
     * @return CI_DB_result
     */
    public function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('課程資料表');
        $this->db->where('課號', $id);
        return $this->db->get();
    }

    /**
     * 新增課程資料
     *
     * @param array $course_data 要插入的資料
     */
    public function insert_data($course_data)
    {
        $this->db->insert('課程資料表', $course_data);
    }

    /**
     * 修改課程資料
     *
     * @param string $id 課號
     * @param string $name 課名
     * @param string $credit 學分數
     */
    public function update_data($id, $name, $credit)
    {
        $data = array(
            '課名' => $name,
            '學分數' => $credit
        );
        $this->db->where('課號', $id);
        $this->db->update('課程資料表', $data);
    }

    /**
     * 刪除課程資料
     *
     * @param string $id 課號
     */
    public function delete_data($id)
    {
        $this->db->where('課號', $id);
        $this->db->delete('課程資料表');
    }
}


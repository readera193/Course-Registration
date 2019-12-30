<?php

/**
 * Class Student_model
 *
 */
class Student_model extends CI_Model
{
    /**
     * Student_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 取得學生資料表
     *
     * @return CI_DB_result
     */
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('學生資料表');
        return $this->db->get();
    }

    /**
     * 取得特定學號的資料
     *
     * @param string $id 學號
     * @return CI_DB_result
     */
    public function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('學生資料表');
        $this->db->where('學號', $id);
        return $this->db->get();
    }

    /**
     * 新增學生資料
     *
     * @param array $student_data 要插入的資料
     * @return bool 是否新增成功
     */
    public function insert_data($student_data)
    {
        $this->db->trans_start();
        $this->db->insert('學生資料表', $student_data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    /**
     * 修改學生資料
     *
     * @param string $student_id 學號
     * @param string $name 姓名
     * @param string $department_id 系碼
     * @return bool 是否修改成功
     */
    public function update_data($student_id, $name, $department_id)
    {
        $data = array(
            '姓名' => $name,
            '系碼' => $department_id
        );
        $this->db->where('學號', $student_id);
        $this->db->trans_start();
        $this->db->update('學生資料表', $data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    /**
     * 刪除學生資料
     *
     * @param string $id 學號
     */
    public function delete_data($id)
    {
        $this->db->where('學號', $id);
        $this->db->delete('學生資料表');
    }
}


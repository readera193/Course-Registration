<?php

/**
 * Class Department_model
 *
 */
class Department_model extends CI_Model
{
    /**
     * Department_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 取得科系代碼表
     *
     * @return CI_DB_result
     */
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('科系代碼表');
        return $this->db->get();
    }

    /**
     * 新增科系資料
     *
     * @param array $department_data
     */
    public function insert_data($department_data)
    {
        $this->db->insert('科系代碼表', $department_data);
    }

    /**
     * 刪除科系資料
     *
     * @param string $id 科系代碼
     */
    public function delete_data($id)
    {
        $this->db->where('系碼', $id);
        $this->db->delete('科系代碼表');
    }
}
<?php

/**
 * Class Department_model
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
     * 取得特定系碼的資料
     *
     * @param string $id 科系代碼
     * @return CI_DB_result
     */
    public function get_data_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('科系代碼表');
        $this->db->where('系碼', $id);
        return $this->db->get();
    }

    /**
     * 新增科系資料
     *
     * @param array $department_data 要插入的資料
     * @return bool 是否新增成功
     */
    public function insert_data($department_data)
    {
        $this->db->trans_start();
        $this->db->insert('科系代碼表', $department_data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    /**
     * 修改科系資料
     *
     * @param string $id 科系代碼
     * @param string $name 系名
     * @param string $dean 系主任
     * @return bool 是否修改成功
     */
    public function update_data($id, $name, $dean)
    {
        $data = array(
            '系名' => $name,
            '系主任' => $dean
        );
        $this->db->where('系碼', $id);
        $this->db->trans_start();
        $this->db->update('科系代碼表', $data);
        $this->db->trans_complete();
        return $this->db->trans_status();
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


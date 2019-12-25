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
    public function get_department_data()
    {
        $this->db->select('*');
        $this->db->from('科系代碼表');
        return $this->db->get();
    }
}
<?php

/**
 * Class Search_model
 */
class Search_model extends CI_Model
{
    /**
     * Search_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 執行 query
     *
     * @param string $query
     * @return CI_DB_result|null 查詢結果 or null 查詢失敗
     */
    public function run_query($query)
    {
        $this->db->trans_start();
        $result = $this->db->query($query);
        $this->db->trans_complete();
        if ($this->db->trans_status() === true) {
            return $result;
        } else {
            return null;
        }
    }
}


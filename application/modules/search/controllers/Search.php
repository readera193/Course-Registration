<?php

/**
 * Class Search
 *
 * @property Search_model $search_model
 */
class Search extends MX_Controller
{
    /**
     * Search constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Search_model', 'search_model');
    }

    /**
     * 各項查詢作業系統頁面
     */
    public function index()
    {
        $this->load->view('search');
    }

    /**
     * 執行 query
     */
    public function run_query()
    {
        $query = $this->input->post('query_text');
        $DB_result = $this->search_model->run_query($query);

        if ($DB_result && $DB_result->num_rows() > 0) {
            $this->load->view('search_result', array(
                'result' => $DB_result->result_array(),
                'fields' => array_keys($DB_result->row_array()),
            ));
        } else {
            $url = base_url('search');
            echo "查詢失敗<br><br>";
            echo "<button onclick=\"window.location.assign('{$url}')\">回到各項查詢作業系統頁面</button>";
        }
    }
}


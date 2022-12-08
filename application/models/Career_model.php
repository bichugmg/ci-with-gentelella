<?php

class career_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("career_model");
    }

    function dataInsert($data)
    {

        $this->db->where("position", $data['position']);
        $this->db->where("your-email", $data['your-email']);
        $query = $this->db->get("careers_tb");
        $num = $query->num_rows();
        if ($num <= 0) {
            $this->db->insert("careers_tb", $data);
            return 1;
        } else {
            return 0;
        }
    }
}

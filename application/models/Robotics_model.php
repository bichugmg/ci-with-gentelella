<?php
class robotics_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        //load our second db and put in $db
        //  $this->load->database();
    }
    public function getreq()
    {

        $query = $this->db->get('robotics_questions');
        return $query->result();
    }
    public function results($res)
    {
        $this->db->select('answer');
        $this->db->from('robotics_questions');
        $results = $this->db->get()->result();
        return $results;
    }
    public function reg($data)
    {
        // print_r($data);
        //$this->db->set($data);
        $this->db->insert('robotics_student', $data);
        $last_id = $this->db->insert_id();
        return $last_id;
    }
    public function add_score($id, $resp)
    {
        //print_r($resp);
        $this->db->where('id', $id);
        $this->db->update('robotics_student', $resp);
    }
}

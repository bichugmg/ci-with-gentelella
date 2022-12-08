<?php

class App_model extends CI_Model
{
    public function login($username,$password)
      {
      	$this->db->where("username", $username);
      	$this->db->where("password", $password);
      	$query = $this->db->get("user");
        $num = $query->num_rows();
        $data["data"]=$query->row();
        $data["count"]=$num;
        return $data;
      }



      public function insertStudent($data)
      {
       $this->db->insert('student',$data);
      $this->db->trans_complete();
      return $this->db->insert_id();
      }

      public function listStudents()
      {
        $col=['std_id','name','category','whatsapp'];
        $this->db->select($col);  
        $this->db->from('student');
        $this->db->order_by('name', 'ASC');
        $result=$this->db->get()->result_array();
      return $result;
      }

      public function listEnrl()
      { 
        $col=['std_id','name'];
        $this->db->select($col);  
        $this->db->from('student');
        $this->db->order_by('name', 'ASC');
        $result=$this->db->get()->result_array();
        return $result;
      }

      public function enroll($std_id,$c_id)
      {
        $data=['std_id'=>$std_id,'c_id'=>$c_id];
        $this->db->insert('enrollment',$data);
        $this->db->trans_complete();
      return $this->db->insert_id();
      }

      public function enrolledCourses($id)
      {
        $this->db->from('enrollment');
        $this->db->join('courses','courses.c_id = enrollment.c_id');
        $this->db->where('enrollment.std_id',$id);
        $this->db->select('courses.course');
        $result=$this->db->get()->result_array();
        return $result;
      }

      public function studentInfo($std_id) 
      {
        $this->db->where('std_id',$std_id);
        $result=$this->db->get('student')->result_array();;
        return $result;
      }
}
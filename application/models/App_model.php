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

      public function getProfile($user_id)
      { 
        $this->db->where("user_id",$user_id);
        $res=$this->db->get("profile")->result_array();
        return $res;
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


      public function disenroll($data)
      {
        $this->db->from('courses');
        $this->db->where('course',$data['course']);
        $res=$this->db->get()->result_array();
        $data['c_id']=$res[0]['c_id'];
        unset($data['course']);
        $this->db->set('status','0');
        $this->db->where($data);
        $this->db->update('enrollment');
        return true;
      }

      public function enrolledCourses($id)
      { 
        $qry=['enrollment.std_id'=>$id,'status'=>1];
        $this->db->from('enrollment');
        $this->db->join('courses','courses.c_id = enrollment.c_id');
        $this->db->where($qry);
        $this->db->select('courses.course');
        $result=$this->db->get()->result_array();
        return $result;
      }

      public function studentInfo($std_id) 
      {
        $this->db->where('std_id',$std_id);
        $result=$this->db->get('student')->result_array();
        return $result;
      }

      public function getStudents($c_id)    
      {
        $this->db->from('enrollment');
        $this->db->join('student','student.std_id=enrollment.std_id');
        if($c_id==4)
        {
        $this->db->where_in('enrollment.c_id',['4','5','6']);
        }
        else{
        $this->db->where('enrollment.c_id',$c_id);}
        $this->db->select('student.std_id,student.name',);
        $this->db->order_by("student.name", "asc");
        $res=$this->db->get()->result_array();
        return $res;
      
      }

      public function mark_attendance($indata)
      {
        $this->db->insert('attendance',$indata);
        $this->db->trans_complete();
        return true;
      }

      public function get_at($std_id)
      {
        $this->db->from('attendance');
        $this->db->join('student','student.std_id=attendance.std_id');
        $this->db->where('attendance.std_id',$std_id);
        $this->db->select('attendance.day,attendance.date,attendance.month,attendance.year');
        $res['res']=$this->db->get()->result_array();
        $this->db->where('std_id',$std_id);
        $res['name']=$this->db->get('student')->result_array();
        return $res;
      }
      public function get_at_search($postdata)
      {
        $qry=['attendance.std_id'=>$postdata['std_id'],'attendance.month'=>$postdata['month'],'attendance.year'=>$postdata['year']];
        $this->db->from('attendance');
        $this->db->join('student','student.std_id=attendance.std_id');
        // $this->db->where('attendance.std_id',$postdata['std_id'])
        $this->db->where($qry);
        $this->db->select('attendance.day,attendance.date,attendance.month,attendance.year');
        $res['res']=$this->db->get()->result_array();
        $this->db->where('std_id',$postdata['std_id']);
        $res['name']=$this->db->get('student')->result_array();
        
        // print_r( $res['res']);
        return $res;
        // print_r($postdata);
      }

      public function upload_doc($data,$doc_id)
      {
        $this->db->set($data);
        $this->db->where('doc_id',$doc_id);
        $this->db->update('documents');
      }

      public function getDocs()
      {
        $res=$this->db->get('documents')->result_array();
        return $res;
      }


      public function updateDocStatus($doc) 
      {
        $this->db->set('status',$doc['status']);
        $this->db->where('doc_id',$doc['doc_id']);
        $this->db->update('documents');
      }

}
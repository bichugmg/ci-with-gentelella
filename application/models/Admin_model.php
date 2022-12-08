<?php

class Admin_model extends CI_Model
{
    
    public function login($user_name,$user_pwd)
      {
      	$this->db->where("user_name", $user_name);
      	$this->db->where("user_pwd", md5($user_pwd));
      	$query = $this->db->get("login");
        $num = $query->num_rows();
        $data["data"]=$query->row();
        $data["count"]=$num;
        return $data;
      }
      
	public function fetch_trainers(){
		$query = $this->db->get('trainers');
		return $query->result_array();
	}

      public function fetch_banners()
      {
        $this->load->database();
        $query = $this->db->get("banner");
        return $query;
      }

		public function insert_banner($data)
      {
        $this->load->database();
        $this->db->insert("banner", $data);
      }

      public function delete_banner($id)
      {
        $this->load->database();
        $tables = array('banner');
        $this->db->where("id", $id);
        $this->db->delete($tables);

      }

      public function fetch_notifications()
      {
        $this->load->database();
        $query = $this->db->get("notification");
        return $query;
      }

      public function insert_notification($data)
      {
        $this->load->database();
        $this->db->insert("notification", $data);
      }

      public function delete_notification($id)
      {
        $this->load->database();
        $tables = array('notification');
        $this->db->where("id", $id);
        $this->db->delete($tables);

      }

      public function fetch_course_category()
      {
        $this->load->database();
        $query = $this->db->get("course_category");
        return $query;
      }

      public function insert_course_category($data)
      {
        $this->load->database();
        $this->db->insert("course_category", $data);
      }

      public function fetch_course_categories()
      {

        $this->db->order_by("category", "asc");
        $query = $this->db->get('course_category');
        return $query->result_array();
      }

      public function delete_course_category($id)
      {
        $this->load->database();
        $tables = array('course_category');
        $this->db->where("id", $id);
        $this->db->delete($tables);

      }

      public function fetch_courses()
      {
        $this->load->database();
        $query = $this->db->get("courses");
        return $query;
      }

      public function insert_course($data)
      {
        $this->load->database();
        $this->db->insert("courses", $data);
      }

      public function delete_course($id)
      {
        $this->load->database();
        $tables = array('courses');
        $this->db->where("id", $id);
        $this->db->delete($tables);

      }

      public function fetch_trainers_()
      {
        $this->load->database();
        $query = $this->db->get("trainers");
        return $query;
      }

	public function insert_trainer($data)
      {
        $this->load->database();
        $this->db->insert("trainers", $data);
      }

      public function delete_trainer($id)
      {
        $this->load->database();
        $tables = array('trainers');
        $this->db->where("id", $id);
        $this->db->delete($tables);

      }

      public function fetch_testimonials()
      {
        $this->load->database();
        $query = $this->db->get("testimonials");
        return $query;
      }
      
      public function insert_testimonial($data)
      {
        $this->load->database();
        $this->db->insert("testimonials", $data);
      }

      public function delete_testimonial($id)
      {
        $this->load->database();
        $tables = array('testimonials');
        $this->db->where("id", $id);
        $this->db->delete($tables);

      }
      public function insert_downloads_category($data)
      {
        $this->load->database();
        $this->db->insert("download_category", $data);
      }

      public function fetch_downlads_categories()
      {

        $this->db->order_by("category", "asc");
        $query = $this->db->get('download_category');
        return $query->result_array();
      }

      public function fetch_downloads_category()
      {
        $this->load->database();
        $query = $this->db->get("download_category");
        return $query;
      }

      public function delete_downloads_category($id)
      {
        $this->load->database();
        $tables = array('download_category');
        $this->db->where("id", $id);
        $this->db->delete($tables);

      }

      public function fetch_sm_qp()
      {
        $this->load->database();
        $query = $this->db->get("downloads");
        return $query;
      }

      public function insert_sm_qp($data)
      {
        $this->load->database();
        $this->db->insert("downloads", $data);
      }

      public function delete_sm_qp($id)
      {
        $this->load->database();
        $tables = array('downloads');
        $this->db->where("id", $id);
        $this->db->delete($tables);

      }

      public function insert_blog_category($data)
      {
        $this->load->database();
        $this->db->insert("post_categories", $data);
      }

      public function fetch_post_categories()
      {

        $this->db->order_by("category", "asc");
        $query = $this->db->get('post_categories');
        return $query->result_array();
      }

      public function fetch_blog_category()
      {
        $this->load->database();
        $query = $this->db->get("post_categories");
        return $query;
      }

      public function delete_blog_category($id)
      {
        $this->load->database();
        $tables = array('post_categories');
        $this->db->where("id", $id);
        $this->db->delete($tables);

      }

      public function fetch_blogs()
      {
        $this->load->database();
        $query = $this->db->get("blog");
        return $query;
      }

      public function insert_blog($data)
      {
        $this->load->database();
        $this->db->insert("blog", $data);
      }

      public function delete_blog($id)
      {
        $this->load->database();
        $tables = array('blog');
        $this->db->where("id", $id);
        $this->db->delete($tables);

      }

}
 
?>
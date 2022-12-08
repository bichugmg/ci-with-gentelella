<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
	function __construct()
	{
		parent::__construct();
			
		$this->load->model("main_model");
	}

	public function index()
	{
	    $nav['page_title']="Online Courses - 1 to 1 Offline and Online Classes | INTERVAL";
		$nav['keywords_content']="online classes,online courses, offline classes,interval courses,individual courses, 1 to 1 online classes, 1 to 1 offline classes ";
		$nav['description_content']="Interval's academic and other skill development courses for students from KG to 12. One to one offline and online classes with the best trainers at scheduled times";
		
		$nav['active'] = 'course';

		$data['p_courses'] = $this->main_model->fetch_p_courses();
		$data['courses_category'] = $this->main_model->get_course_category();
		$data['total_rows'] = $this->db->get('courses')->num_rows();

		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/courses', $data);
		$this->load->view('user/templates/footer');
	}

	function courses_all($rowno = 0)
	{
		$this->load->library('pagination');

	    $rowperpage = 8;


	    if($rowno != 0){
	      $rowno = ($rowno-1) * $rowperpage;
	    }
	 
	    $allcount = $this->db->get('courses')->num_rows();


	 	$course_record = $this->main_model->get_all_courses($rowperpage,$rowno);

	 	$config['num_links'] = 10;
	    $config['base_url'] = base_url().'course/courses_all/';
	    $config['use_page_numbers'] = TRUE;
	    $config['total_rows'] = $allcount;
	    $config['per_page'] = $rowperpage;


	    $this->pagination->initialize($config);

	    $data['pagination'] = $this->pagination->create_links();
	    $data['result'] = $course_record;
	    $data['row'] = $rowno;

	    echo json_encode($data);
	}


	function courses_cat($cat,$rowno = 0)
	{
		$cat = rawurldecode($cat);
		$this->load->library('pagination');

	    $rowperpage = 8;


	    if($rowno != 0){
	      $rowno = ($rowno-1) * $rowperpage;
	    }
	 	 $this->db->where('category',$cat);
	    $allcount = $this->db->get('courses')->num_rows();


	 	$course_record = $this->main_model->get_cat_courses($rowperpage,$rowno,$cat);

	 	$config['num_links'] = 10;
	    $config['base_url'] = base_url().'course/courses_cat/'.$cat.'/';
	    $config['use_page_numbers'] = TRUE;
	    $config['total_rows'] = $allcount;
	    $config['per_page'] = $rowperpage;


	    $this->pagination->initialize($config);

	    $data['pagination'] = $this->pagination->create_links();
	    $data['result'] = $course_record;
	    $data['row'] = $rowno;

	    echo json_encode($data);
	}


	function course_single($id)
	{
		$this->db->where('url_name', $id);
		$data['course'] = $this->db->get('courses')->row_array();
		$nav['active'] = 'course';
	
		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/single_course', $data);
		$this->load->view('user/templates/footer');
	}
	

}
	
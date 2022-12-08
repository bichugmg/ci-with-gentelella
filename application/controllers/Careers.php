<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {
	function __construct()
	{
		parent::__construct();
			
		$this->load->model("main_model");
		$this->load->model("career_model");
		$this->db2 = $this->load->database('automation', TRUE);
	}
	
	
	
	public function apply()
	{
	    redirect("https://forms.gle/qiSoXvB6rjFnmYaD9");
	}
	
	public function index()
	{
	    	   $nav['page_title']="Join our Team - Careers Interval ";
		$nav['keywords_content']="Careers in interval,job openings in interval, join us in interval";
		$nav['description_content']="Interval invites you to join our World of collaborative work environment Where everyone works hard to create and maintain a cohesive team-oriented workplace.";
		
		$nav['active'] = 'careers';
		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/careers/index');
		$this->load->view('user/templates/footer');
	}
	
	
	
	public function hr_view()
	
	{  
	    $data['res']=$this->main_model->view_apps();
	    $this->load->view('user/pages/hv',$data);    
	    
	}
	
	
	
	
	
	public function abc()
	{
		$this->load->view('user/pages/careers/abc');
	}
	public function marketing()
	{
		$this->load->view('user/pages/careers/marketing');
	}
	public function app_dev()
	{
		$this->load->view('user/pages/careers/app_dev');
	}
	public function web_dev()
	{
		$this->load->view('user/pages/careers/web_dev');
	}
	public function ccw()
	{
		$this->load->view('user/pages/careers/ccw');
	}
	public function cro()
	{
		$this->load->view('user/pages/careers/cro');
	}
	public function sro()
	{
		$this->load->view('user/pages/careers/sro');
	}
	public function research()
	{
		$this->load->view('user/pages/careers/research');
	}
	public function app()
	{
		$this->load->view('user/pages/careers/apply');
	}
	public function do_upload()
	{
		$date = date('dmY_His');
			$position = $this->input->post('position');
		$data = array(
			'position' => $position,
			'full-name' => $this->input->post('full-name'),
			'your-email' => $this->input->post('your-email'),
			'qualification' => $this->input->post('qualification'),
			'mobile' => $this->input->post('mobile'),
			'district'=>$this->input->post('district'),
			'resume' => $this->input->post('full-name') . $date
		);

		$this->load->library('upload');
		$photo['upload_path'] = './assets/users/careers/resume/';
		$photo['allowed_types'] = 'pdf';
		$photo['file_name'] = $this->input->post('full-name') . $date;
		$photo['overwrite'] = TRUE;



		$this->upload->initialize($photo);

		if (!$this->upload->do_upload('resume')) {
			$error = array('error' => $this->upload->display_errors());

			if (isset($error)) {

				//	$corr = $error['error'];
				$corr = "Error in Resume Upload " . $error['error'];
				echo "<script>alert('{$corr}');window.location.href = '" . base_url() . "careers/app/$position" . "';</script>";
			}
		} else {
			$res = $this->career_model->dataInsert($data);
			if ($res == 1) {
				echo "<script>alert('Application Submitted Successfully.');window.location.href = '" . base_url() . "';</script>";
			} else {
				echo "<script>alert('Sorry you are already applied.');window.location.href = '" . base_url() . "careers/app/$position" . "';</script>";
			}
		}
	}
	
}

	?>
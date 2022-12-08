<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
		{
			parent::__construct();
			
			$this->load->model("main_model");
			//load our second db and put in $db2
            $this->db2 = $this->load->database('automation', TRUE);
		}

	public function index()
	{
		$nav['page_title']="Home and Online Individual Tuition Classes | Team INTERVAL";
		$nav['keywords_content']="online tuition,home tuition,home tuition near me,home tutor near me,home tutor site,home tutor,maths tuition near me,personalised home tuition,individual tuition,team interval,interval tuition centre
,best tuition centre, one teacher for one student,home tuition near me,best online tuition,tuition classes,online tuition classes";
		$nav['description_content']="Interval, the world's fastest growing individual tuition concept provides home and online tuition classes. We follow ONE TEACHER FOR ONE STUDENT learning method";
		
		
		$nav['og_url_content']="https://teaminterval.in/";
		$nav['og_type_content']="website";
		$nav['og_title_content']="Best Home and Online Individual Tuition Classes | Team INTERVAL";
		$nav['og_description_content']="Interval,the world's fastest growing individual tuition concept provides home and online tuition classes. We follow ONE TEACHER FOR ONE STUDENT learning method";
		$nav['og_image_content']="https://teaminterval.in/assets/users/img/demo.jpg";

		$nav['active'] = 'home';
        $data['district'] = $this->db2->get('district')->result_array();
		$data['trainers'] = $this->main_model->fetch_trainers();
		$data['banner'] = $this->main_model->fetch_banner();
		$data['testimonials'] = $this->main_model->fetch_testi();
		$data['p_courses'] = $this->main_model->fetch_p_courses();
		
		$this->db->order_by("id", "desc");
		$this->db->limit(2);
		$data['events'] = $this->db->get('events')->result_array();

		$this->db->where('id', '1');
		$data['counter'] =  $this->db->get('counter')->row_array();
        $this->db->order_by("id", "desc");
		$this->db->where('visibility', '1');
		$data['notification'] = $this->db->get('notification')->result_array();

		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/index',$data);
		$this->load->view('user/templates/footer');
	}

	public function downloads(){
	    $nav['page_title']="Free Study Materials - Previous Question year Papers | INTERVAL";
		$nav['keywords_content']="Free Study Materials,Previous Question year Papers,Interval downloads,previous year question papers for sslc,previous year plus two,study materials for k to 12 students";
		$nav['description_content']="Download free study materials and previous year's question papers for KG-12 students from Interval.it Helps students to practice well and manage their time for exams";
		
		$nav['og_url_content']="https://teaminterval.in/downloads";
		$nav['og_type_content']="website";
		$nav['og_title_content']="Free Study Materials - Previous Question year Papers | INTERVAL";
		$nav['og_description_content']="Download free study materials and previous year's question papers for KG-12 students from Interval.it Helps students to practice well and manage their time for exams";
		$nav['og_image_content']="https://teaminterval.in/assets/users/img/book.png";
		
		$nav['active'] = 'downloads';


		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/downloads');
		$this->load->view('user/templates/footer');
	}

	public function downloads_cat($cat){
		$cat = rawurldecode($cat);
		echo json_encode($this->main_model->get_downloads_category($cat));
	}

	public function downloads_view($type,$cat){
		$cat = rawurldecode($cat);
		$type = rawurldecode($type);
		echo json_encode($this->main_model->get_downloads_view($type,$cat));
	}

    public function fetch_region(){
        // echo json_encode("aa");SELECT * FROM `region` WHERE district_id = 10
        $this->db2 = $this->load->database('automation', TRUE);
        $this->db2->where("district_id", $this->input->post('district'));
        $region = $this->db2->get('region')->result_array();
        echo "<option>Select Region</option>";
        foreach($region as $r){
            echo '<option value = "'.$r['region_id'].'">'.$r['region_name'].'</option>';
        }
        
    }
    
    public function fetch_branch_info(){
//         $array = array('type' => $type, 'category' => $cat);
// 		$this->db->where($array);
// 		$query = $this->db->get('downloads');

        $this->db2 = $this->load->database('automation', TRUE);
        $this->db2->order_by("group", "asc");
        $this->db2->where("region_id", $this->input->post('region'));
        $query = $this->db2->get('studentgroup');

		$output='<div class="container">
        
        <div class="row d-flex justify-content-center">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Branch Name</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>';
          
        //   $output .='<td>1</td><td>test</td><td>123456</td><td>test@gmail.com</td>'; //temp
		$temp = 1;
		foreach ($query->result() as $row) {
				$output .= '<tr>
              <th scope="row">'.$temp.'</th>
              <td>'.$row->group.'</td>
              <td><a href="tel:+917025841234" style="color:black;">'.'7025841234'.'</a></td>
              <td><a href="mailto:hello.teaminterval@gmail.com" style="color:black;">'.'hello.teaminterval@gmail.com'.'</a></td>
            </tr>';
            $temp = $temp + 1;
		}
			$output .= '</tbody>
        </table>

        </div>
        </div>
      </div>';
      echo $output;

// 		return $output;
    }
	public function contact(){
	    $nav['page_title']="Contact Us - Team INTERVAL ";
		$nav['keywords_content']="contact us,contact interval,contact team interval,contact details team interval";
		$nav['description_content']="Contact us to know more about any admission enquiry or business enquiry.  Or else you can get in touch with our contact centres given in the list below.";
		
		$nav['og_url_content']="https://teaminterval.in/contact";
		$nav['og_type_content']="website";
		$nav['og_title_content']="Contact Us - Team INTERVAL";
		$nav['og_description_content']="Contact us to know more about any admission enquiry or business enquiry.  Or else you can get in touch with our contact centres given in the list below.";
		$nav['og_image_content']="https://teaminterval.in/assets/users/img/contact-us.png";
		
	    $this->db2 = $this->load->database('automation', TRUE);
		$nav['active'] = 'contact';
		$data['district'] = $this->db2->get('district')->result_array();


		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/contact',$data);
		$this->load->view('user/templates/footer');
	}

	public function about(){
	    	$nav['page_title']="Online Tutoring in Kerala - Home tutor in Kerala | INTERVAL ";
		$nav['keywords_content']="online tutor,home tutor,individual tutor,personalised tutor,personalized tutor,online tutoring in kerala,home tutor in kerala,one to one online tutor";
		$nav['description_content']="Get the best individual tutors from Interval. Book now, for a personalized home tutor or one-to-one live online tutoring for K-12 in Kerala and Gulf countries.";
		
		$nav['active'] = 'about';
		$data['faqs'] = $this->db->get('faq')->result_array();

		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/about',$data);
		$this->load->view('user/templates/footer');
	}

	public function events(){
		$nav['active'] = '';
		
		$this->db->order_by("id", "desc");
		$data['events'] = $this->db->get('events')->result_array();
		
		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/events',$data);
		$this->load->view('user/templates/footer');
	}


	function add_message(){
		// echo $this->main_model->adduniversity($this->input->post('university'));
			// echo $this->input->post('university');

		$data = array('name'=>$this->input->post('name'),'email'=>$this->input->post('email'),'subject'=>$this->input->post('subject'),'message'=>$this->input->post('message'));
	 	if($this->db->insert('messages',$data)){
	 		echo "Message sent";
	 	}
	 	else{
	 		echo "error";
	 	}
	}


	function book_demo(){
		date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
		$data = array('lead_name'=>$this->input->post('name'),
		              'lead_email_id'=>$this->input->post('email'),
		              'lead_mob_no'=>$this->input->post('phone'),
		              'lead_localbody_id'=>$this->input->post('branch_id'),
		              'lead_timestamp'=>$now,
		              'lead_final_status'=>0,
		              'lead_source'=>"Website",
		              'lead_remarks'=>"Schedule Assessment for Std. - ".$this->input->post('class'),
		              'lead_relation'=>"Student/Parent");
	 	if($this->db2->insert('leads',$data)){
	 		echo "Demo Class booked. Our representative will contact you shortly..";
	 		
	 	}
	 	else{
	 		echo "error";
	 	}
	}
	
	public function signup(){
		$data['districts'] = $this->main_model->fetch_districts();
		$data['regions'] = $this->main_model->fetch_regions();
		$data['branches'] = $this->main_model->fetch_branches();
		$data['subjects'] = $this->main_model->fetch_subjects();
		$this->load->view('user/pages/signup', $data);
	}
	
	public function get_regions(){

      $res=$this->main_model->get_region_data($_GET["id"])->result();
      
        echo "<option>-- Select Region --</option>";
      foreach ($res as $key => $value) {
        echo "<option value='".$value->region_id."'>".$value->region_name."</option>"; 
      }   
   }
   
   public function get_branches(){

      $res=$this->main_model->get_branch_data($_GET["id"],$_GET["id_2"])->result();
      
        // echo "<option>-- Select Branch --</option>";
    echo "<table class='table table-bordered'>

                                <thead>
                                  <tr>
                                    <th style='text-align:center;'>Branch</th>
                                  </tr>
                                </thead>
                                <tbody>";
      foreach ($res as $key => $value) {
        // echo "<option value='".$value->studentgroupID."'>".$value->group."</option>"; 
        echo "<tr><td>";
        echo "<input type='checkbox' name='branch' id='branch'> $value->group";
        echo"</td></tr>";
      }   
   }
	

	
	public function employee(){
		redirect("https://docs.google.com/forms/d/e/1FAIpQLScwovtWKCLF4Z4EFWth585bgd8AFUj7S6jBrEDNZJjyuNu1EQ/viewform");
	}
	
	public function franchise(){
		redirect("https://docs.google.com/forms/d/e/1FAIpQLSeKWb2xSL3r8q2mZP-LXFujSZPGEYOyJ3Xfi2sPZUwuqP796A/viewform");
	}
	
	public function suggest(){
		redirect("https://docs.google.com/forms/d/e/1FAIpQLSdIrRvinUJTZ_HsLQE0bH5lI5AGcFq9Lham-UjreagPkxoq-w/viewform");
	}
	
	public function keam_neet_trainers(){
		redirect("https://docs.google.com/forms/d/e/1FAIpQLSdyLdrafeIiX5An5jadNoeDi8atDo9I5bIt3iCDZ3h5G4Xjbg/viewform");
	}
	
	public function jee_trainers(){
		redirect("https://docs.google.com/forms/d/e/1FAIpQLSc9zsh0DBOQiTgnZNGANbdRhBvhoIaDS3oXWnlc5Oj3im0s-g/viewform");
	}
	
	public function internship(){
		redirect("https://docs.google.com/forms/d/e/1FAIpQLSdjT3OPkeChqQlEEw9-pbBCmqBR32eS4NzMfYwY7UQ5a897NQ/viewform");
	}
	
	public function hrinterns(){
		redirect("https://docs.google.com/forms/d/e/1FAIpQLSdtBKvItGnqhvmmds6WRD4la-U-_5wuJWAIsGp3OtK-EZXhSw/viewform");
	}
	
	public function domupdation(){
		redirect("https://docs.google.com/forms/d/e/1FAIpQLSeHLjqHSlppMZk6rkDZAj-HBj_xj_Q7jMv2ZcM-sCJ9VetypQ/viewform");
	}
	
	
	public function trainers($id){
	    
	    $this->db->where('id', $id);
	    $data['trainer']=$this->db->get('trainers')->row_array();
		$nav['active'] = 'home';


		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/single_trainer',$data);
		$this->load->view('user/templates/footer');
	}
	
	public function fetch_branches(){
        
        $this->db2->join('region', 'region.region_id = studentgroup.region_id');
        $this->db2->join('district', 'district.district_id = region.district_id');
        $this->db2->order_by("group", "asc");
        $this->db2->where("district.district_id", $this->input->post('district'));
        $query=$this->db2->get('studentgroup');
        $branch = $query->result_array();
        echo "<option value=''>Select Branch</option>";
        foreach($branch as $r){
            echo '<option value = "'.$r['studentgroupID'].'">'.$r['group'].'</option>';
        }
	}
	
	public function cron_job()
    {
        $this->db2->insert('test',array('temp'=>"bb"));
        echo "aa";
    }
    
    public function under_construction(){
		$this->load->view('user/pages/under_construction');
	}
	
	public function privacy_policy(){
		$nav['active'] = 'downloads';


		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/privacy_policy');
		$this->load->view('user/templates/footer');
	}
	
	public function joinus()
	{   
		$this->load->view('user/pages/tutor');
	}
	
	public function submit_tip()
	{   
		$this->load->view('user/pages/submit_tip');
	}
	
	public function insert_tip_data()
	{
			date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
			$data = array(

					"full_name" => $this->input->post("full_name"),
					"mob_no" => $this->input->post("mob_no"),
					"tip" => $this->input->post("tip")
				);

				$this->main_model->insert_tip($data);

				echo "<script>alert('Your Tip Submitted Successfully.');window.location.href = '".base_url()."home/joinus"."';</script>";
	}
	
	public function online_tuition()
	{   
		$nav['active'] = 'downloads';


		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/onlinetuition/index');
		$this->load->view('user/templates/footer');
	}
	
	public function media()
	{   
		$nav['active'] = 'media';


		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/media');
		$this->load->view('user/templates/footer');
	}

}

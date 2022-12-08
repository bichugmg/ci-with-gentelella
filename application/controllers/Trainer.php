<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainer extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            
            $this->load->model("trainer_model");
			//load our second db and put in $db2
            $this->db2 = $this->load->database('automation', TRUE);
        }
	public function index()
	{
		header("location:".base_url()."trainer/login");
	}
	
	public function login()
	{   
	   // redirect("https://maintenance.teaminterval.in/index.php");
	    $this->session->sess_destroy();
		$this->load->view('trainer/pages/login');
	}
	
	public function change_password()
	{  
        $data['profile']=$this->trainer_model->fetch_profile($this->session->userdata('trainer_id'));   
    	$this->load->view('trainer/templates/header', $data);
		$this->load->view('trainer/pages/change_password');
        $this->load->view('trainer/templates/footer', $data);
	}
	
// 	public function signin()
// 	{   
// 	    $this->session->sess_destroy();
// 		$this->load->view('trainer/pages/login');
// 	}

    public function user_check()
    {   
        if($this->input->post('email_id')!="")
        {
                $email_id=$this->input->post('email_id');
                $mob_no=$this->input->post('mob_no');
                $data=$this->trainer_model->login($email_id,$mob_no);
                if($data["count"]>0)
                        {
                            if($data['data']->active==1)
                            {   if($data['data']->completion==1)
                                {
                                    $full_name=$data['data']->full_name;
                                    $the_session = array(
                                        "user_type" => "trainer",
                                        "trainer_id" => $data['data']->trainer_id,
                                        "email_id" => $email_id,
                                        "mob_no" => $mob_no,
                                        "full_name" => $full_name,
                                        "completion" => 1
                                        );
                                    $this -> session -> set_userdata($the_session);
                                    echo "<script>alert('You are already Registered. You can Update Your Profile Now.');window.location.href = '".base_url()."trainer/update_profile"."';</script>";
                                }
                                else
                                {
                                   $full_name=$data['data']->full_name;
                                    $the_session = array(
                                        "user_type" => "trainer",
                                        "trainer_id" => $data['data']->trainer_id,
                                        "email_id" => $email_id,
                                        "mob_no" => $mob_no,
                                        "full_name" => $full_name,
                                        "completion" => 0
                                        );
                                    $this -> session -> set_userdata($the_session);
                                    echo "<script>alert('Please Complete Your Registration Process.');window.location.href = '".base_url()."trainer/update_profile"."';</script>"; 
                                }
                            }
                            else
                            {
                                echo "<script>alert('User Blocked.');window.location.href = '".base_url()."home/index"."';</script>";
                            }
                        }
                else
                        {           
                            date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
                	         		$now = date('Y-m-d H:i:s');
                                    $data = array(
                                         'email_id' => $this->input->post('email_id'),
                                         'pwd' => md5($this->input->post('mob_no')),
                                         'mob_no' => $this->input->post('mob_no'),
                                         'signup_time' => $now);
                                    $last_id=$this->trainer_model->insert_profile($data);
                                    $the_session = array(
                                        "user_type" => "trainer",
                                        "trainer_id" => $last_id,
                                        "email_id" => $email_id,
                                        "mob_no" => $mob_no,
                                        "full_name" => "Trainer",
                                        "completion" => 0
                                        );
                                    $this -> session -> set_userdata($the_session);
                                    echo "<script>alert('Sign Up Successful. Complete Your Registration Process.');window.location.href = '".base_url()."trainer/update_profile"."';</script>";
                        }
                
                }
        
        else
        {
           header("location:".base_url()."trainer/index"); 
        }
        
            
    } 

        
        
    public function update_profile()
    {   
	   // redirect("https://maintenance.teaminterval.in/index.php");
        if($this ->session-> userdata('user_type')!="")
        {
        
        $data['course_types'] = $this->trainer_model->fetch_course_types();
        $data['countries'] = $this->trainer_model->fetch_countries();
        $data['districts'] = $this->trainer_model->fetch_districts();
		$data['regions'] = $this->trainer_model->fetch_regions();
		$data['branches'] = $this->trainer_model->fetch_branches();
		$data['subjects'] = $this->trainer_model->fetch_subjects();
        $trainer_id=$this ->session-> userdata('trainer_id');    
        $data['profile']=$this->trainer_model->fetch_profile($trainer_id);    
        $data['course']=$this->trainer_model->fetch_course($data['profile']['data']->course_stream); 
        $data['region_1']=$this->trainer_model->fetch_region($data['profile']['data']->prefered_region_1);    
        $data['region_2']=$this->trainer_model->fetch_region($data['profile']['data']->prefered_region_2);     
        $data['prefered_branch']=$this->trainer_model->fetch_prefered_branches($trainer_id);    
        $data['prefered_subjects']=$this->trainer_model->fetch_prefered_subjects($trainer_id);
        $this->load->view('trainer/templates/header', $data);
        $this->load->view('trainer/pages/update_profile', $data);
        $this->load->view('trainer/templates/footer', $data);
        }
        else
        {
		    header("location:".base_url()."trainer/index");
        }
    }  
        
        public function get_courses(){

      $res=$this->trainer_model->get_course_data($_GET["id"])->result();
      
      
        $data = "<option value='' selected='selected'>-- Select Course --</option>";
      foreach ($res as $key => $value) {
        $data .= "<option value='".$value->course_id."'>".$value->course_name."</option>";
      }
      echo json_encode($data);
   }
   
   public function get_course_streams(){

      $res=$this->trainer_model->get_stream_data($_GET["id"])->result();
      
        $data = "<option value='' selected='selected'>-- Select Stream / Specialization --</option>";
      foreach ($res as $key => $value) {
        $data .= "<option value='".$value->course_stream_id."'>".$value->course_stream_name."</option>"; 
      }  
      
      echo json_encode($data);
   }
   
    	public function get_regions(){

      $res=$this->trainer_model->get_region_data($_GET["id"])->result();
      
        $data = "<option value='' selected='selected'>-- Select Region --</option>";
      foreach ($res as $key => $value) {
        $data .= "<option value='".$value->region_id."'>".$value->region_name."</option>"; 
      }
      
       echo json_encode($data);
   }
   
   public function get_branches(){
        
      $trainer_id=$this ->session-> userdata('trainer_id');     
        $prefered_branches=$this->trainer_model->fetch_prefered_branches($trainer_id);
        $branches = array();
        foreach($prefered_branches as $prefered_branch) {
            $branches[] = $prefered_branch['branch_id'];
        }
      $res=$this->trainer_model->get_branch_data($_GET["id"],$_GET["id_2"])->result();
      
        // echo "<option>-- Select Branch --</option>";
    $data = "<table class='table table-bordered'>

                                <thead>
                                  <tr>
                                    <th style='text-align:center;'>Panchayath / Municipality / Corporation</th>
                                  </tr>
                                </thead>
                                <tbody>";
      foreach ($res as $key => $value) {
        // echo "<option value='".$value->studentgroupID."'>".$value->group."</option>"; 
        $data .= "<tr><td>";
        if(in_array($value->studentgroupID, $branches)){
            $data .= "<label><input type='checkbox' name='branch[]' id='branch_$value->studentgroupID' value='$value->studentgroupID' checked='checked'> $value->group $value->localbody_type_name</label>";
        }
        else{
            $data .= "<label><input type='checkbox' name='branch[]' id='branch_$value->studentgroupID' value='$value->studentgroupID'> $value->group $value->localbody_type_name</label>";
        }
        $data .= "</td></tr>";
      }   
      
      echo json_encode($data);
   }
    
    
    public function profile_data()
    {
        date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
        $trainer_id=$this ->session-> userdata('trainer_id');
        $this->trainer_model->delete_prefered_branches($trainer_id);
        $this->trainer_model->delete_prefered_subjects($trainer_id);
        $data = array(
                'full_name' => strtoupper($this->input->post('full_name')),
                'gender' => $this->input->post('gender'),
                'dob' => $this->input->post('dob'),
                'marital_status' => $this->input->post('marital_status'),
                'n_parent' => strtoupper($this->input->post('n_parent')),
                'parent_mob' => $this->input->post('parent_mob'),
                'h_name' => strtoupper($this->input->post('h_name')),
                'street_area' => strtoupper($this->input->post('street_area')),
                'city_town' => strtoupper($this->input->post('city_town')),
                'post' => strtoupper($this->input->post('post')),
                'district' => strtoupper($this->input->post('district')),
                'state' => strtoupper($this->input->post('state')),
                'pincode' => $this->input->post('pincode'),
                'email_id' => strtolower($this->input->post('email_id')),
                'countrycode' => $this->input->post('countrycode'),
                'mob_no' => $this->input->post('mob_no'),
                'course_stream' => $this->input->post('stream'),
                'course_status' => $this->input->post('course_status'),
                'year_of_pass' => $this->input->post('year_of_pass'),
                'academic_remarks' => strtoupper($this->input->post('academic_remarks')),
                'prefered_district' => $this->input->post('prefered_district'),
                'prefered_region_1' => $this->input->post('prefered_region_1'),
                'prefered_region_2' => $this->input->post('prefered_region_2'),
                'tuition_type' => $this->input->post('tuition_type'),
                'prefered_syllabus' => $this->input->post('prefered_syllabus'),
                'suggestion' => $this->input->post('suggestion'),
                'completion' => 1,
                'last_update_on' => $now,
                'active' => 1);
        $this->trainer_model->update_profile($data,$trainer_id);
        $branches=$this->input->post('branch');
        $lp=$this->input->post('lp');
        $up=$this->input->post('up');
        $hs=$this->input->post('hs');
        $hss=$this->input->post('hss');
        if($branches != null)
		{
				foreach ($branches as $value) {

					$data = array(
						'trainer_id' => $trainer_id ,
						'branch_id' => $value,
						'trainer_branch_status' => 1,
				 );
					$this->trainer_model->insert_trainer_branch($data);
				}
		}
		
		if($lp != null)
		{
				foreach ($lp as $value) {

					$data = array(
						'trainer_id' => $trainer_id ,
						'category_id' => 1 ,
						'subject_id' => $value
				 ); 
					$this->trainer_model->insert_trainer_subject($data);
				}
		}
		
		
		
		if($up != null)
		{
				foreach ($up as $value) {

					$data = array(
						'trainer_id' => $trainer_id ,
						'category_id' => 2 ,
						'subject_id' => $value
				 );
					$this->trainer_model->insert_trainer_subject($data);
				}
		}
		
		if($hs != null)
		{
				foreach ($hs as $value) {

					$data = array(
						'trainer_id' => $trainer_id ,
						'category_id' => 3 ,
						'subject_id' => $value
				 );
					$this->trainer_model->insert_trainer_subject($data);
				}
		}
		
		if($hss != null)
		{
				foreach ($hss as $value) {

					$data = array(
						'trainer_id' => $trainer_id ,
						'category_id' => 4 ,
						'subject_id' => $value
				 );
					$this->trainer_model->insert_trainer_subject($data);
				}
		}
		
        echo "<script>alert('Profile Updated Successfully.');window.location.href = '".base_url()."trainer/update_profile"."';</script>";
        
        if($this ->session-> userdata('completion')==0)
        {
            $this->sendmail($this ->session-> userdata('email_id'),strtoupper($this->input->post('full_name')));
        }
        
        
		$this->session->set_userdata('completion', 1);
        
        // echo "<script>alert('Thank You for registering with us. Our Representative will contact you soon.');window.location.href = '".base_url()."trainer/logout"."';</script>";
    }
    
    public function logout()
	{
	    $this->session->sess_destroy();
	    echo "<script>alert('Thank You for registering with us. Our Representative will contact you soon.');window.location.href = '".base_url()."home/index"."';</script>";
	}
	
	public function fetch_branches(){
        
        $this->db2->join('region', 'region.region_id = studentgroup.region_id');
        $this->db2->join('district', 'district.district_id = region.district_id');
        $this->db2->order_by("group", "asc");
        $this->db2->where("district.district_id", $this->input->post('district'));
        $this->db2->where("studentgroup.studentgroupID !=", $this->session->userdata('branch_id'));
        $query=$this->db2->get('studentgroup');
        $branch = $query->result_array();
        echo "<option value=''>Select Branch</option>";
        foreach($branch as $r){
            echo '<option value = "'.$r['studentgroupID'].'" '.$link.'>'.$r['group'].'</option>';
        }
        
        
    }
	
	public function add_referral()
	{
	    if($this ->session-> userdata('user_type')=="")
	    header("location:".base_url()."trainer/index");
	    date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
	    if($_POST)
	    {
	        $array = array(
					"visitor_name" => $this->input->post("referee_name"),
					"company_name" => $this->input->post("parent_name"),
					"visitor_phone" => $this->input->post("referee_mobile_no"),
					"representing" => "Referral Scheme - Trainer",
					"to_meet_personID" => 2,
					"to_meet_usertypeID" => $this->input->post("branch_id"),
					"coming_from" => $this->input->post("locality"),
					"check_in" => $now,
					"status" => 0,
					"schoolyearID" => 2,
					"reason" => "Refer & Earn",
					"note" => $this->input->post("referrer_note"),
					"class" => $this->input->post("class"),
					"course_id" => $this->input->post("course_id"),
					"userID" => $this->session->userdata('trainer_id'),
					"updated_by" => 0
				);

				$this->trainer_model->insert_referral($array);
				echo "<script>alert('Referral Data Saved Successfully.');window.location.href = '".base_url()."trainer/referral_status"."';</script>";
	    }
	    else
	    {
	    $data['districts'] = $this->db2->get('district')->result();   
	        $data['courses'] = $this->db2->get('course_available')->result(); 
        $trainer_id=$this ->session-> userdata('trainer_id');
        $data['profile']=$this->trainer_model->fetch_profile($trainer_id);    
    	    $this->load->view('trainer/templates/header', $data);
            $this->load->view('trainer/pages/add_referral', $data);
            $this->load->view('trainer/templates/footer', $data);
	    }
	}
	
	public function referral_status()
	{   
	    if($this ->session-> userdata('user_type')=="")
	    header("location:".base_url()."trainer/index");
        $data['profile']=$this->trainer_model->fetch_profile($this->session->userdata('trainer_id'));    
	    $data['referrals'] = $this->trainer_model->get_referrals($this->session->userdata('trainer_id'));
    	    $this->load->view('trainer/templates/header', $data);
            $this->load->view('trainer/pages/referral_status', $data);
            $this->load->view('trainer/templates/footer', $data);
	    
	}
	
	public function get_ifsc_branch()
	{
      $ifsc=$_GET["id"];
      $json = file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
        
        echo $json;
	    
	}
	
	public function insert_import()
	{
	    $this->trainer_model->import();
	}
	
	public function bank_account_details()
	{  
        $data['profile']=$this->trainer_model->fetch_profile($this->session->userdata('trainer_id'));
        $data['bank_data']=$this->trainer_model->get_bank_data($this->session->userdata('trainer_id'));
        // echo "<script>alert('".$data['bank_data']['count']."');</script>";
        if($data['bank_data']['count']>=1)
        {
    	$this->load->view('trainer/templates/header', $data);
		$this->load->view('trainer/pages/view_bank_details');
        $this->load->view('trainer/templates/footer', $data);
        }
        else
        { 
         $this->load->view('trainer/templates/header', $data);
		$this->load->view('trainer/pages/add_bank_details');
        $this->load->view('trainer/templates/footer', $data);
        }
	}
	
	 public function bank_data()
    {
        date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
        $trainer_id=$this ->session-> userdata('trainer_id');
        $data = array(
                'trainer_id' => $trainer_id,
                'account_holder' => strtoupper($this->input->post('account_holder')),
                'ifsc' => strtoupper($this->input->post('ifsc')),
                'account_no' => $this->input->post('account_no'),
                'upi_app' => $this->input->post('upi_app'),
                'upi_mob_no' => $this->input->post('upi_mob_no'),
                'last_update_on' => $now);
        $this->trainer_model->insert_common('trainer_bank_details',$data);
        echo "<script>alert('Bank Account Details Updated Successfully.');window.location.href = '".base_url()."trainer/bank_account_details"."';</script>";
        // echo "<script>alert('Thank You for registering with us. Our Representative will contact you soon.');window.location.href = '".base_url()."trainer/logout"."';</script>";
    }
    
    
    
    
    public function sendmail($email,$name)
	{
    
    $new_name=str_replace(" ","_","$name");
      $json = file_get_contents('https://teaminterval.in/email/trainer_profile_completion/'.$email.'/'.$new_name);
        // echo $json;
	    
	}


}

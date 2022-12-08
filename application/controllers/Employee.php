<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            
            $this->load->model("employee_model");
            $this->load->model("main_model");
			//load our second db and put in $db2
            $this->db2 = $this->load->database('automation', TRUE);
        }
    
    public function get_db_count()
	{  
        $db=$this->uri->segment(3);
	    $entity_name=$this->uri->segment(6);
	    $entity_column=$this->uri->segment(5);
	    $entity_table=$this->uri->segment(4);
	    if($db==1)
        $data['profile']=$this->employee_model->get_entity_count_db1($entity_name,$entity_column,$entity_table);
        else
        $data['profile']=$this->employee_model->get_entity_count($entity_name,$entity_column,$entity_table);
        echo $data['profile']['count'];
	}
	
	public function index()
	{
		header("location:".base_url()."employee/login");
	}
	
	public function login()
	{   
	   // redirect("https://maintenance.teaminterval.in/index.php");
	    $this->session->sess_destroy();
		$this->load->view('employee/pages/login');
	}
	
	public function change_password()
	{  
        $data['profile']=$this->employee_model->fetch_profile($this->session->userdata('userID'));   
    	$this->load->view('employee/templates/header', $data);
		$this->load->view('employee/pages/change_password');
        $this->load->view('employee/templates/footer', $data);
	}
	
// 	public function signin()
// 	{   
// 	    $this->session->sess_destroy();
// 		$this->load->view('employee/pages/login');
// 	}

    public function user_signup()
	{
		date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
    	$now = date('Y-m-d H:i:s');
		 
		 $email_data=$this->employee_model->get_entity_count($this->input->post('email_id'),'email','user');
		 $mob_data=$this->employee_model->get_entity_count($this->input->post('mob_no'),'phone','user');
		    
		if ($mob_data['count'] > 0)
			    {
			   	    echo "<script>alert('Mobile No. Already Registered. If it is not done by You, Contact Technical Team Immediately.!');window.location.href = '".base_url()."employee/login#signup"."';</script>";
			    }
			    
		else if($email_data['count'] > 0)
				{
					echo "<script>alert('Email ID Already Registered. Please Try to Login.!');window.location.href = '".base_url()."employee/login"."';</script>";
				}
				
		else
        		{
        		 
        		 $data = array(
                                 'email' => $this->input->post('email_id'),
                                 'username' => $this->input->post('email_id'),
                                 'pwd' => md5($this->input->post('user_pwd')),
                                 'phone' => $this->input->post('mob_no'),
                                 'create_date' => $now);
        
                 $last_id=$this->employee_model->insert_profile($data);	
                 echo "<script>alert('Sign Up Successful. You can Login Now.!');window.location.href = '".base_url()."employee/login"."';</script>";
                
           		}
         
	}

    public function user_check()
    {   
        if($this->input->post('email_id')!="")
        {
        $email_id=$this->input->post('email_id');
        $pwd=$this->input->post('pwd');
        $data=$this->employee_model->login($email_id,$pwd);
        if($data["count"]>0)
        {
                if($data['data']->completion==1)
                {
                    $the_session = array(
                        "user_type" => $data['data']->usertype,
                        "user_type_id" => $data['data']->usertypeID,
                        "userID" => $data['data']->userID,
                        "email_id" => $data['data']->email,
                        "mob_no" => $data['data']->phone,
                        "name" => $data['data']->name
                        );
                    $this -> session -> set_userdata($the_session);
                    echo "<script>alert('You are already Registered. You can Update Your Profile Now.');window.location.href = '".base_url()."employee/update_profile"."';</script>";
                }
                else
                {
                    $the_session = array(
                        "user_type" => $data['data']->usertype,
                        "user_type_id" => $data['data']->usertypeID,
                        "userID" => $data['data']->userID,
                        "email_id" => $data['data']->email,
                        "mob_no" => $data['data']->phone,
                        "name" => $data['data']->name
                        );
                    $this -> session -> set_userdata($the_session);
                    echo "<script>alert('Please Complete Your Registration Process.');window.location.href = '".base_url()."employee/update_profile"."';</script>"; 
                }
        }
                else
        {           
            
                    echo "<script>alert('Invalid Credentials');window.location.href = '".base_url()."employee/login"."';</script>";
        }
        
        }
        
        else
        {
           header("location:".base_url()."employee/index"); 
        }
        
            
    } 
    
    public function user_check_old ()
    {   
        if($this->input->post('email_id')!="")
        {
        $email_id=$this->input->post('email_id');
        $mob_no=$this->input->post('mob_no');
        $data=$this->employee_model->login($email_id,$mob_no);
        if($data["count"]>0)
        {
                if($data['data']->completion==1)
                {
                    $name=$data['data']->name;
                    $the_session = array(
                        "user_type" => "employee",
                        "userID" => $data['data']->userID,
                        "email_id" => $email_id,
                        "mob_no" => $mob_no,
                        "name" => $name
                        );
                    $this -> session -> set_userdata($the_session);
                    echo "<script>alert('You are already Registered. You can Update Your Profile Now.');window.location.href = '".base_url()."employee/update_profile"."';</script>";
                }
                else
                {
                   $name=$data['data']->name;
                    $the_session = array(
                        "user_type" => "employee",
                        "userID" => $data['data']->userID,
                        "email_id" => $email_id,
                        "mob_no" => $mob_no,
                        "name" => $name
                        );
                    $this -> session -> set_userdata($the_session);
                    echo "<script>alert('Please Complete Your Registration Process.');window.location.href = '".base_url()."employee/update_profile"."';</script>"; 
                }
        }
                else
        {           
            date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
                    $data = array(
                         'email' => $this->input->post('email_id'),
                         'username' => $this->input->post('email_id'),
                         'password' => hash("sha512", $this->input->post('mob_no') . '38c0dcca9e5663e193381c7173b6f1e9'),
                         'phone' => $this->input->post('mob_no'),
                         'create_date' => $now);
                    $last_id=$this->employee_model->insert_profile($data);
                    $the_session = array(
                        "user_type" => "employee",
                        "userID" => $last_id,
                        "email_id" => $email_id,
                        "mob_no" => $mob_no,
                        "name" => ""
                        );
                    $this -> session -> set_userdata($the_session);
                    echo "<script>alert('Sign Up Successful. Complete Your Registration Process.');window.location.href = '".base_url()."employee/update_profile"."';</script>";
        }
        
        }
        
        else
        {
           header("location:".base_url()."employee/index"); 
        }
        
            
    } 

        
        
    public function update_profile()
    {   
	   // redirect("https://maintenance.teaminterval.in/index.php");
        if($this ->session-> userdata('user_type')!="")
        {
         $data['course_types'] = $this->employee_model->fetch_course_types();
         $data['usertypes'] = $this->employee_model->fetch_usertypes();
		// $data['regions'] = $this->employee_model->fetch_regions();
		// $data['branches'] = $this->employee_model->fetch_branches();
		// $data['subjects'] = $this->employee_model->fetch_subjects();
        $userID=$this ->session-> userdata('userID');    
        $data['profile']=$this->employee_model->fetch_profile($userID);
        if($data['profile']['data']->completion==1 && $data['profile']['data']->account_no=="")
        {
           header("location:".base_url()."employee/bank_account_details"); 
        }
        $data['course']=$this->employee_model->fetch_course($data['profile']['data']->course_stream); 
        // $data['region_1']=$this->employee_model->fetch_region($data['profile']['data']->prefered_region_1);    
        // $data['region_2']=$this->employee_model->fetch_region($data['profile']['data']->prefered_region_2);     
        // $data['prefered_branch']=$this->employee_model->fetch_prefered_branches($userID);    
        // $data['prefered_subjects']=$this->employee_model->fetch_prefered_subjects($userID);
        $this->load->view('employee/templates/header', $data);
        $this->load->view('employee/pages/update_profile', $data);
        $this->load->view('employee/templates/footer', $data);
        }
        else
        {
		    header("location:".base_url()."employee/index");
        }
    }  
        
        public function get_courses(){

      $res=$this->employee_model->get_course_data($_GET["id"])->result();
      
      
        $data = "<option value='' selected='selected'>-- Select Course --</option>";
      foreach ($res as $key => $value) {
        $data .= "<option value='".$value->course_id."'>".$value->course_name."</option>";
      }
      echo json_encode($data);
   }
   
   public function get_course_streams(){

      $res=$this->employee_model->get_stream_data($_GET["id"])->result();
      
        $data = "<option value='' selected='selected'>-- Select Stream / Specialization --</option>";
      foreach ($res as $key => $value) {
        $data .= "<option value='".$value->course_stream_id."'>".$value->course_stream_name."</option>"; 
      }  
      
      echo json_encode($data);
   }
   
    	public function get_regions(){

      $res=$this->employee_model->get_region_data($_GET["id"])->result();
      
        $data = "<option value='' selected='selected'>-- Select Region --</option>";
      foreach ($res as $key => $value) {
        $data .= "<option value='".$value->region_id."'>".$value->region_name."</option>"; 
      }
      
       echo json_encode($data);
   }
   
   public function get_branches(){
        
      $userID=$this ->session-> userdata('userID');     
        $prefered_branches=$this->employee_model->fetch_prefered_branches($userID);
        $branches = array();
        foreach($prefered_branches as $prefered_branch) {
            $branches[] = $prefered_branch['branch_id'];
        }
      $res=$this->employee_model->get_branch_data($_GET["id"],$_GET["id_2"])->result();
      
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
            $data .= "<label><input type='checkbox' name='branch[]' id='branch_$value->studentgroupID' value='$value->studentgroupID' checked='checked'> $value->group</label>";
        }
        else{
            $data .= "<label><input type='checkbox' name='branch[]' id='branch_$value->studentgroupID' value='$value->studentgroupID'> $value->group</label>";
        }
        $data .= "</td></tr>";
      }   
      
      echo json_encode($data);
   }
    
    
    public function profile_data()
    {
        date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
        $userID=$this ->session-> userdata('userID');
        $data = array(
                'name' => strtoupper($this->input->post('name')),
                'sex' => $this->input->post('sex'),
                'dob' => $this->input->post('dob'),
                'bloodgroup' => $this->input->post('bloodgroup'),
                'marital_status' => $this->input->post('marital_status'),
                'n_parent' => strtoupper($this->input->post('n_parent')),
                'parent_mob' => $this->input->post('parent_mob'),
                'address' => strtoupper($this->input->post('h_name')),
                'street_area' => strtoupper($this->input->post('street_area')),
                'city_town' => strtoupper($this->input->post('city_town')),
                'post' => strtoupper($this->input->post('post')),
                'district' => strtoupper($this->input->post('district')),
                'state' => strtoupper($this->input->post('state')),
                'pincode' => $this->input->post('pincode'),
                'email' => strtolower($this->input->post('email_id')),
                'username' => strtolower($this->input->post('email_id')),
                'phone' => $this->input->post('phone'),
                'aadhaar' => $this->input->post('aadhaar'),
                'jod' => $this->input->post('jod'),
                'course_stream' => $this->input->post('stream'),
                'course_status' => $this->input->post('course_status'),
                'year_of_pass' => $this->input->post('year_of_pass'),
                'academic_remarks' => strtoupper($this->input->post('academic_remarks')),
                'suggestion' => $this->input->post('suggestion'),
                'completion' => 1,
                'modify_date' => $now,
                'active' => 0);
        $this->employee_model->update_profile($data,$userID);
        echo "<script>alert('Profile Updated Successfully.');window.location.href = '".base_url()."employee/update_profile"."';</script>";
    }
    
    public function logout()
	{
	    $this->session->sess_destroy();
	    echo "<script>window.location.href = '".base_url()."employee/login"."';</script>";
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
	    header("location:".base_url()."employee/index");
	    date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
	    if($_POST)
	    {
	        $array = array(
					"visitor_name" => $this->input->post("referee_name"),
					"company_name" => $this->input->post("parent_name"),
					"visitor_phone" => $this->input->post("referee_mobile_no"),
					"representing" => "Referral Scheme - Employee",
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
					"userID" => $this->session->userdata('userID'),
					"updated_by" => 0
				);

				$this->employee_model->insert_referral($array);
				echo "<script>alert('Referral Data Saved Successfully.');window.location.href = '".base_url()."employee/referral_status"."';</script>";
	    }
	    else
	    {
	    $data['districts'] = $this->db2->get('district')->result();   
	        $data['courses'] = $this->db2->get('course_available')->result(); 
        $userID=$this ->session-> userdata('userID');
        $data['profile']=$this->employee_model->fetch_profile($userID);    
    	    $this->load->view('employee/templates/header', $data);
            $this->load->view('employee/pages/add_referral', $data);
            $this->load->view('employee/templates/footer', $data);
	    }
	}
	
	public function referral_status()
	{   
	    if($this ->session-> userdata('user_type')=="")
	    header("location:".base_url()."employee/index");
        $data['profile']=$this->employee_model->fetch_profile($this->session->userdata('userID'));    
	    $data['referrals'] = $this->employee_model->get_referrals($this->session->userdata('userID'));
    	    $this->load->view('employee/templates/header', $data);
            $this->load->view('employee/pages/referral_status', $data);
            $this->load->view('employee/templates/footer', $data);
	    
	}
	
	public function get_ifsc_branch()
	{
      $ifsc=$_GET["id"];
      $json = file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
        
        echo $json;
	    
	}
	
	public function insert_import()
	{
	    $this->employee_model->import();
	}
	
	public function bank_account_details()
	
	{  
        $data['profile']=$this->employee_model->fetch_profile($this->session->userdata('userID'));
        // echo "<script>alert('".$this->session->userdata('name')."');</script>";
        if($data['profile']['data']->account_no!="")
        {
    	$this->load->view('employee/templates/header', $data);
		$this->load->view('employee/pages/view_bank_details');
        $this->load->view('employee/templates/footer', $data);
        }
        else
        { 
         $this->load->view('employee/templates/header', $data);
		$this->load->view('employee/pages/update_bank_details');
        $this->load->view('employee/templates/footer', $data);
        }
	}
	
	 public function bank_data()
    {
        date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
        $userID=$this ->session-> userdata('userID');
        $data = array(
                'account_holder' => strtoupper($this->input->post('account_holder')),
                'ifsc' => strtoupper($this->input->post('ifsc')),
                'account_no' => $this->input->post('account_no'),
                'upi_app' => $this->input->post('upi_app'),
                'upi_mob_no' => $this->input->post('upi_mob_no'),
                'modify_date' => $now);
        $this->employee_model->update_profile($data,$userID);
        echo "<script>alert('Bank Account Details Updated Successfully.');window.location.href = '".base_url()."employee/bank_account_details"."';</script>";
    }

    public function pwd()
    {
        echo hash("sha512", '9446792366' . '38c0dcca9e5663e193381c7173b6f1e9');
    }
    
    public function trainer_data()
	{  
	    if($this ->session-> userdata('userID')!=254)
	    {
	        redirect("https://teaminterval.in/employee/login");
	    }
        $data['trainer_data']=$this->employee_model->fetch_trainer_data($this->session->userdata('userID'));   
    	$this->load->view('employee/templates/header', $data);
		$this->load->view('employee/pages/trainer_data');
        $this->load->view('employee/templates/footer', $data);
	}
	
	public function employee_data()
	{  
	    if($this ->session-> userdata('userID')!=252)
	    {
	        redirect("https://teaminterval.in/employee/login");
	    }
        $data['trainer_data']=$this->employee_model->fetch_employee_data($this->session->userdata('userID'));   
    	$this->load->view('employee/templates/header', $data);
		$this->load->view('employee/pages/employee_data');
        $this->load->view('employee/templates/footer', $data);
	}
	
	public function bank_accounts_data()
	{  
	    if($this ->session-> userdata('userID')!=138)
	    {
	        redirect("https://teaminterval.in/employee/login");
	    }
        $data['trainer_data']=$this->employee_model->fetch_employee_data($this->session->userdata('userID'));   
    	$this->load->view('employee/templates/header', $data);
		$this->load->view('employee/pages/bank_data');
        $this->load->view('employee/templates/footer', $data);
	}
	
	public function viewmd5()
	{
	    echo md5($this->uri->segment(3));
	}
	
	public function apply_leave()
	{
	    if($this ->session-> userdata('user_type')=="")
	    header("location:".base_url()."employee/index");
	    date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
	    if($_POST)
	    {
	        $array = array(
					"userID" => $this ->session-> userdata('userID'),
					"from_date" => $this->input->post("from_date"),
					"to_date" => $this->input->post("to_date"),
					"no_of_days" => $this->input->post("no_of_days"),
					"reason" => $this->input->post("reason"),
					"app_timestamp" => $now,
					"status" => 0
				);

				$this->employee_model->insert_leave($array);
				echo "<script>alert('Leave Applied Successfully.');window.location.href = '".base_url()."employee/leave_status"."';</script>";
	    }
	    else
	    {
	    $data['districts'] = $this->db2->get('district')->result();   
	        $data['courses'] = $this->db2->get('course_available')->result(); 
        $userID=$this ->session-> userdata('userID');
        $data['profile']=$this->employee_model->fetch_profile($userID);    
    	    $this->load->view('employee/templates/header', $data);
            $this->load->view('employee/pages/apply_leave', $data);
            $this->load->view('employee/templates/footer', $data);
	    }
	}
	
	public function leave_status()
	{   
	    if($this ->session-> userdata('user_type')=="")
	    header("location:".base_url()."employee/index");  
	    $data['leaves'] = $this->employee_model->get_leaves($this->session->userdata('userID'));
    	    $this->load->view('employee/templates/header', $data);
            $this->load->view('employee/pages/leave_status', $data);
            $this->load->view('employee/templates/footer', $data);
	    
	}
	
	public function emp_leave_status()
	{   
	    if($this ->session-> userdata('user_type')=="")
	    header("location:".base_url()."employee/index");  
	    $data['leaves'] = $this->employee_model->emp_get_leaves($this->session->userdata('userID'));
    	    $this->load->view('employee/templates/header', $data);
            $this->load->view('employee/pages/emp_leave_status', $data);
            $this->load->view('employee/templates/footer', $data);
	    
	}
	
	public function event_registrations()
	{   
	    if($this ->session-> userdata('user_type')=="")
	    header("location:".base_url()."employee/index");  
	    $data['events'] = $this->employee_model->events_data($this->session->userdata('userID'));
    	    $this->load->view('employee/templates/header', $data);
            $this->load->view('employee/pages/event_registrations', $data);
            $this->load->view('employee/templates/footer', $data);
	    
	}
	
	public function event_data()
	{   
	    if($this ->session-> userdata('user_type')=="")
	    header("location:".base_url()."employee/index"); 
	    $event_id=$this->uri->segment(3);
	    $data['single_event'] = $this->employee_model->get_single_event_data($event_id);
	    $data['event_datas'] = $this->employee_model->get_event_data($event_id);
    	    $this->load->view('employee/templates/header', $data);
            $this->load->view('employee/pages/event_data', $data);
            $this->load->view('employee/templates/footer', $data);
	    
	}
	
	public function emp_leave_update()
	{   $leave_id=$this->uri->segment(3);
	
	    $data['leave'] = $this->employee_model->emp_get_leave($leave_id);
	    date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
	         		$now = date('Y-m-d H:i:s');
	    if($_POST)
	    {
	        $array = array(
					"remarks" => $this->input->post("remarks"),
					"status" => $this->input->post("status"),
					"last_update_on" => $now,
					
				);

				$this->employee_model->update_data('leaveapp','leave_id',$leave_id,$array);
				echo "<script>alert('Data Saved Successfully.');window.location.href = '".base_url()."employee/emp_leave_status"."';</script>";
	    }
	    else
	    {
    	    $this->load->view('employee/templates/header', $data);
            $this->load->view('employee/pages/leave_view', $data);
            $this->load->view('employee/templates/footer', $data);
	    }
	    
	}
	
	
	
	
	
	
// 	=========== Job Applications starts====================

	public function job_application()
	{   
	    if($this ->session-> userdata('user_type')=="")
	     header("location:".base_url()."employee/index"); 
	    $data['uname']=$this ->session-> userdata['name'];
	    $data['res']=$this->employee_model->get_apps();
	    $this->load->view('employee/templates/header', $data);
        $this->load->view('employee/pages/job_apps', $data);
        $this->load->view('employee/templates/footer', $data);
	}
	
	public function change_status()
	{
	    $id=$this->input->post('mid');
	    $up_by=$this->input->post('up_by');
	    $status=$this->input->post('status');
	    $remark=$this->input->post('remark');
	    $data=array("status"=>$status,"updated_by"=>$up_by);
	    if($remark!=null)
	    {$data['remark']=$remark;
	        print_r($data);
	    }
	    
	    $this->main_model->ch_status($id,$data);
	    redirect('/employee/job_application');

	}
	
	
	
	public function delete_job_app()
	{
	    $id=$this->input->post('m2id');
	    $this->main_model->delete_job_app($id);
	    redirect('/employee/job_application');
	}
//=================== Job Application ends==================




//================== Office Assistant======================
    
    public function add_lead(){
        $data=$this->employee_model->addlead_predata();
        // print_r($data['dis']);
        $this->load->view('employee/templates/header');
        $this->load->view('employee/pages/add_lead',$data);
        $this->load->view('employee/templates/footer');
    }
    
    public function submit_lead()
    {
        $data=$this->input->post();
        
        if ($data['Res_of_kl']=="no"){
            $data['state_id']=$this->employee_model->add_state($data['country_id'],$data['state']);
            $data['lead_district_id']=$this->employee_model->add_district($data['state_id'],$data['lead_district_id']);
            unset($data['state']);
            unset($data['state_id']);
            unset($data['country_id']);

            
        }
        echo "=============================";
       
        unset($data['Res_of_kl']);
        $data['lead_userID']=$this ->session-> userdata('userID');

        $this->employee_model->add_lead($data);
        redirect('/employee');
    }
}

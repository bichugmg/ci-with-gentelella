<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            
            $this->load->model("registration_model");
        }
    
    
    public function euphoria()
	{
		redirect("https://teaminterval.in/registration/form/euphoria");
		
	}
	
	
    public function vcamp()
	{
		redirect("https://teaminterval.in/registration/form/virtualcamp");
		
	}
	
	public function webinar()
	{
		redirect("https://teaminterval.in/registration/form/webinar");
		
	}
	
	public function shecamp()
	{
		redirect("https://teaminterval.in/registration/form/shecamp");
		
	}
	
	public function svcamp()
	{
		redirect("https://teaminterval.in/registration/form/svcamp");
		
	}
	
	public function parenting()
	{
		redirect("https://teaminterval.in/registration/form/parenting");
		
	}
	
	public function index()
	{
		redirect("https://teaminterval.in/registration/form");
	}
	
	public function form()
	{   $event_code=$this->uri->segment(3);
	   // echo "<script>alert('$event_code');</script>";
	   
        $data ['event_data'] =$this->registration_model->fetch_event($event_code);
	   if($event_code!="" && $data ['event_data']['count']>=1)
        	   {    
        	       if($data ['event_data']['data']->event_status==1)
        	       {
            	        if($_POST) 
            	        {   
            	           date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
            	         		$now = date('Y-m-d H:i:s');
            	           $data = array(
            	               'event_id' => $this->input->post('event_id'),
            	               'column_1_text' => strtoupper($this->input->post('column_1_text')),
            	               'column_2_text' => strtoupper($this->input->post('column_2_text')),
            	               'column_3_radio' => $this->input->post('column_3_radio'),
            	               'column_4_text' => strtoupper($this->input->post('column_4_text')),
            	               'column_5_text' => strtoupper($this->input->post('column_5_text')),
            	               'column_6_dropdown' => $this->input->post('column_6_dropdown'),
            	               'column_7_text' => strtoupper($this->input->post('column_7_text')),
            	               'column_8_number' => $this->input->post('column_8_number'),
            	               'column_9_email' => strtolower($this->input->post('column_9_email')),
            	               'column_10_number' => $this->input->post('column_10_number'),
            	               'timestamp' => $now
                                );
                            $this->registration_model->insert_form_data($data);
                            
                        if($this->input->post('event_id')==4)
                        echo "<script>alert('Thank You for Registering. Meeting ID will be shared to you on 19th May at 6.30 PM via SMS.');window.location.href = '".base_url()."home/index"."';</script>";
                        else
                         echo "<script>alert('Registration Successful. Our Representative will contact you soon.');window.location.href = '".base_url()."home/index"."';</script>"; 
            	                
            	        }
            	        
            	       else
            	       
            	        {
            	            $data['countries']=$this->registration_model->fetch_countries();
                    		$this->load->view('user/pages/registration/index',$data);
            	        }
        	       }
        	       else
        	       {
        	          echo "<script>alert('Thanks for your Interest. Registration for this Event has been Closed. Visit our Website for more events.');window.location.href = '".base_url()."home/index"."';</script>"; 
        	       }
        	   }
	   else
	            echo "<script>alert('Invalid Event Code.');window.location.href = '".base_url()."home/index"."';</script>";
	}
	
	public function form_data()
    {

        $data = array('title' => $this->input->post('title'),
                        'url' => $this->input->post('url')
                    );
                $this->registration_model->insert_form_data($data);

             echo "<script>alert('Registration Successful. Our Representative will contact you soon.');window.location.href = '".base_url()."home/index"."';</script>";
            }

    public function banners()
    {
        $data ['banner_data'] =$this->admin_model->fetch_banners();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/banners', $data);
        $this->load->view('admin/templates/footer');
    }

	public function insert_banner()
	{

		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/insert_banner');
		$this->load->view('admin/templates/footer');
	}

    public function banner_data()
	{
		$this->load->model("admin_model");	
        $this->load->library('upload');
        	$file_name=str_replace(" ", "_", time().$_FILES['photo']['name']);
            $photo['upload_path'] = './assets/admin/uploads/banners/';
            $photo['allowed_types'] = 'jpg | jpeg';
            // $photo['max_size'] = 200;
            // $photo['max_width'] = 300;
            // $photo['max_height'] = 400;
            $photo['file_name'] = $file_name;
            $photo['overwrite'] = TRUE;
            // $photo['encrypt_name'] = FALSE;
            // $photo['remove_spaces'] = TRUE;

            $this->upload->initialize($photo);

            if (!$this->upload->do_upload('photo')) 
            {
                $error = array('error' => $this->upload->display_errors());
                
                if (isset($error))
                {
                        
                echo "Error in Photo Upload -> ".$error['error'];
                echo "<script>alert('Error in Uploading Photo.');window.location.href = '".base_url()."admin/insert_banner"."';</script>";
                    
                }

            } 
            else 
            {
            	$data = array(
		            'img' => "assets/admin/uploads/banners/".$file_name
         		);
                $this->admin_model->insert_banner($data);
             echo "<script>alert('Banner Inserted Successfully.');window.location.href = '".base_url()."admin/banners"."';</script>";
            }
   
    }

    public function delete_banner()
    {
        $this->admin_model->delete_banner($_GET["id"]);
    }

    public function notifications()
    {
        $data ['notification_data'] =$this->admin_model->fetch_notifications();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/notifications', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_notification()
    {

        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/insert_notification');
        $this->load->view('admin/templates/footer');
    }

    public function notification_data()
    {

        $data = array('title' => $this->input->post('title'),
                        'url' => $this->input->post('url')
                    );
                $this->admin_model->insert_notification($data);

             echo "<script>alert('Notification Data Inserted Successfully.');window.location.href = '".base_url()."admin/notifications"."';</script>";
            }

    public function delete_notification()
    {
        $this->admin_model->delete_notification($_GET["id"]);
    }

    public function course_category()
    {
        $data ['course_category_data'] =$this->admin_model->fetch_course_category();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/course_category', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_course_category()
    {

        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/insert_course_category');
        $this->load->view('admin/templates/footer');
    }

    public function course_category_data()
    {

        $data = array('category' => $this->input->post('category'));
                $this->admin_model->insert_course_category($data);

             echo "<script>alert('Course Category Data Inserted Successfully.');window.location.href = '".base_url()."admin/course_category"."';</script>";
            }

    public function delete_course_category()
    {
        $this->admin_model->delete_course_category($_GET["id"]);
    }

    public function courses()
    {
        $data ['course_data'] =$this->admin_model->fetch_courses();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/courses', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_course()
	{
        $data['course_categories'] = $this->admin_model->fetch_course_categories();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/insert_course', $data);
		$this->load->view('admin/templates/footer');
	}

	public function course_data()
	{
		$this->load->model("admin_model");	
        $this->load->library('upload');
        	$file_name=str_replace(" ", "_", time().$_FILES['photo']['name']);
            $photo['upload_path'] = './assets/admin/uploads/courses/';
            $photo['allowed_types'] = 'jpg | jpeg';
            // $photo['max_size'] = 200;
            // $photo['max_width'] = 300;
            // $photo['max_height'] = 400;
            $photo['file_name'] = $file_name;
            $photo['overwrite'] = TRUE;
            // $photo['encrypt_name'] = FALSE;
            // $photo['remove_spaces'] = TRUE;

            $this->upload->initialize($photo);

            if (!$this->upload->do_upload('photo')) 
            {
                $error = array('error' => $this->upload->display_errors());
                
                if (isset($error))
                {
                        
                echo "Error in Photo Upload -> ".$error['error'];
                echo "<script>alert('Error in Uploading Photo.');window.location.href = '".base_url()."admin/insert_course"."';</script>";
                    
                }

            } 
            else 
            {
            	$data = array(
                    'category' => $this->input->post('category'),
		            'course_name' => $this->input->post('course_name'),
		            'description' => $this->input->post('description'),
		            'author' => $this->input->post('author'),
		            'img' => "assets/admin/uploads/courses/".$file_name,
                    'popular' => 1
         		);
                $this->admin_model->insert_course($data);
             echo "<script>alert('Course Data Inserted Successfully.');window.location.href = '".base_url()."admin/courses"."';</script>";
            }
   
    } 

    public function delete_course()
    {
        $this->admin_model->delete_course($_GET["id"]);
    }

    public function trainers()
    {
        $data ['trainer_data'] =$this->admin_model->fetch_trainers_();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/trainers', $data);
        $this->load->view('admin/templates/footer');
    }

	public function insert_trainers()
	{

		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/insert_trainers');
		$this->load->view('admin/templates/footer');
	}

	public function trainer_data()
	{
		$this->load->model("admin_model");	
        $this->load->library('upload');
        	$file_name=str_replace(" ", "_", time().$_FILES['photo']['name']);
            $photo['upload_path'] = './assets/admin/uploads/trainers/';
            $photo['allowed_types'] = 'jpg | jpeg';
            $photo['max_size'] = 200;
            $photo['max_width'] = 300;
            $photo['max_height'] = 400;
            $photo['file_name'] = $file_name;
            $photo['overwrite'] = TRUE;
            // $photo['encrypt_name'] = FALSE;
            // $photo['remove_spaces'] = TRUE;

            $this->upload->initialize($photo);

            if (!$this->upload->do_upload('photo')) 
            {
                $error = array('error' => $this->upload->display_errors());
                
                if (isset($error))
                {
                        
                echo "Error in Photo Upload -> ".$error['error'];
                echo "<script>alert('Error in Uploading Photo.');window.location.href = '".base_url()."admin/insert_trainers"."';</script>";
                    
                }

            } 
            else 
            {
            	$data = array(
		            'name' => $this->input->post('full_name'),
		            'designation' => $this->input->post('designation'),
		            'description' => $this->input->post('description'),
		            'image' => "assets/admin/uploads/trainers/".$file_name
         		);
                $this->admin_model->insert_trainer($data);
             echo "<script>alert('Trainer Data Inserted Successfully.');window.location.href = '".base_url()."admin/trainers"."';</script>";
            }
   
    }

    public function delete_trainer()
    {
        $this->admin_model->delete_trainer($_GET["id"]);
    }

    public function testimonials()
    {
        $data ['testimonial_data'] =$this->admin_model->fetch_testimonials();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/testimonials', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_testimonial()
	{

		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/insert_testimonial');
		$this->load->view('admin/templates/footer');
	}

	public function testimonial_data()
	{
		$this->load->model("admin_model");	
        $this->load->library('upload');
        	$file_name=str_replace(" ", "_", time().$_FILES['photo']['name']);
            $photo['upload_path'] = './assets/admin/uploads/testimonials/';
            $photo['allowed_types'] = 'jpg | jpeg';
            // $photo['max_size'] = 200;
            // $photo['max_width'] = 300;
            // $photo['max_height'] = 400;
            $photo['file_name'] = $file_name;
            $photo['overwrite'] = TRUE;
            // $photo['encrypt_name'] = FALSE;
            // $photo['remove_spaces'] = TRUE;

            $this->upload->initialize($photo);

            if (!$this->upload->do_upload('photo')) 
            {
                $error = array('error' => $this->upload->display_errors());
                
                if (isset($error))
                {
                        
                echo "Error in Photo Upload -> ".$error['error'];
                echo "<script>alert('Error in Uploading Photo.');window.location.href = '".base_url()."admin/insert_testimonial"."';</script>";
                    
                }

            } 
            else 
            {
            	$data = array(
		            'name' => $this->input->post('full_name'),
		            'designation' => $this->input->post('designation'),
		            'testi' => $this->input->post('description'),
		            'img' => "assets/admin/uploads/testimonials/".$file_name
         		);
                $this->admin_model->insert_testimonial($data);
             echo "<script>alert('Testimonial Data Inserted Successfully.');window.location.href = '".base_url()."admin/testimonials"."';</script>";
            }
   
    }

    public function delete_testimonial()
    {
        $this->admin_model->delete_testimonial($_GET["id"]);
    }

    public function downloads_category()
    {
        $data ['downloads_category_data'] =$this->admin_model->fetch_downloads_category();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/downloads_category', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_downloads_category()
    {

        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/insert_downloads_category');
        $this->load->view('admin/templates/footer');
    }

    public function downloads_category_data()
    {

        $data = array('category' => $this->input->post('category'));
                $this->admin_model->insert_downloads_category($data);

             echo "<script>alert('Downloads Category Data Inserted Successfully.');window.location.href = '".base_url()."admin/downloads_category"."';</script>";
            }

    public function delete_downloads_category()
    {
        $this->admin_model->delete_downloads_category($_GET["id"]);
    }

    public function sm_qp()
    {
        $data ['sm_qp_data'] =$this->admin_model->fetch_sm_qp();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/sm_qp', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_sm_qp()
    {

        $data['downloads_categories'] = $this->admin_model->fetch_downlads_categories();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/insert_sm_qp', $data);
        $this->load->view('admin/templates/footer');
    }

    public function sm_qp_data()
    {

        $data = array('title' => $this->input->post('title'),
                        'url' => $this->input->post('url'),
                        'category' => $this->input->post('category'),
                        'type' => $this->input->post('type')
                    );
                $this->admin_model->insert_sm_qp($data);

             echo "<script>alert('Study Materials / Question Papers Data Inserted Successfully.');window.location.href = '".base_url()."admin/sm_qp"."';</script>";
            }

    public function delete_sm_qp()
    {
        $this->admin_model->delete_sm_qp($_GET["id"]);
    }

    public function blog_category ()
    {
        $data ['blog_category_data'] =$this->admin_model->fetch_blog_category();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/blog_category ', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_blog_category()
    {

        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/insert_blog_category');
        $this->load->view('admin/templates/footer');
    }

    public function blog_category_data()
    {

        $data = array('category' => $this->input->post('category'));
                $this->admin_model->insert_blog_category($data);

             echo "<script>alert('Blog Category Data Inserted Successfully.');window.location.href = '".base_url()."admin/blog_category"."';</script>";
            }

    public function delete_blog_category()
    {
        $this->admin_model->delete_blog_category($_GET["id"]);
    }

    public function blogs()
    {
        $data ['blog_data'] =$this->admin_model->fetch_blogs();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/blogs', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_blog()
    {

        $data['blog_categories'] = $this->admin_model->fetch_post_categories();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/pages/insert_blog', $data);
        $this->load->view('admin/templates/footer');
    }

    public function blog_data()
    {
        $this->load->model("admin_model");  
        $this->load->library('upload');
            $file_name=str_replace(" ", "_", time().$_FILES['photo']['name']);
            $photo['upload_path'] = './assets/admin/uploads/blogs/';
            $photo['allowed_types'] = 'jpg | jpeg';
            // $photo['max_size'] = 200;
            // $photo['max_width'] = 300;
            // $photo['max_height'] = 400;
            $photo['file_name'] = $file_name;
            $photo['overwrite'] = TRUE;
            // $photo['encrypt_name'] = FALSE;
            // $photo['remove_spaces'] = TRUE;

            $this->upload->initialize($photo);

            if (!$this->upload->do_upload('photo')) 
            {
                $error = array('error' => $this->upload->display_errors());
                
                if (isset($error))
                {
                        
                echo "Error in Photo Upload -> ".$error['error'];
                echo "<script>alert('Error in Uploading Photo.');window.location.href = '".base_url()."admin/insert_blog"."';</script>";
                    
                }

            } 
            else 
            {
                $data = array(
                    'category' => $this->input->post('category'),
                    'title' => $this->input->post('title'),
                    'body' => $this->input->post('content'),
                    'author' => $this->input->post('author'),
                    'img' => "assets/admin/uploads/blogs/".$file_name
                );
                $this->admin_model->insert_blog($data);
             echo "<script>alert('Blog Data Inserted Successfully.');window.location.href = '".base_url()."admin/blogs"."';</script>";
            }
   
    }

    public function delete_blog()
    {
        $this->admin_model->delete_blog($_GET["id"]);
    }


}
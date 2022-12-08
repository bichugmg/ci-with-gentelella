<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            
            $this->load->model("admin_model");
	   // redirect("https://maintenance.teaminterval.in/index.php");
        }
        
    public function login()
	{   
		$this->load->view('admin/pages/login_v');
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		header("location:".base_url()."admin/login");
		
	}
	
	public function login_check()
	{   
		$user_name=$this->input->post('user_name');
		$user_pwd=$this->input->post('user_pwd');
		$data=$this->admin_model->login($user_name,$user_pwd);
		if($data["count"]>0){
					$full_name=$data['data']->full_name;
					$the_session = array(
						"user_type" => "admin",
						"user_name" => $user_name,
						"full_name" => $full_name
						);
					$this -> session -> set_userdata($the_session);
					header("location:".base_url()."admin/index");
				}
				else
					echo "<script>alert('Invalid Login Credentials');window.location.href = '".base_url()."admin/login"."';</script>";
	}
	
	public function index()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/index');
		$this->load->view('admin/templates/footer');
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
		            'url_name' => $this->input->post('url_name'),
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
            $photo['allowed_types'] = 'jpg|jpeg|png';
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
                    'url_title' => $this->input->post('url_title'),
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

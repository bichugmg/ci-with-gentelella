<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct()
	{
		parent::__construct();
			
		$this->load->model("main_model");
	}

	public function index()
	{
	    	$nav['page_title']="Free Study Tips, Exam Preparation Strategies | Interval Blog";
		$nav['keywords_content']="online tuition blog,tuition class blog,educational blog,interval blog,team Interval blog,edtech blog, online learning blog";
		$nav['description_content']="An educational blog for study and exam preparation tips, including parenting tips and trending online tuition news. Stories on Interval online individual classes";
		
		$nav['og_url_content']="https://teaminterval.in/blog";
		$nav['og_type_content']="website";
		$nav['og_title_content']="Free Study Tips, Exam Preparation Strategies | Interval Blog";
		$nav['og_description_content']="An educational blog for study and exam preparation tips, including parenting tips and trending online tuition news. Stories on Interval online individual classes";
		$nav['og_image_content']="https://teaminterval.in/assets/users/img/blog-img.jpg";
		
		$this->load->library('pagination');
		$nav['active'] = 'blog';

		// $data['posts'] = $this->main_model->get_posts();
		// print_r($data['posts']);

		$data['base_url'] = base_url().'blog/index/';
		$data['total_rows'] = $this->db->get('blog')->num_rows();
		$data['per_page'] = 3;
		$data['num_links'] = 10;
		$this->db->order_by("created_at","desc");
		$data['records'] = $this->db->get('blog',$data['per_page'],$this->uri->segment(3))->result_array();

		$this->pagination->initialize($data);
		// print_r($data['records']);

		$data['posts_category'] = $this->main_model->get_category();
		$data['popular_post'] = $this->main_model->get_popular_post();


		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/blog', $data);
		$this->load->view('user/templates/footer');
	}

	public function view($id = null)
	{
		$nav['active'] = 'blog';
		$data['post'] = $this->main_model->get_posts($id);
		
		
		
		$nav['og_url_content']=$data['post']['url_title'];
        $nav['og_type_content']=$data['post']['og_type_content'];
        $nav['og_title_content']=$data['post']['title'];
        $nav['og_description_content']=$data['post']['og_description_content'];
        $nav['og_image_content']=base_url().$data['post']['img'];
        
        
		$data['posts_category'] = $this->main_model->get_category();
		$data['popular_post'] = $this->main_model->get_popular_post();
		// $data['comments'] = $this->main_model->get_comment($id);
		$this->db->where('blog_id',$id);
		$data['total_rows'] = $this->db->get('blog_comments')->num_rows();
		$data['post_id'] = $id;
		// print_r($data['comments']);
		if(empty($data['post'])){
			$this->index();
		}
		// print_r($data['posts']);
		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/single_blog', $data);
		$this->load->view('user/templates/footer');
	}

	public function category($id,$cat)
	{
		$cat = rawurldecode($cat);
		$this->load->library('pagination');
		$nav['active'] = 'blog';

		// $data['posts'] = $this->main_model->get_posts();
		// print_r($data['posts']);

		$data['base_url'] = base_url().'blog/category/cat/'.$cat.'/';
		$this->db->where('category',$cat);
		$data['total_rows'] = $this->db->get('blog')->num_rows();
		$data['per_page'] = 3;
		$data['num_links'] = 10;
		$this->db->where('category',$cat);
		$this->db->order_by("created_at","desc");
		$data['records'] = $this->db->get('blog',$data['per_page'],$this->uri->segment(5))->result_array();

		$this->pagination->initialize($data);
		// print_r($data['records']);

		$data['posts_category'] = $this->main_model->get_category();
		$data['popular_post'] = $this->main_model->get_popular_post();


		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/blog', $data);
		$this->load->view('user/templates/footer');
	}

	public function search($id,$cat)
	{
		$cat = rawurldecode($cat);
		$this->load->library('pagination');
		$nav['active'] = 'blog';

		// $data['posts'] = $this->main_model->get_posts();
		// print_r($data['posts']);

		$data['base_url'] = base_url().'blog/search/tag/'.$cat.'/';
		$this->db->like('title',$cat);
		$data['total_rows'] = $this->db->get('blog')->num_rows();
		$data['per_page'] = 3;
		$data['num_links'] = 10;
		$this->db->like('title',$cat);
		$this->db->order_by("created_at","desc");
		$data['records'] = $this->db->get('blog',$data['per_page'],$this->uri->segment(5))->result_array();

		$this->pagination->initialize($data);
		// print_r($data['records']);

		$data['posts_category'] = $this->main_model->get_category();
		$data['popular_post'] = $this->main_model->get_popular_post();


		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/blog', $data);
		$this->load->view('user/templates/footer');
	}

	function post_comment(){

		echo $this->main_model->comment_post($this->input->post('id'),$this->input->post('message'));
	}

	function comment($rowno = 0,$cmnt)
	{
		$this->load->library('pagination');

	    $rowperpage = 4;


	    if($rowno != 0){
	      $rowno = ($rowno-1) * $rowperpage;
	    }
	 

	    $this->db->where('blog_id',$cmnt);
	    $allcount = $this->db->get('blog_comments')->num_rows();


	 	$comment_record = $this->main_model->get_comments($rowperpage,$rowno,$cmnt);

	    $config['base_url'] = base_url().'blog/comment/'.$cmnt.'/';
	    $config['use_page_numbers'] = TRUE;
	    $config['total_rows'] = $allcount;
	    $config['per_page'] = $rowperpage;


	    $this->pagination->initialize($config);

	    $data['pagination'] = $this->pagination->create_links();
	    $data['result'] = $comment_record;
	    $data['row'] = $rowno;

	    echo json_encode($data);
	}
}

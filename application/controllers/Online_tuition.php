	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class online_tuition extends CI_Controller {
	function __construct()
	{
		parent::__construct();
			
		$this->load->model('main_model');
	}

	public function index()
	{
	    $data['res']=$this->main_model->online_tuition();
	    

	    $nav['page_title']=$data['res'][0]['title'];
		$nav['keywords_content']=$data['res'][0]['keywords_content'];
		$nav['description_content']=$data['res'][0]['description_content'];
		
		$this->load->library('pagination');
		$nav['active'] = 'tuition';

		// $data['posts'] = $this->main_model->get_posts();
		// print_r($data['posts']);

		$data['base_url'] = base_url().'tuition/index/';
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
		
		
		$this->load->view('user/pages/tuition', $data);
		$this->load->view('user/templates/footer');
	}
	
	public function subpage($page_title)
	{   
	    
		$data['res']=$this->main_model->subpage($page_title);
		$nav['page_title']=$data['res'][0]['title'];

		$nav['keywords_content']=$data['res'][0]['keywords_content'];
		$nav['description_content']=$data['res'][0]['description_content'];
		
		$this->load->library('pagination');
		$nav['active'] = 'tution';

		// $data['posts'] = $this->main_model->get_posts();
		// print_r($data['posts']);

		$data['base_url'] = base_url().'tution/index/';
		$data['total_rows'] = $this->db->get('blog')->num_rows();
		$data['per_page'] = 3;
		$data['num_links'] = 10;
		$this->db->order_by("created_at","desc");
		$data['records'] = $this->db->get('blog',$data['per_page'],$this->uri->segment(3))->result_array();

		$this->pagination->initialize($data);
		// print_r($data['records']);

		$data['posts_category'] = $this->main_model->get_category();
		$this->load->view('user/templates/header',$nav);
		$this->load->view('user/pages/subpage',$data);
		$this->load->view('user/templates/footer');
	}
	
	
	
	
	public function book_class()
	{
	    $data=$this->input->post();
	    $this->main_model->book_class_seo($data);
	    redirect('/online_tuition');
    }
}





// 	public function view($id = null)
// 	{
// 		$nav['active'] = 'blog';
// 		$data['post'] = $this->main_model->get_posts($id);
// 		$data['posts_category'] = $this->main_model->get_category();
// 		$data['popular_post'] = $this->main_model->get_popular_post();
// 		// $data['comments'] = $this->main_model->get_comment($id);
// 		$this->db->where('blog_id',$id);
// 		$data['total_rows'] = $this->db->get('blog_comments')->num_rows();
// 		$data['post_id'] = $id;
// 		// print_r($data['comments']);
// 		if(empty($data['post'])){
// 			$this->index();
// 		}
// 		// print_r($data['posts']);
// 		$this->load->view('user/templates/header',$nav);
// 		$this->load->view('user/pages/single_blog', $data);
// 		$this->load->view('user/templates/footer');
// 	}

// 	public function category($id,$cat)
// 	{
// 		$cat = rawurldecode($cat);
// 		$this->load->library('pagination');
// 		$nav['active'] = 'blog';

// 		// $data['posts'] = $this->main_model->get_posts();
// 		// print_r($data['posts']);

// 		$data['base_url'] = base_url().'blog/category/cat/'.$cat.'/';
// 		$this->db->where('category',$cat);
// 		$data['total_rows'] = $this->db->get('blog')->num_rows();
// 		$data['per_page'] = 3;
// 		$data['num_links'] = 10;
// 		$this->db->where('category',$cat);
// 		$this->db->order_by("created_at","desc");
// 		$data['records'] = $this->db->get('blog',$data['per_page'],$this->uri->segment(5))->result_array();

// 		$this->pagination->initialize($data);
// 		// print_r($data['records']);

// 		$data['posts_category'] = $this->main_model->get_category();
// 		$data['popular_post'] = $this->main_model->get_popular_post();


// 		$this->load->view('user/templates/header',$nav);
// 		$this->load->view('user/pages/blog', $data);
// 		$this->load->view('user/templates/footer');
// 	}

// 	public function search($id,$cat)
// 	{
// 		$cat = rawurldecode($cat);
// 		$this->load->library('pagination');
// 		$nav['active'] = 'blog';

// 		// $data['posts'] = $this->main_model->get_posts();
// 		// print_r($data['posts']);

// 		$data['base_url'] = base_url().'blog/search/tag/'.$cat.'/';
// 		$this->db->like('title',$cat);
// 		$data['total_rows'] = $this->db->get('blog')->num_rows();
// 		$data['per_page'] = 3;
// 		$data['num_links'] = 10;
// 		$this->db->like('title',$cat);
// 		$this->db->order_by("created_at","desc");
// 		$data['records'] = $this->db->get('blog',$data['per_page'],$this->uri->segment(5))->result_array();

// 		$this->pagination->initialize($data);
// 		// print_r($data['records']);

// 		$data['posts_category'] = $this->main_model->get_category();
// 		$data['popular_post'] = $this->main_model->get_popular_post();


// 		$this->load->view('user/templates/header',$nav);
// 		$this->load->view('user/pages/blog', $data);
// 		$this->load->view('user/templates/footer');
// 	}

// 	function post_comment(){

// 		echo $this->main_model->comment_post($this->input->post('id'),$this->input->post('message'));
// 	}

// 	function comment($rowno = 0,$cmnt)
// 	{
// 		$this->load->library('pagination');

// 	    $rowperpage = 4;


// 	    if($rowno != 0){
// 	      $rowno = ($rowno-1) * $rowperpage;
// 	    }
	 

// 	    $this->db->where('blog_id',$cmnt);
// 	    $allcount = $this->db->get('blog_comments')->num_rows();


// 	 	$comment_record = $this->main_model->get_comments($rowperpage,$rowno,$cmnt);

// 	    $config['base_url'] = base_url().'blog/comment/'.$cmnt.'/';
// 	    $config['use_page_numbers'] = TRUE;
// 	    $config['total_rows'] = $allcount;
// 	    $config['per_page'] = $rowperpage;


// 	    $this->pagination->initialize($config);

// 	    $data['pagination'] = $this->pagination->create_links();
// 	    $data['result'] = $comment_record;
// 	    $data['row'] = $rowno;

// 	    echo json_encode($data);
// 	}
// }

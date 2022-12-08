<?php

class Main_model extends CI_Model
{
	public function fetch_trainers(){
		$query = $this->db->get('trainers');
		return $query->result_array();
	}

	public function fetch_p_courses(){
		$this->db->where('popular', '1');
		$query = $this->db->get('courses');
		return $query->result_array();
	}

	public function fetch_banner(){
		$this->db->where('id', '1');
		$query = $this->db->get('banner');
		return $query->row()->img;
	}

	public function fetch_testi(){
		$query = $this->db->get('testimonials');
		return $query->result_array();
	}

	public function get_posts($id = FALSE){
		if($id == FALSE){
			$query = $this->db->get('blog');
			return $query->result_array();
		}

		$query = $this->db->get_where('blog', array('id' => $id));
		return $query->row_array();
	}

	public function get_category(){
		// $query = $this->db->get('post_categories');
		$query = $this->db->query("SELECT post_categories.category, COUNT( blog.id ) AS count FROM post_categories INNER JOIN blog ON post_categories.category=blog.category GROUP BY post_categories.category ORDER BY count DESC");
		return $query->result_array();
	}

	public function get_popular_post(){
		$query = $this->db->get_where('blog', array('popular' => '1'));
		return $query->result_array();
	}

	public function get_comment($id){

		$query = $this->db->get_where('blog_comments', array('blog_id' => $id));
		return $query->result_array();
	}

	public function comment_post($id,$message){
		$data = array('blog_id'=>$id,'comment'=>$message);
	 	if($this->db->insert('blog_comments',$data)){
	 		return "Comment Posted";
	 	}
	 	else{
	 		return "error";
	 	}
	}

	public function get_comments($rowperpage, $rowno,$cmnt){
		$this->db->select('*');
	    $this->db->from('blog_comments');
	    $this->db->where('blog_id',$cmnt);
	    $this->db->limit($rowperpage, $rowno);
		$this->db->order_by("created_at","desc");
		$query = $this->db->get();

		$output = '';

		foreach ($query->result() as $row) {
				$output .= '<div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a>'.$row->name.'</a></h5>
                                        <p class="date">'.$row->created_at.'</p>
                                        <p class="comment">
                                            '.$row->comment.'
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="#comment-form11" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>';
			}
		return $output;
	}

	public function get_all_courses($rowperpage, $rowno){
		$this->db->select('*');
	    $this->db->from('courses');
	    $this->db->limit($rowperpage, $rowno);
		$query = $this->db->get();

		$output = '<br><br>
                       <div class="main_title">
                          <h2 class="mb-3">Our Courses</h2>
                          <p>
                            Replenish man have thing gathering lights yielding shall you
                          </p>
                        </div>
                       <div class="row">';

		foreach ($query->result() as $row) {
				$output .= '<div class="single-trainer col-md-3 col-6" val="'.$row->id.'">
                                <div class="thumb d-flex justify-content-sm-center">
                                   <img class="img-fluid" src="'.base_url().$row->img.'" alt="" />
                                </div>
                                <div class="meta-text text-sm-center">
                                  <h4>'.$row->course_name.'</h4>
                                  <p class="designation">'.$row->category.'</p>
                                </div>
                              </div>';
			}
			$output .= '</div>';
		return $output;
	}


	public function get_course_category(){
		// $query = $this->db->get('post_categories');
		$query = $this->db->query("SELECT course_category.category, COUNT( courses.id ) AS count FROM course_category INNER JOIN courses ON course_category.category=courses.category GROUP BY course_category.category ORDER BY count DESC");
		return $query->result_array();
	}


	public function get_cat_courses($rowperpage, $rowno,$cat){
		$this->db->select('*');
	    $this->db->from('courses');
	    $this->db->where('category',$cat);
	    $this->db->limit($rowperpage, $rowno);
		$query = $this->db->get();

		$output = '<br><br>
                       <div class="main_title">
                          <h2 class="mb-3">Courses for '.$cat.'</h2>
                          <p>
                            Replenish man have thing gathering lights yielding shall you
                          </p>
                        </div>
                       <div class="row">';

		foreach ($query->result() as $row) {
				$output .= '<div class="single-trainer col-md-3 col-6" val="'.$row->id.'">
                                <div class="thumb d-flex justify-content-sm-center">
                                   <img class="img-fluid" src="'.base_url().$row->img.'" alt="" />
                                </div>
                                <div class="meta-text text-sm-center">
                                  <h4>'.$row->course_name.'</h4>
                                  <p class="designation">'.$row->category.'</p>
                                </div>
                              </div>';
			}
			$output .= '</div>';
		return $output;
	}

	public function get_downloads_category($cat){

		$query = $this->db->query('SELECT download_category.category, COUNT( downloads.id ) AS count FROM download_category INNER JOIN downloads ON download_category.category=downloads.category WHERE downloads.type="'.$cat.'" GROUP BY download_category.category ORDER BY count DESC');

		$output='<div class="container">
        
        <div class="row d-flex justify-content-center">';
		
		foreach ($query->result() as $row) {
				$output .= '<div class="col-lg-2 col-4">
            <div class="single_feature secondClick" val="'.$row->category.'">
              <div class="desc">
                <h6>'.$row->category.'</h6>
              </div>
            </div>
          </div>';
			}
			$output .= '</div>';

		return $output;

	}

	public function get_downloads_view($type,$cat){

		$array = array('type' => $type, 'category' => $cat);
		$this->db->where($array);
		$query = $this->db->get('downloads');

		$output='<div class="container">
        
        <div class="row d-flex justify-content-center">
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Download</th>
            </tr>
          </thead>
          <tbody>';
		$temp = 1;
		foreach ($query->result() as $row) {
				$output .= '<tr>
              <th scope="row">'.$temp.'</th>
              <td>'.$row->title.'</td>
              <td><a href="'.base_url().$row->url.'" download><i class="ti-download"></i>  Download</a></td>
            </tr>';
            $temp = $temp + 1;
			}
			$output .= '</tbody>
        </table>

  
        </div>
      </div>';

		return $output;
	}

}
 
?>
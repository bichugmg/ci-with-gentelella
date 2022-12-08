<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            
            $this->load->model("admin_model");
	   // redirect("https://maintenance.teaminterval.in/index.php");
        }
    
    public function index()
    {
        redirect("https://quiz.teaminterval.in/");
    }
    
    
    public function phaunus()
    {
        redirect("https://quiz.teaminterval.in/");
    }
}
?>
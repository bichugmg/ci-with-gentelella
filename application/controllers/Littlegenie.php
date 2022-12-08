<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Littlegenie extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            
            $this->load->model("admin_model");
	   // redirect("https://maintenance.teaminterval.in/index.php");
        }
    
    public function index()
    {
        redirect("https://teaminterval.in/");
    }
    
    public function trainer()
    {
        redirect("https://forms.gle/yqfEdVRAkeNapPZ38");
    }
    
    public function brochure()
    {
        redirect("https://teaminterval.in/assets/users/uploads/brochure/little_genie_brochure.pdf");
    }
    
    public function admission()
    {
        redirect("https://forms.gle/Z6uLTx4i2odFxizh9");
    }
}
?>
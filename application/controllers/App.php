<?php
defined("BASEPATH") or exit("No direct script access allowed");

class App extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("App_model");
        // redirect("https://maintenance.teaminterval.in/index.php");
    }
    public function index()
    {
        $this->login();
    }
    public function login()
    {
        $this->load->view("portal/login");
    }

    public function login_check()
    {
        // print_r($_POST);
        $username = $this->input->post("user_name");
        $password = $this->input->post("user_pwd");
        $data = $this->App_model->login($username, $password);
        if ($data["count"] > 0) {
            $type = $data["data"]->usertype_id;
            $the_session = [
                "user_type" => $type,
                "user_name" => $username,
            ];
            $this->session->set_userdata($the_session);

            // print_r($data);
            redirect("/app/home", "refresh");

            // print_r($data);
        } else {
            echo "<script>alert('Invalid Login Credentials');";
            redirect(base_url());

            // $this->login();
        }
        // print_r($data);
    }
 
    public function home()
    {
        
        if ($this->session->userdata("user_type") == 1) {
            $this->load->view("portal/admin/templates/header");
            $this->load->view("portal/admin/pages/home");
            $this->load->view("portal/admin/templates/footer");
        } else {
            if ($this->session->userdata("user_type") == 2) {
                $this->load->view("portal/traiiner/templates/header");
                $this->load->view("portal/trainer/pages/home");
                $this->load->view("portal/trainer/templates/footer");
            } else {
                echo "<script>alert('Invalid Login Credentials');";
                // $this->login();	 `
            }
        }
    }

    public function new_admission()
    {   
        $head=['sec'=>'student','sub'=>'add_s'];
        if ($this->session->userdata("user_type") == 1) {
            $this->load->view("portal/admin/templates/header",$head);
            $this->load->view("portal/admin/pages/new_student");
            $this->load->view("portal/admin/templates/footer");
        } else {
            echo "<script>alert('Admin privilage is needed!');</script>";
            redirect(base_url());
        }
    }

    public function add_student()
    {
        $postdata = $this->input->post();
        if ($postdata["age"] > 18) {
            $indata["category"] = "Adult";
           
        }
        unset($postdata["age"]);
        foreach ($postdata as $key => $value) {
            if (!empty($value)) {
                echo $key . "=>" . $value;
                if ($key == "c1" ||$key == "c2" || $key == "c3" ||$key == "c4") {
                    $courses[$key] = $value;
                } 
				else{
                    if ($key == "trans") {
                        $indata["trans"] = 1;
                    } 
					else {
                        $indata[$key] = $value;
                    }
                }
            }

            // if(empty($postdata['school']))
            // {
            // 	echo "c1 set";
            // }
        }
        $sid = $this->App_model->insertStudent($indata);
        $this->enroll($sid,$courses);
        
        // redirect("https://localhost/portal/app/new_admission");
        // echo "<script>alert('Success');window.location.replace('".base_url()."app/new_admission');</script>";

    }
    public function enroll($sid,$c)
    {
        foreach($c as $a)
        {
            $res=$this->App_model->enroll($sid,$a);
        }
    }
    public function enrollment()
    {
        $head=['sec'=>'student','sub'=>'enr_s'];

        if ($this->session->userdata("user_type") == 1) {
            $out["data"] = $this->App_model->listEnrl();
            $this->load->view("portal/admin/templates/header",$head);
            $this->load->view("portal/admin/pages/enroll", $out);
            $this->load->view("portal/admin/templates/footer_table");
        } else {
            echo "<script>alert('Admin privilage is needed!');</script>";
            redirect(base_url());
        }
    }

    public function studentlist()
    {   
        $head=['sec'=>'student','sub'=>'view_s'];
        if ($this->session->userdata("user_type") == 1) {
        $out["data"] = $this->App_model->listStudents();
        $this->load->view("portal/admin/templates/header",$head);
        $this->load->view("portal/admin/pages/student_list", $out);
        $this->load->view("portal/admin/templates/footer_table");
        } else {
            echo "<script>alert('Admin privilage is needed!');</script>";
            redirect(base_url());
        }
    }

    public function student_detail()
    {
        $head=['sec'=>'student','sub'=>'view_s'];
        $postdata=$this->input->post();
        $out['data']=$this->App_model->studentInfo($postdata['std_id']);
        $out['enrollment']=$this->App_model->enrolledCourses($postdata['std_id']);
        $this->load->view("portal/admin/templates/header",$head);
        $this->load->view("portal/admin/pages/student_detail", $out);
        $this->load->view("portal/admin/templates/footer_table");

    }

}

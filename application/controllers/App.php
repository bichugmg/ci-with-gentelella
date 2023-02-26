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



    /*****************************************************************************************/
    /*************************              Login           **********************************/
    /*****************************************************************************************/
    
    public function login()
    {
        $this->load->view("portal/login");
    }


    public function logout()
    {
        if(empty($this->session->userdata))
            redirect(base_url());
        $this->session->sess_destroy();
        redirect(base_url());

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
            if($type==2)
                $the_session['profile']=$this->App_model->getProfile($data["data"]->user_id);
            
            $this->session->set_userdata($the_session);

            // print_r($data);
            redirect("/app/home", "refresh");
            // print_r($this->session->userdata['profile'][0]['c_id']);

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
        if(empty($this->session->userdata))
            redirect(base_url());

        
        if ($this->session->userdata("user_type") == 1) {
            
            $data=$this->App_model->getDocs();
            $hdata['not_count']=0;
            foreach($data as $doc)
            {   
                if($doc['status']=="expired")
                    {
                        $hdata['not_count']++;
                        $hdata['not'][$hdata['not_count']]=$doc['doc_name']." is EXPIRED !!!";

                    }
                    else{
                $to=new DateTime($doc['valid_to']);
                $today=new DateTime();
                $rem=$today->diff($to);
                if($rem->m==0&&$rem->d==0){
                    $doc['status']="expired";
                    $this->App_model->updateDocStatus($doc);
                    $hdata['not_count']++;
                    $hdata['not'][$hdata['not_count']]=$doc['doc_name']." is EXPIRED !!!";
                }
                elseif($rem->m==0&&$rem->d>0){
                    $doc['status']="expire soon";
                    $this->App_model->updateDocStatus($doc);
                    $hdata['not_count']++;
                    $hdata['not'][$hdata['not_count']]=$doc['doc_name']." will EXPIRE SOON !!!";
                }
            }
                

            }
            $this->session->userdata['hdata']=$hdata;
            $this->load->view("portal/admin/templates/header");
            $this->load->view("portal/admin/pages/home");
            $this->load->view("portal/admin/templates/footer");
        } else {
            if ($this->session->userdata("user_type") == 2) {
                $this->load->view("portal/trainer/templates/header");
                $this->load->view("portal/trainer/pages/home");
                $this->load->view("portal/trainer/templates/footer");
            } else {
                echo "<script>alert('Invalid Login Credentials');";
                // $this->login();	 `
            }
        }
    }


    /*****************************************************************************************/
    /*************************           Admission          **********************************/
    /*****************************************************************************************/

    public function new_admission()
    {   
        if(empty($this->session->userdata))
            redirect(base_url());
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
        if(empty($this->session->userdata))
            redirect(base_url());
        $postdata = $this->input->post();
        if ($postdata["age"] > 18) {
            $indata["category"] = "Adult";
           
        }
        unset($postdata["age"]);
        foreach ($postdata as $key => $value) {
            if (!empty($value)) {
                // echo $key . "=>" . $value;
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

        }
        $sid = $this->App_model->insertStudent($indata);
        $this->enroll($sid,$courses);
            
    }   



    /*****************************************************************************************/
    /*************************       Enroll / Dienroll      **********************************/
    /*****************************************************************************************/
    
    public function newEnroll()
    {
        if(empty($this->session->userdata))
            redirect(base_url());
        $postdata=$this->input->post();
        foreach ($postdata as $key => $value) {
            if (!empty($value)) {
                // echo $key . "=>" . $value;
                if ($key == "c1" ||$key == "c2" || $key == "c3" ||$key == "c4") {
                    $courses[$key] = $value;
                } 
                if($key=="std_id")
                {    $sid=$value;}
                
            }
        }
        $this->enroll($sid,$courses);

    }

    public function enroll($sid,$c)
    {
        
        if(empty($this->session->userdata))
            redirect(base_url());foreach($c as $a)
        {
            $res=$this->App_model->enroll($sid,$a);
        }
        $this->new_admission();
    }
    public function enrollment()
    {
        if(empty($this->session->userdata))
            redirect(base_url());
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
        if(empty($this->session->userdata))
            redirect(base_url());  
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



    public function new_enrollment()
    {
        if(empty($this->session->userdata))
            redirect(base_url());
        $head=['sec'=>'student','sub'=>'enr_s'];
        $out['data']=$this->App_model->enrolledCourses($this->input->post('std_id'));
        $out['std_id']=$this->input->post('std_id');
        // print_r($out['data']);
        $this->load->view("portal/admin/templates/header",$head);
        $this->load->view("portal/admin/pages/new_enrollment",$out);
        $this->load->view("portal/admin/templates/footer");
    }


    public function disenrollment()
    {
        if(empty($this->session->userdata))
            redirect(base_url());
        $head=['sec'=>'student','sub'=>'enr_s'];
        $out['data']=$this->App_model->enrolledCourses($this->input->post('std_id'));
        $out['std_id']=$this->input->post('std_id');


    }

    




    /*****************************************************************************************/
    /*************************             View Student     **********************************/
    /*****************************************************************************************/



    public function student_detail()
    {
        if(empty($this->session->userdata))
            redirect(base_url());
        $head=['sec'=>'student','sub'=>'view_s'];
        $postdata=$this->input->post();
        $out['data']=$this->App_model->studentInfo($postdata['std_id']);
        $out['enrollment']=$this->App_model->enrolledCourses($postdata['std_id']);
        $this->load->view("portal/admin/templates/header",$head);
        $this->load->view("portal/admin/pages/student_detail", $out);
        $this->load->view("portal/admin/templates/footer_table");

    }



    public function list_student_t()
    {
        if(empty($this->session->userdata))
            redirect(base_url());
        
        $out['data']=$this->App_model->getStudents($this->session->userdata['profile'][0]['c_id']);
        // print_r($out['data']);
        $head=['sec'=>'student','sub'=>'view_s'];
        $this->load->view("portal/trainer/templates/header",$head);
        $this->load->view("portal/trainer/pages/student_list",$out);
        $this->load->view("portal/trainer/templates/footer_table");
    }

    public function coursewise()
    {
        $head=['sec'=>'student','sub'=>'view_s'];
        $this->load->view("portal/admin/templates/header",$head);
        $this->load->view("portal/admin/pages/coursewise_list");
        $this->load->view("portal/admin/templates/footer_table");
    }


    /*****************************************************************************************/
    /*************************           Attendance         **********************************/
    /*****************************************************************************************/


    public function mark_attendance()
    {
        if(empty($this->session->userdata))
            redirect(base_url());
        
        $out['data']=$this->App_model->getStudents($this->session->userdata['profile'][0]['c_id']);
        $head=['sec'=>'attendance','sub'=>'mark'];
        $this->load->view("portal/trainer/templates/header",$head);
        $this->load->view("portal/trainer/pages/attendance",$out);
        $this->load->view("portal/trainer/templates/footer_table");
    }
    
    public function upload_attendance()
    {   
        if(empty($this->session->userdata))
            redirect(base_url());
        $postdata=$this->input->post();
        $indata['day']=$postdata['day'];
        $indata['date']=$postdata['date'];
        unset ($postdata['day']);
        unset ($postdata['date']);
        // $indata['month']=intval(date("m"));
        $indata['month']=1;
        $indata['year']=2023;
        foreach($postdata as $key=>$value)
            if(!empty($key))
                {
                    $indata['std_id']=$key;
                    $indata['c_id']=$this->session->userdata['profile'][0]['c_id'];
                    echo json_encode($indata);
                    $res=$this->App_model->mark_attendance($indata);

     
                }
         redirect(base_url('app/home'));
    }


    public function view_attendance()
    {
        if(empty($this->session->userdata))
            redirect(base_url());
        $out['data']=$this->App_model->getStudents($this->session->userdata['profile'][0]['c_id']);
        $head=['sec'=>'attendance','sub'=>'view'];
        $this->load->view("portal/trainer/templates/header",$head);
        $this->load->view("portal/trainer/pages/view_at",$out);
        $this->load->view("portal/trainer/templates/footer_table");   
    }

    public function at_detail()
    {
        if(empty($this->session->userdata))
            redirect(base_url());
    
        $postdata=$this->input->post();
        $head=['sec'=>'attendance','sub'=>'view'];
        $out['std_id']=$postdata['std_id'];
        if(!isset($postdata['month']))
            $out['data']=$this->App_model->get_at($postdata['std_id']);
        else{
            $out['data']=$this->App_model->get_at_search($postdata);
            switch ($postdata['month']) {
                case '1':$out['month']="January";break;
                case '2':$out['month']="Febrary";break;
                case '3':$out['month']="March";break;
                case '4':$out['month']="April";break;
                case '5':$out['month']="May";break;
                case '6':$out['month']="June";break;
                case '7':$out['month']="July";break;
                case '8':$out['month']="August";break;
                case '9':$out['month']="September";break;
                case '10':$out['month']="October";break;
                case '11':$out['month']="November";break;
                case '12':$out['month']="Decembar";break;
            }
            switch ($postdata['year']) {
                case '2022':$out['year']=2022;break;
                case '2023':$out['year']=2023;break;
                case '2024':$out['year']=2024;break;
                case '2025':$out['year']=2025;break;
            }
        }
        $this->load->view("portal/trainer/templates/header",$head);
        $this->load->view("portal/trainer/pages/at_detail",$out);
        $this->load->view("portal/trainer/templates/footer_table"); 
        // print_r($out);  

    }

    /*****************************************************************************************/
    /*****************************         Documents        **********************************/
    /*****************************************************************************************/
    public function docs_menu()
    {
        if(empty($this->session->userdata))
        redirect(base_url());
        $head=['sec'=>'Docs','sub'=>'upload'];
        $this->load->view("portal/admin/templates/header",$head);
        $this->load->view("portal/admin/pages/docs");
        $this->load->view("portal/admin/templates/footer_table"); 
        
    }
    public function docs_upload()
    {
        if($this->input->post('upload') != NULL ){ 
            $data = array(); 
        if(!empty($_FILES['file']['name'])){ 
            // Set preference 
            $config['upload_path'] = 'uploads/documents'; 
            $config['allowed_types'] = 'jpg|jpeg|png|pdf'; 
            $config['overwrite'] = TRUE;
            $config['max_size'] = '5000'; // max_size in kb 
            $config['file_name'] = $this->input->post('filename');  
            
            $from=new DateTime($this->input->post('from'));  
            $to=new DateTime($this->input->post('to')); 
            $today=new DateTime(); 
            $rem =$today->diff($to);
            $indata['valid_from']=$this->input->post('from');
            $indata['valid_to']=$this->input->post('to');



            // Load upload library 
            $this->load->library('upload',$config); 
      
            // File upload
            if($this->upload->do_upload('file')){ 
               // Get data about the file
               $uploadData = $this->upload->data(); 
               $filename = $uploadData['file_name']; 
               echo "<script>alert('successfully uploaded ');</script>"; 
               
            if($rem->m>0)
                $indata['status']="active";
            elseif($rem->m==0&&$rem->d>0)
                $indata['status']="expire soon";
            else
                $indata['status']="expired";
                // echo "from  : ".$from."\n"."to   : ".$to." rem    =";
                $this->App_model->upload_doc($indata,$this->input->post('filename'));
               echo "days";
               print_r( $rem->d);
               echo "months";
               print_r($rem->m);
               echo "status";
               print_r($indata['status']);

            }
            else
                echo "<script>alert(' Upload failed');</script>"; 
         }else{ 
            echo "<script>alert('Upload failed');</script>"; 
         } 
         // load view 
         $this->docs_menu();
      }else{ 
         // load view 
         $this->docs_menu();
      
    
      }
    }

    public function docs_view()
    {
        if(empty($this->session->userdata))
        redirect(base_url());
        $head=['sec'=>'Docs','sub'=>'view'];
        $this->load->view("portal/admin/templates/header",$head);
        $this->load->view("portal/admin/pages/view_doc");
        $this->load->view("portal/admin/templates/footer"); 
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Robotics extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('robotics_model');
		if ($_POST) {
			$regs = array(
				'name' => $this->input->post('name'),
				'mobile' => $this->input->post('mobile'),
				'dob' => $this->input->post('dob'),
				'school' => $this->input->post('school'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
			//print_r($regs);
			$id = $this->robotics_model->reg($regs);
			if ($id > 0) {
				echo "<script>alert('Registration Sucessful.');window.location.href = '" . base_url() . "robotics/quiz" . "';</script>";

				$the_session = array(
					"student_id" => $id,
					"full_name" => $this->input->post('name')
				);
				$this->session->set_userdata($the_session);
			}
		} else {
			$this->load->view('robotics/registration');
		}
	}
	public function quiz()
	{
		$id = $this->session->userdata('student_id');
		$this->load->model('robotics_model');
		$datax['data'] = $this->robotics_model->getreq();
		if ($_POST) {
			$res = $this->input->post('score');
			$res = $res . substr(0, 15);
			// print_r($res);
			$len = 15;

			for ($i = 0, $j = 1; $i <= $len; ++$i, $j++)
				$data[$i]['ans' . $j] = $res[$i];


			$data = $this->robotics_model->results($res);
			$n = 1;
			$m = 0;
			$score = 0;
			foreach ($data as $t) {
				$resp['ans' . $n] = $res[$m];
				if ($res[$m] == $t->answer) {
					$score++;
				}
				$n++;
				$m++;
			}
			//$scores = array('score' => $score);
			$resp['score'] = $score;
			$this->robotics_model->add_score($id, $resp);
			echo "<script>alert('Thank you for attending the quiz.');window.location.href = '" . "/home/index" . "';</script>";
		} else {
			$this->load->view('robotics/quiz_qs', $datax);
		}
	}
}

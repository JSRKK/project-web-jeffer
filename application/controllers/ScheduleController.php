<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ScheduleController extends CI_Controller {

	public function index()
	{		
		$this->load->view('schedule_view');
	}

	public function insert_schedule(){
		$this->load->model('ScheduleModel');
		$session_data =  $this->session->userdata('loged_in');

		$date = $this->input->post('time_start');
		$dateMin = date('d-m-Y',strtotime('+3 day'));	
		$dateMax = date('d-m-Y',strtotime('+9 day'));
		
		if($date >= $dateMin AND date($date) <= $dateMax){
			$check = $this->ScheduleModel->check_duplicate($session_data['userId']);

			if($check === true){
				$this->ScheduleModel->insert_data($session_data['userId']);
				$this->session->set_flashdata('success','success');
			}
			else{
				$this->session->set_flashdata('error','error');
			}
		}
		else{
			if($date < $dateMin){
				$this->session->set_flashdata('lessDate','lessDate');
			}
			else{
				$this->session->set_flashdata('overDate','overDay');
			}
		}

		redirect('ScheduleController');				
	}
}

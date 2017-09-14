<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ScheduleController extends CI_Controller {


	public function index()
	{		
		$this->load->view('schedule_view');
	}

	public function insert_schedule(){
		$this->load->model('ScheduleModel');
		$date = $this->input->post('time_start');
		$dateMin = date('d-m-Y',strtotime('+3 day'));	
		$dateMax = date('d-m-Y',strtotime('+9 day'));
		if($date >= $dateMin AND date($date) <= $dateMax){
			$check = $this->ScheduleModel->check_duplicate();		
			if($check === true){
				$this->ScheduleModel->insert_data();
				$this->session->set_flashdata('success','success');
				redirect('ScheduleController');
			}else{
				$this->session->set_flashdata('error','error');
				redirect('ScheduleController');
			}
		}else{
			if($date < $dateMin){
				$this->session->set_flashdata('lessDate','lessDate');
				redirect('ScheduleController');
			}else{
				$this->session->set_flashdata('overDate','overDay');
				redirect('ScheduleController');
			}
		}
		
	}
}

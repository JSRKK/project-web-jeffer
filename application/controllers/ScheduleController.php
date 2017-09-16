<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ScheduleController extends CI_Controller {

	public $data = array();

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
				$data[] = array(
					'title' => 'Success!',
					'text' => 'ลงตารางเวลางานเรียบร้อย!',
					'type' => 'success',
					'styling' => 'bootstrap3'
				);	
			}
			else{
				$this->session->set_flashdata('error','error');
				$data[] = array(
					'title' => 'Error!',
					'text' => 'ไม่สามารถลงตารางเวลางานซ้ำได้!',
					'type' => 'error',
					'styling' => 'bootstrap3'
				);
			}
		}
		else{
			if($date < $dateMin){
				$this->session->set_flashdata('lessDate','lessDate');
				$data[] = array(
					'title' => 'Error!',
					'text' => 'ไม่สามารถลงตารางเวลางานย้อนหลังได้!',
					'type' => 'error',
					'styling' => 'bootstrap3'
				);
			}
			else{
				$this->session->set_flashdata('overDate','overDay');
				$data[] = array(
					'title' => 'Error!',
					'text' => 'ไม่สามารถลงตารางเวลางานเกินกำหนดได้!',
					'type' => 'error',
					'styling' => 'bootstrap3'
				);
			}
		}
		$dataShow['data'] = $data;
		$this->load->view('schedule_view', $dataShow);			
	}
}

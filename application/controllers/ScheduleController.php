<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ScheduleController extends CI_Controller {


	public function index()
	{		
		$this->load->view('schedule_view');
	}

	public function insert_schedule(){
		$this->load->model('ScheduleModel');
		$this->ScheduleModel->insert_data();
		redirect('ScheduleController');
	}
}

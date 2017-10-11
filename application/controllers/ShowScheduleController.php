<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowScheduleController extends CI_Controller {


	public function index()
	{	
		$this->load->model('ShowScheduleModel');
		$session_data =  $this->session->userdata('loged_in');
		$datas = $this->ShowScheduleModel->get_data($session_data['userId']);
		foreach ($datas as $row){
			$startDate = date("H:i", strtotime($row['SCHEDULE_START']));
			$endDate = date("H:i", strtotime($row['SCHEDULE_END']));
			$hour = (strtotime($row['SCHEDULE_END']) - strtotime($row['SCHEDULE_START']))/3600;
			if($hour > 8){
				$hour -= 1;
			}

			$data[] = array(
			'title' => $startDate." - ".$endDate." (".$hour." ชั่วโมง)",			
			'start' => $row['SCHEDULE_DATE']." ".$row['SCHEDULE_START'],			
			'end' => $row['SCHEDULE_DATE']." ".$row['SCHEDULE_END'],			
		 	);	
		}	
		if(empty($data)){
			$data = null;
		}
		$dataShow['events'] = $data;
		$this->load->view('show_schedule_view', $dataShow);
	}
}

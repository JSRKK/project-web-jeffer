<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowScheduleController extends CI_Controller {


	public function index()
	{	
		$this->load->model('ShowScheduleModel');
		$datas = $this->ShowScheduleModel->get_data();
		foreach ($datas as $row){
			$data[] = array(
			'title' => $row['SCHEDULE_START']." - ".$row['SCHEDULE_END'],			
			'start' => $row['SCHEDULE_DATE']." ".$row['SCHEDULE_START'],			
			'end' => $row['SCHEDULE_DATE']." ".$row['SCHEDULE_END'],			
		 	);	
		}
		$dataShow['events'] = $data;
		$this->load->view('show_schedule_view', $dataShow);
	}
}

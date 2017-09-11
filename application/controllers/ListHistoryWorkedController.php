<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListHistoryWorkedController extends CI_Controller {


	public function index()
	{	
		$this->load->model('ListHistoryWorkedModel');
		$datas = $this->ListHistoryWorkedModel->get_all();
		foreach ($datas as $row){
				$data1[] = array(
				'working_date' => $row['WORKING_DATE'],
				'working_start' => $row['WORKING_START'],
				'working_end' => $row['WORKING_END']
			 );	
		}
		$datas = $this->ListHistoryWorkedModel->get_holiday();
		foreach ($datas as $row){
				$data2[] = array(
				'working_date' => $row['WORKING_DATE'],
				'working_start' => $row['WORKING_START'],
				'working_end' => $row['WORKING_END'],
				'working_detail' => $row['HOLIDAY_DETAIL']				
			 );	
		}
		$dataShow['worked1'] = $data1;
		$dataShow['worked2'] = $data2;
		$this->load->view('list_history_worked_view',$dataShow);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListHolidayController extends CI_Controller {

	
	public function index()
	{
		$this->load->model('ListHolidayModel');
		$years = $this->ListHolidayModel->get_year();
		foreach ($years as $row){
			$year[] = array(
			'holiday_year' => $row['year'],			
		 	);	
		}
		$datas = $this->ListHolidayModel->get_data($year[0]['holiday_year']);
		foreach ($datas as $row){
				$data[] = array(
				'holiday_date' => $row['HOLIDAY_DATE'],
				'holiday_detail' => $row['HOLIDAY_DETAIL']
			 );	
		}
		$dataShow['years'] = $year;
		$dataShow['holidays'] = $data;
		$this->load->view('list_holiday_view',$dataShow);
	}
}

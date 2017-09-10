<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListHolidayController extends CI_Controller {

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
		$this->load->model('ListHolidayModel');
		$years = $this->ListHolidayModel->get_year();
		foreach ($years as $row){
			$year[] = array(
			'holiday_year' => $row['year'],			
		 	);	
		}
		$temp = '2017';
		$datas = $this->ListHolidayModel->get_data($temp);
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

	public function get_holiday(){
		$this->load->model('ListHolidayModel');
		$datas = $this->ListHolidayModel->get_data($temp);
		foreach ($datas as $row){
				$data[] = array(
				'holiday_date' => $row['HOLIDAY_DATE'],
				'holiday_detail' => $row['HOLIDAY_DETAIL']
			 );	
		}
	}
}

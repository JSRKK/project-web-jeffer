<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListSalaryController extends CI_Controller {


	public function index()
	{	
		$session_data =  $this->session->userdata('loged_in');	
        $this->load->model('ListSalaryModel');
        $datas = $this->ListSalaryModel->get_data($session_data['userId']);
        foreach ($datas as $row){
			$data[] = array(
			'salary_date' => date("d-m-Y", strtotime($row['SALARY_DATE']))				
		 	);	
		}
		if(empty($data)){
			$data = null;
		}
        $dataShow['date'] = $data;
		$this->load->view('list_salary_view', $dataShow);
	}
}

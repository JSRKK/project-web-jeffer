<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryController extends CI_Controller {


	public function index()
	{		
		$this->load->model('SalaryModel');
		$datas = $this->SalaryModel->get_data();
		foreach ($datas as $row){
			$data[] = array(
			'emp_id' => $row['EMP_ID'],
			'full_name' => $row['EMP_TNAME']."  ".$row['EMP_FNAME']."  ".$row['EMP_LNAME'],					
			'account' => $row['EMP_ACCOUNT'],			
			'type' => $row['EMP_TYPE'],			
			'rank' => $row['RANK_NAME']			
		 	);	
		}
		$datas = $this->SalaryModel->get_salary();
		foreach ($datas as $row){
			$salary[] = array(
			'date' => date("d/m/Y", strtotime($row['date'])),			
			'ot1' => $row['ot1'],			
			'ot2' => $row['ot2'],			
			'ot2' => $row['ot2'],			
			'diligence' => $row['diligence'],			
			'bonus' => $row['bonus'],			
			'income' => $row['income'],			
			'insurance' => $row['insurance'],			
			'mulct' => $row['mulct'],			
			'quota' => $row['quota'],			
			'total' => $row['total'],			
		 	);	
		}
		$dataShow['employee'] = $data;
		$dataShow['salary'] = $salary;		
		$this->load->view('salary_view', $dataShow);
	}
}

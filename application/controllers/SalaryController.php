<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryController extends CI_Controller {


	public function index()
	{		
		$this->load->model('SalaryModel');
		$hours = $this->SalaryModel->get_hour();
		$datas = $this->SalaryModel->get_data();
		$temp = 0;
		foreach ($datas as $row){
			if($row['EMP_TYPE'] == "F"){
				$temp = $row['EMP_SALARY'];
			}
			else{
				$temp = $row['EMP_SALARY'] * $hours[0]['sum_hour'];
			}		
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
			'diligence' => $row['diligence'],			
			'bonus' => $row['bonus'],					
			'insurance' => $row['insurance'],			
			'holiday_pay' => $row['holiday_pay'],			
			'late_pay' => $row['late_pay'],	
			'other_pay' => $row['other_pay'],						
			'total' => $temp,
			'income_all' => $row['ot1']	+ $row['ot2'] +	$row['diligence'] + $row['bonus'] + $temp,
			'pay_all' =>	$row['insurance'] + $row['holiday_pay'] + $row['late_pay'] + $row['other_pay']
		 	);	
		}
		$dataShow['hour'] = $hours;
		$dataShow['employee'] = $data;
		$dataShow['salary'] = $salary;		
		$this->load->view('salary_view', $dataShow);
	}
}

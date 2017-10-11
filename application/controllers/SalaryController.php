<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryController extends CI_Controller {


	public function index()
	{		
		$dataShow = $this->get_data_employee();
		$this->load->view('salary_view', $dataShow);
	}

	public function get_data_employee(){
		$this->load->model('SalaryModel');
		$session_data =  $this->session->userdata('loged_in');
		$date = $this->input->get('salary_date');

		$hours = $this->SalaryModel->get_hour($session_data['userId'], $date);
		$datas = $this->SalaryModel->get_data($session_data['userId']);
		$temp = 0;
		foreach ($datas as $row){
			if($row['EMP_TYPE'] === "F"){
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
		$datas = $this->SalaryModel->get_salary($session_data['userId'], $date);
		foreach ($datas as $row){
			$salary[] = array(
			'date' => date("d/m/Y", strtotime($row['date'])),			
			'ot1' => $row['ot1'],			
			'ot2' => $row['ot2'],						
			'diligence' => $row['diligence'],			
			'insurance' => $row['insurance'],			
			'holiday_pay' => $row['holiday_pay'],			
			'late_pay' => $row['late_pay'],	
			'other_pay' => $row['other_pay'],						
			'total' => $temp,
			'income_all' => $row['ot1']	+ $row['ot2'] +	$row['diligence'] + $temp,
			'pay_all' =>	$row['insurance'] + $row['holiday_pay'] + $row['late_pay'] + $row['other_pay']
		 	);	
		}
		$dataShow['hour'] = $hours;
		$dataShow['employee'] = $data;
		$dataShow['salary'] = $salary;
		
		return $dataShow;
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordController extends CI_Controller {

	public $data = array();
	
	public function index()
	{	
		$sess_array = $this->session->userdata('loged_in');	
		$this->load->view('password_view');
	}

	public function change_password(){
		$id = $this->input->post('username');
		$password = $this->input->post('oldPassword');
		$session_data =  $this->session->userdata('loged_in');
		
		if($session_data['userId'] !== $id){
			$this->session->set_flashdata('idNull','idNull');
			$data[] = array(
				'title' => 'Username Error!',
				'text' => 'รหัสผู้ใช้งานไม่ถูกต้อง!',
				'type' => 'error',
				'styling' => 'bootstrap3'
			);				
		}
		else if($session_data['password'] !== $password){
			$this->session->set_flashdata('passwordNull','passwordNull');
			$data[] = array(
				'title' => 'Password Error!',
				'text' => 'รหัสผ่านไม่ถูกต้อง!',
				'type' => 'error',
				'styling' => 'bootstrap3'
			);
		}
		else if($this->input->post('oldPassword') === $this->input->post('newPassword')){
			$this->session->set_flashdata('duplicate','duplicate');
			$data[] = array(
				'title' => 'Password Error!',
				'text' => 'ไม่สามารถเปลี่ยนรหัสผ่านซ้ำกับของเดิมได้!',
				'type' => 'warning',
				'styling' => 'bootstrap3'
			);
		}
		else{
			$this->load->model('PasswordModel');
			$this->PasswordModel->update_password();
			$this->PasswordModel->update_session();
			$this->session->set_flashdata('success','success');
			$data[] = array(
				'title' => 'Change password Success!',
				'text' => 'เปลี่ยนรหัสผ่านเรียบร้อย!',
				'type' => 'success',
				'styling' => 'bootstrap3'
			);
		}
		$dataShow['data'] = $data;
		$this->load->view('password_view', $dataShow);
	}	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordController extends CI_Controller {


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
			$this->session->set_flashdata('idNull','รหัสผู้ใช้งานไม่ถูกต้อง!');					
		}
		else if($session_data['password'] !== $password){
			$this->session->set_flashdata('passwordNull','รหัสผ่านไม่ถูกต้อง!');
		}
		else if($this->input->post('oldPassword') === $this->input->post('newPassword')){
			$this->session->set_flashdata('duplicate','ไม่สามารถเปลี่ยนรหัสผ่านซ้ำกับของเดิมได้!');
		}
		else{
			$this->load->model('PasswordModel');
			$this->PasswordModel->update_password();
			$this->session->set_flashdata('success','เปลี่ยนรหัสผ่านเรียบร้อย!');
		}

		redirect('PasswordController');
	}
	
}

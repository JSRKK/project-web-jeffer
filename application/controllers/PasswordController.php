<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordController extends CI_Controller {


	public function index()
	{		
		$this->load->view('password_view');
	}

	public function change_password(){
		$this->load->model('PasswordModel');
		$datas = $this->PasswordModel->change_password();
		if(count($datas) > 0){
			if($datas[0]['id'] === null){
				$this->session->set_flashdata('idNull','idNull');				
			}
			else if($datas[0]['password'] === null){
				$this->session->set_flashdata('passwordNull','passwordNull');
			}
			else if($this->input->post('oldPassword') === $this->input->post('newPassword')){
				$this->session->set_flashdata('duplicate','duplicate');
			}
			else{
				$this->PasswordModel->update_password();
				$this->session->set_flashdata('success','success');
			}
		}
		else{
			$this->session->set_flashdata('error','error');
		}
		redirect('PasswordController');
	}
	
}

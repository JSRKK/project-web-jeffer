<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()
	{		        
		$this->load->view('login_view');
    }
    
    public function check_login(){
        $this->load->model('LoginModel');
        $data = $this->LoginModel->get_data();
        if(count($data) > 0){
            $sess_array = array(
                'userId' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'firstName' => $data[0]['EMP_FNAME'],
                'lastName' =>  $data[0]['EMP_LNAME']
              );
            $this->session->set_userdata('loged_in',$sess_array);

            redirect('HomeController');            
        }
        else{
            $this->session->set_flashdata('error','รหัสผู้ใช้งานไม่ถูกต้อง!');
            redirect('LoginController');                        
        }
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {


	public function index()
	{		
		$session_data = $this->session->userdata('loged_in');		
		$this->load->view('home_view');
	}
}

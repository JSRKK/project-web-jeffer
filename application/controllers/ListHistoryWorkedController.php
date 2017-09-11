<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListHistoryWorkedController extends CI_Controller {


	public function index()
	{		
		$this->load->view('list_history_worked_view');
	}
}

<?php
class LoginModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_data(){
            $id = $this->input->post('username');
            $password = $this->input->post('password'); 
                      
            $this->db->select('*');
            $this->db->from('employee');
            $where = "EMP_ID = '$id' AND EMP_PASSWORD = '$password'";
            $this->db->where($where);
            $query = $this->db->get();               
            return $query->result_array(); 
        }     

}

?>
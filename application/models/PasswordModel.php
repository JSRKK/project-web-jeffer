<?php
class PasswordModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function change_password(){
                $id = $this->input->post('username');
                $password = $this->input->post('oldPassword');
                $this->db->select('IFNULL(EMP_ID, NULL) as id, IFNULL(EMP_PASSWORD, NULL) as password');
                $this->db->from('employee');
                $this->db->where('EMP_ID',$id);
                $query = $this->db->get();               
                return $query->result_array(); 
        }    
        
        public function update_password(){
                $id = $this->input->post('username');
                $password = $this->input->post('newPassword');
                $data = array(
                        'EMP_PASSWORD' => $password
                );
                $this->db->where('EMP_ID',$id);
                $this->db->update('employee',$data);   

                $this->session->userdata('loged_in')['password'] = $password;       
        } 

}

?>
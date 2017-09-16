<?php
class ListSalaryModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_data($userId){
            $this->db->select('SALARY_DATE');
            $this->db->from('salary');
            $this->db->where('EMP_ID', $userId);
            $query = $this->db->get();               
            return $query->result_array(); 
        }     

}

?>
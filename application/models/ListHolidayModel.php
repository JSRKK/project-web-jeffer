<?php
class ListHolidayModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_all(){
                // $this->db->select('*');
                // $this->db->from('holiday');
                // $query = $this->db->get();  
                $query = $this->db->get('holiday');
                return $query->result_array(); 
        }     
}

?>
<?php
class ListHistoryWorkedModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_all(){
                $this->db->select('*');
                $this->db->from('working');
                $query = $this->db->get();               
                return $query->result_array(); 
        }  
        
        public function get_holiday(){
            $this->db->select('WORKING_DATE, WORKING_START, WORKING_END, h.HOLIDAY_DETAIL');
            $this->db->from('working w');
            $this->db->join('holiday h','h.HOLIDAY_DATE = w.WORKING_DATE');
            $query = $this->db->get();               
            return $query->result_array(); 
    }   
}

?>
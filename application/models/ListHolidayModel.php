<?php
class ListHolidayModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_year(){
                $this->db->select('DISTINCT(YEAR(HOLIDAY_DATE)) as year');
                $this->db->from('holiday');
                $this->db->order_by("year", "desc");
                $query = $this->db->get();               
                return $query->result_array(); 
        }     

        public function get_data($year){
                $this->db->select('*');
                $this->db->from('holiday');
                $this->db->where('YEAR(HOLIDAY_DATE)=', $year);              
                $query = $this->db->get();               
                return $query->result_array(); 
        }
}

?>
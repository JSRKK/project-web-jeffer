<?php
class ShowScheduleModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_data($userId){
                $this->db->select('SCHEDULE_DATE, SCHEDULE_START, SCHEDULE_END');
                $this->db->from('schedule');
                $this->db->where('EMP_ID', $userId);
                $query = $this->db->get();               
                return $query->result_array(); 
        }     

}

?>
<?php
class ScheduleModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function insert_data(){
            $data = array(
                'SCHEDULE_DATE'=> date("Y-m-d", strtotime($this->input->post('time_start'))), //แปลงรูปแบบวันที่
                'SCHEDULE_START'=> date("H:i:s", strtotime($this->input->post('time_start'))), 
                'SCHEDULE_END'=> date("H:i:s", strtotime($this->input->post('time_end'))), 
                'EMP_ID'=> 'JF0003'               
            );        
            $this->db->insert('schedule',$data);       
        }  
        
        public function check_duplicate(){
            $date = date("Y-m-d", strtotime($this->input->post('time_start')));
            $this->db->select('SCHEDULE_DATE');
            $this->db->from('schedule');
            $where = "SCHEDULE_DATE='$date' AND EMP_ID ='JF0003'";
            $this->db->where($where);
            $query = $this->db->get();
        
            if ($query->num_rows() == 0) {
                return true;
            }
            return false;
        }

}

?>
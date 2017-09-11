<?php
class ScheduleModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function insert_data(){
            $data = array(
                'SCHEDULE_DATE'=> date("Y-d-m", strtotime($this->input->post('time_start'))), //แปลงรูปแบบวันที่
                'SCHEDULE_START'=> date("H:i:s", strtotime($this->input->post('time_start'))), 
                'SCHEDULE_END'=> date("H:i:s", strtotime($this->input->post('time_end'))), 
                'EMP_ID'=> 'JF0003'               
            );
            $this->db->insert('schedule',$data);
        }     

}

?>
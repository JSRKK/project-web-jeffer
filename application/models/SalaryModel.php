<?php
class SalaryModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_data(){
                $this->db->select('EMP_TNAME, EMP_FNAME, EMP_LNAME, EMP_ACCOUNT, EMP_SALARY, EMP_TYPE, rank.RANK_NAME, EMP_ID');
                $this->db->from('employee emp');
                $this->db->join('rank','rank.RANK_ID = emp.RANK_ID');
                $this->db->where('EMP_ID','JF0003');
                $query = $this->db->get();               
                return $query->result_array(); 
        } 

        public function get_salary($date){
                $this->db->select('SALARY_DATE as date, IFNULL(SALARY_OT1, 0) as ot1, IFNULL(SALARY_OT2, 0) as ot2, IFNULL(SALARY_DILIGENCE,0) as diligence, IFNULL(SALARY_BONUS,0) as bonus, 
                                   IFNULL(SALARY_INSURANCE,0) as insurance, IFNULL(SALARY_HOLIDAY_PAY,0) as holiday_pay, IFNULL(SALARY_LATE_PAY,0) as late_pay, IFNULL(SALARY_OTHER_PAY,0) as other_pay, 
                                   SALARY_TOTAL as total');
                $this->db->from('salary');
                $where = "EMP_ID = 'JF0003' AND SALARY_DATE = '$date' ";
                $this->db->where($where);
                $query = $this->db->get();               
                return $query->result_array(); 
        }    
        
        public function get_hour($date){
                $lastMonth = date('Y-m-d', strtotime('-1 months'.$date));
                $this->db->select('SUM(SCHEDULE_HOURS) as sum_hour, SUM(SCHEDULE_OT1) as sum_ot1, SUM(SCHEDULE_OT2) as sum_ot2');
                $this->db->from('schedule');
                $where = "EMP_ID='JE0003' AND SCHEDULE_DATE >= '$lastMonth' AND SCHEDULE_DATE <= '$date'";
                $this->db->where($where);
                $query = $this->db->get();               
                return $query->result_array(); 
        } 
}

?>
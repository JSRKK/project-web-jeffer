<?php
class SalaryModel extends CI_Model {
	   
	   function __construct() 
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_data(){
                $this->db->select('EMP_TNAME, EMP_FNAME, EMP_LNAME, EMP_ACCOUNT, EMP_TYPE, rank.RANK_NAME, EMP_ID');
                $this->db->from('employee emp');
                $this->db->join('rank','rank.RANK_ID = emp.RANK_ID');
                $this->db->where('EMP_ID','JF0003');
                $query = $this->db->get();               
                return $query->result_array(); 
        } 

        public function get_salary(){
                $this->db->select('SALARY_DATE as date, IFNULL(SALARY_OT1, 0) as ot1, IFNULL(SALARY_OT2, 0) as ot2, IFNULL(SALARY_DILIGENCE,0) as diligence, IFNULL(SALARY_BONUS,0) as bonus, 
                                   IFNULL(SALARY_INCOME_OTHER,0) as income, IFNULL(SALARY_INSURANCE,0) as insurance, IFNULL(SALARY_MULCT_OTHER,0) as mulct, 
                                   IFNULL(SALARY_EXCESS_QUOTA,0) as quota, SALARY_TOTAL as total');
                $this->db->from('salary');
                $this->db->order_by("EMP_ID", "JF0003");
                $query = $this->db->get();               
                return $query->result_array(); 
        }     
}

?>
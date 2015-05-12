<?php

class Compare_model extends CI_Model
{
    function getInfo($where)
    {
        $this->db->select('');
        $this->db->from('tbl_monthly_dps');
        $this->db->where($where);
        $this->db->order_by('interest','desc');
        $this->db->join('tbl_bank', 'tbl_monthly_dps.bank_id = tbl_bank.bank_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function get_fixed_info($where)
    {
        $this->db->select('*');
        $this->db->from('tbl_fixed_dps');
        $this->db->where($where);
        $this->db->order_by('interest','desc');
        $this->db->join('tbl_bank', 'tbl_fixed_dps.bank_id = tbl_bank.bank_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function get_retirement_info($where)
    {
        $this->db->select('');
        $this->db->from('tbl_retirement');
        $this->db->where($where);
        $this->db->order_by('interest','desc');
        $this->db->join('tbl_bank', 'tbl_retirement.bank_id = tbl_bank.bank_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
     function get_child_education_plan_info($where)
    {
        $this->db->select('');
        $this->db->from('tbl_child_education_plan');
        $this->db->where($where);
        $this->db->order_by('interest','desc');
        $this->db->join('tbl_bank', 'tbl_child_education_plan.bank_id = tbl_bank.bank_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function get_education_saving_plan_info($where)
    {
        $this->db->select('');
        $this->db->from('tbl_education_saving_plan');
        $this->db->where($where);
        $this->db->order_by('interest','desc');
        $this->db->join('tbl_bank', 'tbl_education_saving_plan.bank_id = tbl_bank.bank_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
     function get_hajj_deposit_scheme_info($where)
    {
        $this->db->select('');
        $this->db->from('tbl_hajj_deposit_scheme');
        $this->db->where($where);
        $this->db->order_by('installment','asc');
        $this->db->join('tbl_bank', 'tbl_hajj_deposit_scheme.bank_id = tbl_bank.bank_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
}

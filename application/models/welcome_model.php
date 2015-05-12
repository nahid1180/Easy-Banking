<?php

class Welcome_Model extends CI_Model{
    //put your code here
     public function select_all_published_category_deposit()
    {
        $this->db->select('*');
        $this->db->from('tbl_category_deposit');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    
    
    public function select_deposit_info($type,$bank_id)
    {
       $this->db->select('*');
       $this->db->where('type',$type);
       $this->db->where('bank_id',$bank_id);
        $this->db->from('tbl_deposit');
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }

     public function select_about_deposit()
    {
        $this->db->select('*');
        $this->db->from('tbl_description');
        $query = $this->db->get();
        return $query->row();
    }
    
  public function select_all_published_category_dps()
    {
        $this->db->select('*');
        $this->db->from('tbl_category_dps');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_published_category_islami_bank()
    {
        $this->db->select('*');
        $this->db->from('tbl_category_islami_bank');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
     public function select_about_islami_deposit()
    {
        $this->db->select('*');
        $this->db->from('tbl_description_islami');
        $query = $this->db->get();
        return $query->row();
    }
     
    public function select_islami_deposit_info($bank_id)
    {
        $this->db->select('*');
        $this->db->where('bank_id',$bank_id);
        $this->db->from('tbl_islami_deposit');
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
     public function select_all_published_category_credit_card()
    {
        $this->db->select('*');
        $this->db->from('tbl_category_credit_card');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
     public function select_credit_card_info($type,$bank_id)
    {
       $this->db->select('*');
       $this->db->where('type',$type);
       $this->db->where('bank_id',$bank_id);
        $this->db->from('tbl_credit_card');
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }

     public function select_about_credit_islamic()
    {
        $this->db->select('*');
        $this->db->from('tbl_description_islami');
        $query = $this->db->get();
        return $query->row();
    }
     public function select_about_credit_prepaid()
    {
        $this->db->select('*');
        $this->db->from('tbl_description_islami');
        $query = $this->db->get();
        return $query->row();
    }
     public function select_about_credit_visa()
    {
        $this->db->select('*');
        $this->db->from('tbl_description_islami');
        $query = $this->db->get();
        return $query->row();
    }
    
}

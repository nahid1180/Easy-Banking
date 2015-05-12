<?php

class Super_Admin_Model extends CI_Model {
    //put your code here
    public function save_category_deposit_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->insert('tbl_category_deposit', $data);
    }

    public function select_all_category_deposit() {
        $this->db->select('*');
        $this->db->from('tbl_category_deposit');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_category_deposit_by_id($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_deposit');
    }

    public function published_category_deposit_by_id($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_deposit');
    }

    public function delete_category_deposit_by_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category_deposit');
    }

    public function select_category_deposit_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category_deposit');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_deposit_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $category_id = $this->input->post('category_id', true);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_deposit', $data);
    }
     public function save_deposit_info() {
       $data = array();
        $data['bank_id'] = $this->input->post('bank_id', true);
       $data['type'] = $this->input->post('type', true);
       $data['description'] = $this->input->post('description', true);
        $this->db->insert('tbl_deposit', $data);
    }
    public function save_islami_deposit_info() {
       $data = array();
       $data['bank_id'] = $this->input->post('bank_id', true);
       $data['description'] = $this->input->post('description', true);
	   $data['website'] = $this->input->post('website', true);
       $this->db->insert('tbl_islami_deposit', $data);
    }

    public function save_category_dps_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);

        $this->db->insert('tbl_category_dps', $data);
    }

    public function select_all_category_dps() {
        $this->db->select('*');
        $this->db->from('tbl_category_dps');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_category_dps_by_id($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_dps');
    }

    public function published_category_dps_by_id($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_dps');
    }

    public function delete_category_dps_by_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category_dps');
    }

    public function select_category_dps_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category_dps');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_dps_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $category_id = $this->input->post('category_id', true);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_dps', $data);
    }

    public function save_bank_info($data) {
        
        $this->db->insert('tbl_bank', $data);
    }

    public function select_all_bank() {
        $this->db->select();
        $this->db->from('tbl_bank');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_bank_b() {
        $this->db->select();
        $this->db->from('tbl_bank');
        $this->db->limit(10);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_bank_i() {
         
        $this->db->select();
        $this->db->from('tbl_bank');
         $this->db->where("bank_id IN(7,21,28,24,25,32)");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_bank_prepaid() {
         
        $this->db->select();
        $this->db->from('tbl_bank');
         $this->db->where("bank_id IN(7,10,13,14,21,22,36,33)");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_bank_islamic() {
         
        $this->db->select();
        $this->db->from('tbl_bank');
         $this->db->where("bank_id IN(14,13,24,21,22,36,29,36)");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_bank_visa() {
         
        $this->db->select();
        $this->db->from('tbl_bank');
         $this->db->where("bank_id IN(7,13,14,21,28,29,34,35,37,33)");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_bank($bank_id)
    {
        $this->db->select();
        $this->db->from("tbl_bank");
        $this->db->where("bank_id", $bank_id);
        return $this->db->get()->row();
    }
   public function delete_bank_by_id($bank_id) {
        $this->db->where('bank_id', $bank_id);
        $this->db->delete('tbl_bank');
    }

    public function select_bank_by_id($bank_id) {
        $this->db->select('*');
        $this->db->from('tbl_bank');
        $this->db->where('bank_id', $bank_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_bank_info() {
        $data = array();
        $data['bank_name'] = $this->input->post('bank_name', true);
        $data['bank_logo'] = $this->input->post('bank_logo', true);
        $data['bank_banner'] = $this->input->post('bank_banner', true);
        $bank_id = $this->input->post('bank_id', true);
        $this->db->where('bank_id', $bank_id);
        $this->db->update('tbl_bank', $data);
    }

    public function save_monthly_dps_info() {
        $data = array();
        $data['bank_id'] = $this->input->post('bank_id', true);
        $data['installment'] = $this->input->post('installment', true);
        $installment = $this->input->post('installment', true);
        $data['status'] = $this->input->post('status', true);
        $data['year'] = $this->input->post('year', true);
        $year = $this->input->post('year', true);
        $data['interest'] = $this->input->post('interest', true);
		$interest=$this->input->post('interest', true);
        $data['deposit_amount'] = $installment * $year * 12;
		$deposit_amount=$installment * $year * 12;
        $data['amount_with_interest'] = (($deposit_amount * $year *$interest)/100)+$deposit_amount ;
        $data['description'] = $this->input->post('description', true);

        $this->db->insert('tbl_monthly_dps', $data);
    }

    public function save_fixed_dps_info() {
        $data = array();
         $data['bank_id'] = $this->input->post('bank_id', true);
        $data['installment'] = $this->input->post('installment', true);
        $installment = $this->input->post('installment', true);
        $data['status'] = $this->input->post('status', true);
        $data['year'] = $this->input->post('year', true);
        $year = $this->input->post('year', true);
        $data['interest'] = $this->input->post('interest', true);
		$interest=$this->input->post('interest', true);
        $data['deposit_amount'] = $installment * $year * 12;
		$deposit_amount=$installment * $year * 12;
		$data['amount_with_interest'] = (($deposit_amount * $year *$interest)/100)+$deposit_amount ;
        $data['description'] = $this->input->post('description', true);

        $this->db->insert('tbl_fixed_dps', $data);
    }
    
     public function save_retirement_info() {
        $data = array();
        $data['bank_id'] = $this->input->post('bank_id', true);
        $data['installment'] = $this->input->post('installment', true);
        $installment = $this->input->post('installment', true);
        $data['status'] = $this->input->post('status', true);
        $data['year'] = $this->input->post('year', true);
        $year = $this->input->post('year', true);
        $data['interest'] = $this->input->post('interest', true);
		$interest=$this->input->post('interest', true);
        $data['deposit_amount'] = $installment * $year * 12;
        $deposit_amount=$installment * $year * 12;
		$data['amount_with_interest'] = (($deposit_amount * $year *$interest)/100)+$deposit_amount ;
        $data['description'] = $this->input->post('description', true);

        $this->db->insert('tbl_retirement', $data);
    }
    
     public function save_marriage_dps_info() {
        $data = array();
        $data['bank_id'] = $this->input->post('bank_id', true);
        $data['installment'] = $this->input->post('installment', true);
        $installment = $this->input->post('installment', true);
        $data['status'] = $this->input->post('status', true);
        $data['year'] = $this->input->post('year', true);
        $year = $this->input->post('year', true);
        $data['interest'] = $this->input->post('interest', true);
		$interest=$this->input->post('interest', true);
        $data['deposit_amount'] = $installment * $year * 12;
        $deposit_amount=$installment * $year * 12;
		$data['amount_with_interest'] = (($deposit_amount * $year *$interest)/100)+$deposit_amount ;
        $data['description'] = $this->input->post('description', true);

        $this->db->insert('tbl_marriage_plan', $data);
    }
    
     public function save_education_savings_info() {
        $data = array();
        $data['bank_id'] = $this->input->post('bank_id', true);
        $data['installment'] = $this->input->post('installment', true);
        $installment = $this->input->post('installment', true);
        $data['status'] = $this->input->post('status', true);
        $data['year'] = $this->input->post('year', true);
        $year = $this->input->post('year', true);
        $data['interest'] = $this->input->post('interest', true);
		$interest=$this->input->post('interest', true);
        $data['deposit_amount'] = $installment * $year * 12;
		$deposit_amount=$installment * $year * 12;
     
		$data['amount_with_interest'] = (($deposit_amount * $year *$interest)/100)+$deposit_amount ;
        $data['description'] = $this->input->post('description', true);

        $this->db->insert('tbl_education_savings_plan', $data);
    }
     public function save_child_education_info() {
        $data = array();
        $data['bank_id'] = $this->input->post('bank_id', true);
        $data['installment'] = $this->input->post('installment', true);
        $installment = $this->input->post('installment', true);
        $data['status'] = $this->input->post('status', true);
        $data['year'] = $this->input->post('year', true);
        $year = $this->input->post('year', true);
        $data['interest'] = $this->input->post('interest', true);
		$interest=$this->input->post('interest', true);
        $data['deposit_amount'] = $installment * $year * 12;
		$deposit_amount=$installment * $year * 12;
        $data['amount_with_interest'] = (($deposit_amount * $year *$interest)/100)+$deposit_amount ;
        $data['description'] = $this->input->post('description', true);

        $this->db->insert('tbl_child_education_plan', $data);
    }
     public function save_hajj_info() {
        $data = array();
        $data['bank_id'] = $this->input->post('bank_id', true);
        $data['installment'] = $this->input->post('installment', true);
        $data['status'] = $this->input->post('status', true);
        $data['year'] = $this->input->post('year', true);
        $data['amount_payable'] = $this->input->post('amount_payable', true);
        $data['year'] = $this->input->post('year', true);
        $data['deposit_amount'] = $this->input->post('deposit_amount', true);
        $data['description'] = $this->input->post('description', true);
        $this->db->insert('tbl_hajj_deposit_scheme', $data);
    }


    public function save_category_islami_bank_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);

        $this->db->insert('tbl_category_islami_bank', $data);
    }

    public function select_all_category_islami_bank() {
        $this->db->select('*');
        $this->db->from('tbl_category_islami_bank');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_category_islami_bank_by_id($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_islami_bank');
    }

    public function published_category_islami_bank_by_id($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_islami_bank');
    }

    public function delete_category_islami_bank_by_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category_islami_bank');
    }

    public function select_category_islami_bank_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category_islami_bank');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_islami_bank_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $category_id = $this->input->post('category_id', true);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_islami_bank', $data);
    }

    public function save_category_credit_card_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);

        $this->db->insert('tbl_category_credit_card', $data);
    }

    public function select_all_category_credit_card() {
        $this->db->select('*');
        $this->db->from('tbl_category_credit_card');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_category_credit_card_by_id($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_credit_card');
    }

    public function published_category_credit_card_by_id($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_credit_card');
    }

    public function delete_category_credit_card_by_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category_credit_card');
    }

    public function select_category_credit_card_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category_credit_card');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_detail_by_id($bank_id) {
        $this->db->select('*');
        $this->db->from('tbl_monthly_dps');
        $this->db->where('bank_id', $bank_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_credit_card_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $category_id = $this->input->post('category_id', true);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category_credit_card', $data);
    }
     public function save_description_info() {
        $data = array();
        $data['deposit_account_details'] = $this->input->post('deposit_account_details', true);
        $data['current_details'] = $this->input->post('current_details', true);
        $this->db->insert('tbl_description', $data);
    }
     public function save_description_islami_info() {
        $data = array();
        $data['islami_deposit_details'] = $this->input->post('islami_deposit_details', true);
         $this->db->insert('tbl_description_islami', $data);
    }
     public function save_credit_card_info() {
       $data = array();
       $data['bank_id'] = $this->input->post('bank_id', true);
        $data['type'] = $this->input->post('type', true);
       $data['description'] = $this->input->post('description', true);
       $data['website'] = $this->input->post('website', true);
       $this->db->insert('tbl_credit_card', $data);
    }
}

?>
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Super_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('administrator', 'refress');
        }
    }

    //put your code here
    public function index() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/dashboard', '', true);
        $data['title'] = 'Dashboard';
        // $this->load->view('master',$data);
        $this->load->view('admin/admin_master', $data);
    }

    //code start for category deposit
    public function add_category_deposit() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_category_deposit', '', true);
        $data['title'] = 'Add Category';
        // $this->load->view('master',$data);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category_deposit() {
        $data = array();
        $this->super_admin_model->save_category_deposit_info();
        $sdata['message'] = 'save category successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category_deposit');
    }

    //end code for category deposit
    public function manage_category_deposit()
    {
        $data = array();
        $data['all_category_deposit']=$this->super_admin_model->select_all_category_deposit();
        $data['admin_maincontent'] = $this->load->view('admin/manage_category_deposit', $data, true);
        $data['title'] = 'manage Category';
        $this->load->view('admin/admin_master', $data);
    }
    public function unpublished_category_deposit($category_id)
    {
        $this->super_admin_model->unpublished_category_deposit_by_id($category_id);
        redirect('super_admin/manage_category_deposit');
    }
     public function published_category_deposit($category_id)
    {
        $this->super_admin_model->published_category_deposit_by_id($category_id);
        redirect('super_admin/manage_category_deposit');
    }
    public function delete_category_deposit($category_id)
    {
        $this->super_admin_model->delete_category_deposit_by_id($category_id);
        redirect('super_admin/manage_category_deposit');
    }
    public function edit_category_deposit($category_id)
    {
        $data=array();
        $data['category_info']= $this->super_admin_model->select_category_deposit_by_id($category_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_category_deposit', $data, true);
        $data['title'] = 'manage Category';
        $this->load->view('admin/admin_master', $data);
    }
    public function update_category_deposit()
    {
      $this->super_admin_model->update_category_deposit_info();  
       redirect('super_admin/manage_category_deposit');
    }
    public function add_deposit() {
        $data = array();
        $data['all_bank'] = $this->super_admin_model->select_all_bank();
        $data['admin_maincontent'] = $this->load->view('admin/add_deposit', $data, true);
        $data['title'] = 'Add Deposit';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_deposit() {
       $data = array();
        $this->super_admin_model->save_deposit_info();
        $sdata['message'] = 'save deposit successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_deposit');
    }
    public function add_description() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_description', '', true);
        $data['title'] = 'Add Description';
        // $this->load->view('master',$data);
        $this->load->view('admin/admin_master', $data);
    }
     public function save_description() {
        $data = array();
        $this->super_admin_model->save_description_info();
        $sdata['message'] = 'save description successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_description');
    }
     public function add_description_islami() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_description_islami', '', true);
        $data['title'] = 'Add Description';
        // $this->load->view('master',$data);
        $this->load->view('admin/admin_master', $data);
    }
     public function save_description_islami() {
        $data = array();
        $this->super_admin_model->save_description_islami_info();
        $sdata['message'] = 'save description successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_description_islami');
    }
     public function add_islami_deposit() {
        $data = array();
        $data['all_bank'] = $this->super_admin_model->select_all_bank_i();
        $data['admin_maincontent'] = $this->load->view('admin/add_islami_deposit', $data, true);
        $data['title'] = 'Add Islami Deposit';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_islami_deposit() {
       $data = array();
        $this->super_admin_model->save_islami_deposit_info();
        $sdata['message'] = 'save Islami deposit successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_islami_deposit');
    }

    public function add_bank() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_bank', '', true);
        $data['title'] = 'Add Bank';
        // $this->load->view('master',$data);
        $this->load->view('admin/admin_master', $data);
    }
    public function save_bank() {
        $data = array();
        $data['bank_name'] = $this->input->post('bank_name', true);
        $config['upload_path'] = 'images/bank_logo/';
         $config['upload_b_path'] = 'images/bank_banner/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $error='';
        $fdata=array();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('bank_banner'))
        {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        }
        else
        {
            $fdata = $this->upload->data();
            $data['bank_banner']=$config['upload_b_path'].$fdata['file_name'];
        }
        
        if ( ! $this->upload->do_upload('bank_logo'))
        {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        }
        else
        {
            $fdata = $this->upload->data();
            $data['bank_logo']=$config['upload_path'].$fdata['file_name'];
        }
        
        /*
         *  End Bank Image Upload
         */
        $this->super_admin_model->save_bank_info($data);
        $sdata['message'] = 'save Bnak successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_bank');
    }
    public function manage_bank()
    {
        $data = array();
        $data['all_bank']=$this->super_admin_model->select_all_bank();
        $data['admin_maincontent'] = $this->load->view('admin/manage_bank', $data, true);
        $data['title'] = 'manage Bank';
        $this->load->view('admin/admin_master', $data);
    }
   public function delete_bank($bank_id)
    {
        $this->super_admin_model->delete_bank_by_id($bank_id);
        redirect('super_admin/manage_bank');
    }
    public function edit_bank($bank_id)
    {
        $data=array();
        $data['bank_info']= $this->super_admin_model->select_bank_by_id($bank_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_bank', $data, true);
        $data['title'] = 'manage Bank';
        $this->load->view('admin/admin_master', $data);
    }
    public function update_bank()
    {
      $this->super_admin_model->update_bank_info();  
       redirect('super_admin/manage_bank');
    }

    //code start for category dps

    public function add_category_dps() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_category_dps', '', true);
        $data['title'] = 'Add Category';
        // $this->load->view('master',$data);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category_dps() {
        $data = array();
        $this->super_admin_model->save_category_dps_info();
        $sdata['message'] = 'save category successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category_dps');
    }
    public function manage_category_dps()
    {
        $data = array();
        $data['all_category_dps']=$this->super_admin_model->select_all_category_dps();
        $data['admin_maincontent'] = $this->load->view('admin/manage_category_dps', $data, true);
        $data['title'] = 'manage Category DPS';
        $this->load->view('admin/admin_master', $data);
    }
    public function unpublished_category_dps($category_id)
    {
        $this->super_admin_model->unpublished_category_dps_by_id($category_id);
        redirect('super_admin/manage_category_dps');
    }
     public function published_category_dps($category_id)
    {
        $this->super_admin_model->published_category_dps_by_id($category_id);
        redirect('super_admin/manage_category_dps');
    }
    public function delete_category_dps($category_id)
    {
        $this->super_admin_model->delete_category_dps_by_id($category_id);
        redirect('super_admin/manage_category_dps');
    }
    public function edit_category_dps($category_id)
    {
        $data=array();
        $data['category_info']= $this->super_admin_model->select_category_dps_by_id($category_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_category_dps', $data, true);
        $data['title'] = 'manage Category DPS';
        $this->load->view('admin/admin_master', $data);
    }
    public function update_category_dps()
    {
      $this->super_admin_model->update_category_dps_info();  
       redirect('super_admin/manage_category_dps');
    }
    
     public function add_monthly_dps() {
        $data = array();
        $data['all_bank'] = $this->super_admin_model->select_all_bank();
        $data['admin_maincontent'] = $this->load->view('admin/add_monthly_dps', $data, true);
        $data['title'] = 'Add monthly dps';
        $this->load->view('admin/admin_master', $data);
    }
    public function save_monthly_dps(){
        $data = array();
        $this->super_admin_model->save_monthly_dps_info();
        $sdata['message'] = 'save category successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_monthly_dps');
    }
     public function add_fixed_dps() {
        $data = array();
        $data['all_bank'] = $this->super_admin_model->select_all_bank();
        $data['admin_maincontent'] = $this->load->view('admin/add_fixed_dps', $data, true);
        $data['title'] = 'Add fixed dps';
        // $this->load->view('master',$data);
        $this->load->view('admin/admin_master', $data);
    }
    public function save_fixed_dps() {
        $data = array();
        $this->super_admin_model->save_fixed_dps_info();
        $sdata['message'] = 'save category successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_fixed_dps');
    }
    public function add_retirement() {
        $data = array();
        $data['all_bank'] = $this->super_admin_model->select_all_bank();
        $data['admin_maincontent'] = $this->load->view('admin/add_retirement', $data, true);
        $data['title'] = 'Add Retirement Plan';
        $this->load->view('admin/admin_master', $data);
    }
    public function save_retirement(){
        $data = array();
        $this->super_admin_model->save_retirement_info();
        $sdata['message'] = 'save category successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_retirement');
    }
    
    public function add_marriage_dps() {
        $data = array();
        $data['all_bank'] = $this->super_admin_model->select_all_bank();
        $data['admin_maincontent'] = $this->load->view('admin/add_marriage', $data, true);
        $data['title'] = 'Add Marriage DPS';
        $this->load->view('admin/admin_master', $data);
    }
    public function save_marriage_dps(){
        $data = array();
        $this->super_admin_model->save_marriage_dps_info();
        $sdata['message'] = 'Save Marriage DPS successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_marriage_dps');
    }
    
     public function add_education_savings() {
        $data = array();
        $data['all_bank'] = $this->super_admin_model->select_all_bank();
        $data['admin_maincontent'] = $this->load->view('admin/add_education_savings_plan', $data, true);
        $data['title'] = 'Add Education Savings Plan';
        $this->load->view('admin/admin_master', $data);
    }
    public function save_education_savings(){
        $data = array();
        $this->super_admin_model->save_education_savings_info();
        $sdata['message'] = 'Save Education Savings successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_education_savings');
    }
     public function add_child_education() {
        $data = array();
        $data['all_bank'] = $this->super_admin_model->select_all_bank();
        $data['admin_maincontent'] = $this->load->view('admin/add_child_education_plan', $data, true);
        $data['title'] = 'Add Child Education Plan';
        $this->load->view('admin/admin_master', $data);
    }
    public function save_child_education(){
        $data = array();
        $this->super_admin_model->save_child_education_info();
        $sdata['message'] = 'Save Child Education Plan successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_child_education');
    }
    

    //end code for category dps
    public function add_category_islami_bank() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_category_islami_bank', '', true);
        $data['title'] = 'Add Category';
        // $this->load->view('master',$data);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category_islami_bank() {
        $data = array();
        $this->super_admin_model->save_category_islami_bank_info();
        $sdata['message'] = 'save category successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category_islami_bank');
    }
     public function manage_category_islami_bank()
    {
        $data = array();
        $data['all_category_islami_bank']=$this->super_admin_model->select_all_category_islami_bank();
        $data['admin_maincontent'] = $this->load->view('admin/manage_category_islami_bank', $data, true);
        $data['title'] = 'manage Category Islami Bank';
        $this->load->view('admin/admin_master', $data);
    }
    public function unpublished_category_islami_bank($category_id)
    {
        $this->super_admin_model->unpublished_category_islami_bank_by_id($category_id);
        redirect('super_admin/manage_category_islami_bank');
    }
     public function published_category_islami_bank($category_id)
    {
        $this->super_admin_model->published_category_islami_bank_by_id($category_id);
        redirect('super_admin/manage_category_islami_bank');
    }
    public function delete_category_islami_bank($category_id)
    {
        $this->super_admin_model->delete_category_islami_bank_by_id($category_id);
        redirect('super_admin/manage_category_islami_bank');
    }
    public function edit_category_islami_bank($category_id)
    {
        $data=array();
        $data['category_info']= $this->super_admin_model->select_category_islami_bank_by_id($category_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_category_islami_bank', $data, true);
        $data['title'] = 'manage Category Islami Bank';
        $this->load->view('admin/admin_master', $data);
    }
    public function update_category_islami_bank()
    {
      $this->super_admin_model->update_category_islami_bank_info();  
       redirect('super_admin/manage_category_islami_bank');
    }
     public function add_hajj() {
        $data = array();
        $data['all_bank'] = $this->super_admin_model->select_all_bank();
        $data['admin_maincontent'] = $this->load->view('admin/add_hajj', $data, true);
        $data['title'] = 'Add Hajj Plan';
        $this->load->view('admin/admin_master', $data);
    }
    public function save_hajj(){
        $data = array();
        $this->super_admin_model->save_hajj_info();
        $sdata['message'] = 'Save Hajj Plan successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_hajj');
    }

    public function add_category_credit_card() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_category_credit_card', '', true);
        $data['title'] = 'Add Category credit card';
        // $this->load->view('master',$data);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category_credit_card() {
        $data = array();
        $this->super_admin_model->save_category_credit_card_info();
        $sdata['message'] = 'save category successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category_credit_card');
    }
    public function manage_category_credit_card()
    {
        $data = array();
        $data['all_category_credit_card']=$this->super_admin_model->select_all_category_credit_card();
        $data['admin_maincontent'] = $this->load->view('admin/manage_category_credit_card', $data, true);
        $data['title'] = 'manage Category Credit Card';
        $this->load->view('admin/admin_master', $data);
    }
    public function unpublished_category_credit_card($category_id)
    {
        $this->super_admin_model->unpublished_category_credit_card_by_id($category_id);
        redirect('super_admin/manage_category_credit_card');
    }
     public function published_category_credit_card($category_id)
    {
        $this->super_admin_model->published_category_credit_card_by_id($category_id);
        redirect('super_admin/manage_category_credit_card');
    }
    public function delete_category_credit_card($category_id)
    {
        $this->super_admin_model->delete_category_credit_card_by_id($category_id);
        redirect('super_admin/manage_category_credit_card');
    }
    public function edit_category_credit_card($category_id)
    {
        $data=array();
        $data['category_info']= $this->super_admin_model->select_category_credit_card_by_id($category_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_category_credit_card', $data, true);
        $data['title'] = 'manage Category Credit Card';
        $this->load->view('admin/admin_master', $data);
    }
    public function update_category_credit_card()
    {
      $this->super_admin_model->update_category_credit_card_info();  
       redirect('super_admin/manage_category_credit_card');
    }
    public function add_credit_card() {
        $data = array();
        $data['all_bank'] = $this->super_admin_model->select_all_bank();
        $data['admin_maincontent'] = $this->load->view('admin/add_credit_card', $data, true);
        $data['title'] = 'Add Credit Card';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_credit_card() {
       $data = array();
        $this->super_admin_model->save_credit_card_info();
        $sdata['message'] = 'save Credit Card successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_credit_card');
    }

    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata['message'] = 'Your are sussessufully logout';
        $this->session->set_userdata($sdata);
        redirect('administrator');
    }

}

?>

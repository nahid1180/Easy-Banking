<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data = array();
        $data['all_category_deposit'] = $this->welcome_model->select_all_published_category_deposit();
        $data['all_category_dps'] = $this->welcome_model->select_all_published_category_dps();
        $data['all_category_islami_bank'] = $this->welcome_model->select_all_published_category_islami_bank();
        $data['all_category_credit_card'] = $this->welcome_model->select_all_published_category_credit_card();
        $data['maincontent'] = $this->load->view('home_content', $data, true);
        $this->load->view('master', $data);
    }

    public function contact() {
        $data = array();
        $data['maincontent'] = $this->load->view('contact', '', true);
        $this->load->view('master', $data);
    }

    public function about() {
        $data = array();
        $data['maincontent'] = $this->load->view('about', '', true);
        $this->load->view('master', $data);
    }

    public function deposit($id) {
        if ($id == 1) {
            $data = array();
            $data['all_bank'] = $this->super_admin_model->select_all_bank_b();
            $data['rows'] = $this->welcome_model->select_about_deposit();
            $data['maincontent'] = $this->load->view('current_account', $data, true);
             $this->load->view('master', $data);
        } elseif ($id == 4) {
            $data = array();
            $data['all_bank'] = $this->super_admin_model->select_all_bank_b();
            $data['rows'] = $this->welcome_model->select_about_deposit();
            $data['maincontent'] = $this->load->view('deposite_account', $data, true);
            $this->load->view('master', $data);
        }
    }
   

    function deposit_detail() {
        $type = strip_quotes($this->input->get('type'));
        $bank_id = $this->input->get('bank_id');
        $data['all_bank'] = $this->super_admin_model->select_all_bank_b();
        $data['result'] = $this->welcome_model->select_deposit_info($type,$bank_id); 
        $data['bank'] = $this->super_admin_model->select_bank($bank_id);
        $this->load->view('header');
        $this->load->view('deposit_detail', $data, 'true');
        $this->load->view('footer');
    }
    public function dps($id) {
        if ($id == 1) {
            $data = array();
            $data['maincontent'] = $this->load->view('dps_retairement', '', true);
            $this->load->view('master', $data);
        } elseif ($id == 2) {
            $data = array();
            $data['maincontent'] = $this->load->view('dps_marriage', '', true);
            $this->load->view('master', $data);
        } elseif ($id == 3) {
            $data = array();
            $data['maincontent'] = $this->load->view('dps_monthly', '', true);
            $this->load->view('master', $data);
        }
        elseif ($id == 4) {
            $data = array();
            $data['maincontent'] = $this->load->view('dps_fixed', '', true);
            $this->load->view('master', $data);
        }
         elseif ($id == 5) {
            $data = array();
            $data['maincontent'] = $this->load->view('child_education_plan', '', true);
            $this->load->view('master', $data);
        }
         elseif ($id == 6) {
            $data = array();
            $data['maincontent'] = $this->load->view('education_saving_plan', '', true);
            $this->load->view('master', $data);
        }
    }

    public function islami($id) {
        if ($id == 1) {
            $data = array();
            $this->load->view('zakat_calculator', '', true);
            $this->load->view('zakat_calculator', $data);
        } elseif ($id == 4) {
            $data = array();
            $data['all_bank'] = $this->super_admin_model->select_all_bank_i();
             $data['rows'] = $this->welcome_model->select_about_islami_deposit();
            $data['maincontent'] = $this->load->view('islami_deposit', $data, true);
            $this->load->view('master', $data);
        } elseif ($id == 5) {
            $data = array();
            $data['maincontent'] = $this->load->view('provitional_profit', '', true);
            $this->load->view('master', $data);
        }
        elseif ($id == 7) {
            $data = array();
            $data['maincontent'] = $this->load->view('hajj_deposit_scheme', '', true);
            $this->load->view('master', $data);
        }
    }
     function islami_deposit_detail() {
        
        $bank_id = $this->input->get('bank_id');
        $data['all_bank'] = $this->super_admin_model->select_all_bank_i();
        $data['result'] = $this->welcome_model->select_islami_deposit_info($bank_id); 
        $data['bank'] = $this->super_admin_model->select_bank($bank_id);
        $this->load->view('header');
        $this->load->view('islami_deposit_details', $data, 'true');
        $this->load->view('footer');
    }
        public function credit_card($id) {
        if ($id == 6) {
            $data = array();
            $data['all_bank'] = $this->super_admin_model->select_all_bank_visa();
            $data['rows'] = $this->welcome_model->select_about_credit_visa();
            $data['maincontent'] = $this->load->view('visa_card', $data, true);
             $this->load->view('master', $data);
        } elseif ($id == 7) {
            $data = array();
            $data['all_bank'] = $this->super_admin_model->select_all_bank_islamic();
            $data['rows'] = $this->welcome_model->select_about_credit_islamic();
            $data['maincontent'] = $this->load->view('islamic_card', $data, true);
            $this->load->view('master', $data);
        }
         elseif ($id == 8) {
            $data = array();
            $data['all_bank'] = $this->super_admin_model->select_all_bank_prepaid();
            $data['rows'] = $this->welcome_model->select_about_credit_prepaid();
            $data['maincontent'] = $this->load->view('prepaid_card', $data, true);
            $this->load->view('master', $data);
        }
    }
    function credit_card_detail() {
        $type = strip_quotes($this->input->get('type'));
        $bank_id = $this->input->get('bank_id');
        $data['all_bank_prepaid'] = $this->super_admin_model->select_all_bank_prepaid();
         $data['all_bank_visa'] = $this->super_admin_model->select_all_bank_visa();
          $data['all_bank_islamic'] = $this->super_admin_model->select_all_bank_islamic();
        $data['result'] = $this->welcome_model->select_credit_card_info($type,$bank_id); 
        $data['bank'] = $this->super_admin_model->select_bank($bank_id);
        $this->load->view('header');
        $this->load->view('credit_card_detail', $data, 'true');
        $this->load->view('footer');
    }

}

?>
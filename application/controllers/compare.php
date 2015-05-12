<?php

class Compare extends CI_Controller
{
    function monthly()
    {
        if($this->input->get())
        {
            $data = array(
                'installment' => $this->input->get('installment'),
                'year' => $this->input->get('period'),
            );
            $this->load->model('compare_model');
            $data['rows'] = $this->compare_model->getInfo($data);
            $this->load->view('header');
            $this->load->view('monthly_compare',$data);
            $this->load->view('footer');
        }
    }
    
     function fixed()
    {
        if($this->input->get())
        {
            $data = array(
                'installment' => $this->input->get('installment'),
                'year' => $this->input->get('period'),
            );
            $this->load->model('compare_model');
            $data['rows'] = $this->compare_model->get_fixed_info($data);
            $this->load->view('header');
            $this->load->view('monthly_compare',$data);
            $this->load->view('footer');
        }
    }
    
     function retirement()
    {
        if($this->input->get())
        {
            $data = array(
                'installment' => $this->input->get('installment'),
                'year' => $this->input->get('period'),
            );
            $this->load->model('compare_model');
            $data['rows'] = $this->compare_model->get_retirement_info($data);
            $this->load->view('header');
            $this->load->view('monthly_compare',$data);
            $this->load->view('footer');
        }
    }
    function marriage_plan()
    {
        if($this->input->get())
        {
            $data = array(
                'installment' => $this->input->get('installment'),
                'year' => $this->input->get('period'),
            );
            $this->load->model('compare_model');
            $data['rows'] = $this->compare_model->get_marriage_plan_info($data);
            $this->load->view('header');
            $this->load->view('monthly_compare',$data);
            $this->load->view('footer');
        }
    }
    
    function child_education_plan()
    {
        if($this->input->get())
        {
            $data = array(
                'installment' => $this->input->get('installment'),
                'year' => $this->input->get('period'),
            );
            $this->load->model('compare_model');
            $data['rows'] = $this->compare_model->get_child_education_plan_info($data);
            $this->load->view('header');
            $this->load->view('monthly_compare',$data);
            $this->load->view('footer');
        }
    }
    
    public function education_saving_plan()
            
            {
        if($this->input->get())
        {
            $data = array(
                'installment' => $this->input->get('installment'),
                'year' => $this->input->get('period'),
            );
            $this->load->model('compare_model');
            $data['rows'] = $this->compare_model->get_education_saving_plan_info($data);
            $this->load->view('header');
            $this->load->view('monthly_compare',$data);
            $this->load->view('footer');
        }
    }
     public function hajj_deposit_scheme()
            
            {
        if($this->input->get())
        {
            $data = array(
               'year' => $this->input->get('period'),
            );
            $this->load->model('compare_model');
            $data['rows'] = $this->compare_model->get_hajj_deposit_scheme_info($data);
            $this->load->view('header');
            $this->load->view('hajj_compare',$data);
            $this->load->view('footer');
        }
    }
    
    
}

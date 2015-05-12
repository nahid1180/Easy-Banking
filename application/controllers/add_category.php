<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Add_Category extends CI_Controller{
    //put your code here
    public function index()
    {
        $data=array();
        $data['add_category']  =$this->welcome_model->select_all_published_category();
        $this->load->view('home_content',$data);
                
    }
}

?>

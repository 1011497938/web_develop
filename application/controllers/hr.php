<?php

class hr extends MY_Controller{

    public function index(){
      $this->load->view('hr');
       
    }

    public function submit(){
        $this->load->model('hr_model','htm');
        $this->htm->submit();

    }
}
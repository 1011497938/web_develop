<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/10
 * Time: 23:03
 */
class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view("register/register");
    }

    public function submit()
    {
       $this->load->model('Registers_model','registers');
       $this->registers->index();
    }
}




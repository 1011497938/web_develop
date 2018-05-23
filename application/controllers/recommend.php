<?php




class Recommend extends CI_Controller{
    public function index(){      
		$this->load->view('recommend');
    }

    public function department(){      
        $this->load->view('department');
    }
}
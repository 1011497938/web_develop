<?php
/**
 * Created by PhpStorm.
 * User: SQ
 * Date: 15/3/12
 * Time: 上午12:35
 */
class Administration extends CI_Controller{
    public function user(){
        $this->load->model('background_model','background');
        $username=$this->background->getusername();
        $password=$this->background->getpassword();
        $res=$this->background->check($username,$password);
        if($res){
            header("Location: ".site_url(admin));
            exit;
        }
        else{
            exit('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <script type="text/javascript">alert("登录失败！请重试。");
                history.back(-1);</script>');
        }
    }
    public function index(){
        $this->load->view('newback/callhead');
        $this->load->view('newback/administration');
    }
    public function logout(){
        $this->load->model('background_model','background');
        $this->background->logout();
        header("Location: ".site_url("Administration"));
    }
}
<?php
/**
 * Created by 谭思危.
 * Date: 16/12/14
 * Time: 下午10:44
 */
//勤创网首页
class  home extends MY_Controller{
     // 构造函数
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function index(){
    	$this->load->model('List_model');
        $table_name = 'news'; // 表名 
        $data['results'] = $this->List_model->get_List( $table_name, 4, 0);

        $this->load->view('homepage',$data);
    }
    
}
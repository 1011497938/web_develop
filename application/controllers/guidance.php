<?php
/**
 * Created by 谭思危.
 * User: 监管
 * Date: 16/12/16
 * Time: 下午10:44
 */
//创业指导，栏目未开放
class  guidance extends MY_Controller{
    // 构造函数
    function __construct() {
        parent::__construct();
    }
    
    // 显示列表
    public function index(){ 
        $this->load->view('common/callhead');
        $this->load->view('common/nav');
        $this->load->view('common/slider');
        $this->load->view('work_in_progress');
        // 右侧边框生成，存在'application/library'文件夹中
        $this->load->library('AsideClass');
        $this->asideclass->create_aside( 'common_aside' );
        $this->load->view('common/foot');
    }

}
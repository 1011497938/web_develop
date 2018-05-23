<?php
/**
 * Created by 谭思危.
 * Date: 16/12/14
 * Time: 下午10:44
 */
//显示新闻等文章的控制器
class  dep extends MY_Controller{
    

    // 显示列表
    public function part(){
        $data['dep'] = $this->uri->segment(3, -1);   
        $this->load->view('department',$data);
    }

    public function index(){
        $data['dep'] = $this->uri->segment(3, -1);
        $this->load->view('common/callhead');
        $this->load->view('common/nav');
        $this->load->view('common/slider');
        $this->load->view('dep',$data);
        $this->load->view('common/foot');
        
    }
}
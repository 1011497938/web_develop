<?php
/**
 * Created by 谭思危.
 * Date: 16/10/11
 * Time: 下午10:44
 */
// 信息提示
class  Warning extends MY_Controller{

    public function workInProgress(){   
        $this->load->view('common/callhead');
        $this->load->view('common/nav');
        $this->load->view('common/slider');
        $this->load->view('work_in_progress');
        $this->load->view('aside/common_aside');
        $this->load->view('common/foot');
    }

    public function noFound(){
        $this->load->view('common/callhead');
        $this->load->view('common/nav');
        $this->load->view('common/slider');
        $this->load->view('no_found');
        $this->load->view('aside/common_aside');
        $this->load->view('common/foot');
    }

}
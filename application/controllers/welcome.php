<?php

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 */
	 
	public function index()
	{
		$kind ='news';//获取列表类型
        $this->load->model('List_model','list');//注意大小写,加载模型,别名
        $recordcount = $this->list->countrecord($kind);//记录数
		$this->load->view('common/callhead');
		$this->load->view('common/nav');
		$this->load->view('home',$recordcount);
		$this->load->view('common/foot');

	}



public function test(){
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
        echo '<script type="text/javascript">alert("抱歉。主页内容正在更新中，敬请期待。\n了解关于勤创的更多信息，请关注我们的微信公众号。\n感谢您对勤创的支持。\n\n点击“确定”继续进入报名界面。");';
        echo 'window.location.href = "http://1.zjuqinchuang.sinaapp.com/index.php/joinus_controller/joinus";</script>';	
}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
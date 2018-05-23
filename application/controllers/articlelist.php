<?php
/**
 * Created by PhpStorm.
 * User: SQ
 * Date: 15/3/11
 * Time: 下午9:20
 */
//这个是文章列表的控制器
class  Articlelist extends MY_Controller{
    public function news()
        {   
        $mobile=$this->uri->segment(3);
        if($mobile=="mobile"){
            $this->load->model('Mobilelist_model', 'list');
            $news=$this->list->news();
            $tweets=$this->list->tweets();
            $data=array(
               'news'=>$news,
               'tweets'=>$tweets);
            $this->load->view('mobile/mobilehead');
            $this->load->view('mobile/head');
            $this->load->view('mobile/newslist',$data);
            $this->load->view('mobile/foot');
        }
        else {
            $pagesize = 5;//设置每页展示个数
            $kind = $this->uri->segment(2);//获取列表类型
            $pagenum = $this->uri->segment(3);//请求页数
            $this->load->model('List_model', 'list');//注意大小写,加载模型,别名
            $recordcount = $this->list->countrecord($kind);//记录数
            $pagecount = $this->list->countpage($recordcount, $pagesize);//总页数
            $lastpage = $recordcount % $pagesize;//第一页记录数
            $data = array(
                'pagenum' => $pagenum,
                'pagecount' => $pagecount,
                'pagesize' => $pagesize,
                'lastpage' => $lastpage);
            $this->load->view('common/callhead');
            $this->load->view('common/nav');
            $this->load->view('head/news_head');
            $this->load->view('list/news_list', $data);
            $this->load->view('common/foot');
        }
    }

    public function parttime()
        {   
        $mobile=$this->uri->segment(3);
        if($mobile=="mobile"){
            $this->load->model('Mobilelist_model', 'list');
            $data1=$this->list->xnjianzhi();
            $data2=$this->list->xwjianzhi();
            $data3=$this->list->jiajiao();
            $data4=$this->list->top($this->uri->segment(2));
            $data=array(
                'data1'=>$data1,
                'data2'=>$data2,
                'data3'=>$data3,
                'data4'=>$data4
            );
            $this->load->view('mobile/mobilehead');
            $this->load->view('mobile/head');
            $this->load->view('mobile/banner');
            $this->load->view('mobile/parttimelist',$data);
            $this->load->view('mobile/foot');
        }
        else {
            $pagesize = 10;//设置每页展示个数
            $kind = $this->uri->segment(2);//获取列表类型
            $pagenum = $this->uri->segment(3);//请求页数
            $this->load->model('List_model', 'list');//注意大小写,加载模型,别名
            $recordcount = $this->list->countrecord($kind);//记录数
            $pagecount = $this->list->countpage($recordcount, $pagesize);//总页数
            $data = array(
                'pagenum' => $pagenum,
                'pagecount' => $pagecount,
                'pagesize' => $pagesize,);
            $this->load->view('common/callhead');
            $this->load->view('common/nav');
            $this->load->view('head/' . 'parttime_head');
            $this->load->view('list/parttime_list', $data);
            $this->load->view('common/foot');
        }
    }
    public function startup()//
    {   /*
        $mobile=$this->uri->segment(3);
        if($mobile=="mobile"){
            $this->load->view('mobile/mobilehead');
            $this->load->view('mobile/head');
            $this->load->view('mobile/list');
            $this->load->view('mobile/foot');
        }
        else {
            $pagesize = 5;//设置每页展示个数
            $kind = $this->uri->segment(2);//获取列表类型
            $pagenum = $this->uri->segment(3);//请求页数
            $this->load->model('List_model', 'list');//注意大小写,加载模型,别名
            $recordcount = $this->list->countrecord($kind);//记录数
            $pagecount = $this->list->countpage($recordcount, $pagesize);//总页数
            $lastpage = $recordcount % $pagesize;//第一页记录数

            //加载视图
            $data = array(
                'kind' => $kind,
                'pagenum' => $pagenum,
                'pagecount' => $pagecount,
                'pagesize' => $pagesize,
                'lastpage' => $lastpage);
            $this->load->view('common/callhead');
            $this->load->view('common/nav');
            $this->load->view('head/' . $kind . '_head');
            $this->load->view('list/list', $data);
            $this->load->view('common/foot');
        }
    */
        header("location: ".base_url("static/wait/"));
    }
    public function download(){
        header("location: ".base_url("static/wait/"));
    }
}
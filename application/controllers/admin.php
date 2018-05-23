<?php

class Admin extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


    public function submit(){

        $kind=$this->uri->segment(3);
        $this->load->model('background_model','background');
        $this->background->submit($kind);
        echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
        echo"<script>alert('发布成功！');history.go(-1);</script>";

    }
    public function index(){
        $query = $this->db->query('SELECT SUM(pageviews) from pageviews');
        $row = $query->row_array();
        $data['totalView'] = $row['SUM(pageviews)'];
        // var_dump($row);
        $this->load->view("newback/callhead");
        $this->load->view("newback/head");
        $this->load->view('newback/index',$data);
    }
    public function parttime(){
        error_reporting(E_ALL^E_NOTICE^E_WARNING);
        $kind=$this->uri->segment(2);
        if($this->uri->segment(3)=="add"&&$this->uri->segment(4)==""){
            $this->load->view("newback/callhead");
            $this->load->view("newback/head");
            $this->load->view("newback/jgeditor");
        }
        if($this->uri->segment(3)=="manage"&&$this->uri->segment(4)==""){
            $this->load->view("newback/callhead");
            $this->load->view("newback/head");
            $this->load->model('background_model','background');
            $id=NULL;
            $data=$this->background->getdata($kind,$id);
            $convey=array(
                'data'=>$data
            );
            $this->load->view("newback/manage",$convey);
        }
        if($this->uri->segment(3)=="manage"&&$this->uri->segment(4)=="giveup"){
            $id=$this->input->post('id');
            $this->load->model('background_model','background');
            $this->background->giveup($kind,$id);
        }
        if($this->uri->segment(3)=="manage"&&$this->uri->segment(4)=="recover"){
            $id=$this->input->post('id');
            $this->load->model('background_model','background');
            $this->background->recover($kind,$id);
        }
        if($this->uri->segment(3)=="manage"&&$this->uri->segment(4)=="rewrite"){
            $id=$this->uri->segment(5);
            $this->load->model('background_model','background');
            $this->background->recover($kind,$id);
        }
        if($this->uri->segment(3)=="modify"&&$this->uri->segment(4)==""){
            $id=$_GET['id'];
            if($id!=null){
                $this->load->view("newback/callhead");
                $this->load->view("newback/head");
                $this->load->model('background_model','background');
                $data=$this->background->getdata($kind,$id);
                $convey=array(
                    'data'=>$data
                );
                $this->load->view("newback/jgmodify",$convey);   
            }
        }
        if($this->uri->segment(3)=="modify"&&$this->uri->segment(4)=="submit"){
            $this->load->model('background_model','background');
            $this->background->modify($kind);
            echo '<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';
            echo "<script>alert('修改成功！');history.go(-1);</script>";
        }
        if($this->uri->segment(3)=="apply"&&$this->uri->segment(4)==""){
            $this->load->view("newback/callhead");
            $this->load->view("newback/head");
            $this->load->model('background_model','background');
            $data=$this->background->getapplydata(0);
            $convey=array(
                'data'=>$data
            );
            $this->load->view("newback/apply",$convey);
        }
        if($this->uri->segment(3)=="apply"&&$this->uri->segment(4)!=""){
            $no=$this->uri->segment(4);
            $this->load->view("newback/callhead");
            $this->load->view("newback/head");
            $this->load->model('background_model','background');
            $data=$this->background->getapplydata($no);
            $convey=array(
                'data'=>$data
            );
            $this->load->view("newback/apply",$convey);
        }

    }
    public function material(){
        if($this->uri->segment(3)=="apply"&&$this->uri->segment(4)==""){
            $this->load->view("newback/callhead");
            $this->load->view("newback/head");
            $this->load->view("newback/material/material_apply");
        }
        if($this->uri->segment(3)=="manage"){
            $this->load->model('material_model','m');
            $this->load->view("newback/callhead");
            $this->load->view("newback/head");
            $this->load->view("newback/material/material_manage");
            if($this->uri->segment(4)=="add"){
                $this->m->add();
            }
        }

    }

/* 报名结果查询部分 */
    public function result(){
            $activity=$this->uri->segment(3);
            $this->load->view("newback/callhead");
            $this->load->view("newback/head");
            $this->load->view("newback/result/".$activity);
        }


    public function news(){
        $kind=$this->uri->segment(2);
        if($this->uri->segment(3)=="add"&&$this->uri->segment(4)==""){
            $this->load->view("newback/callhead");
            $this->load->view("newback/head");
            $this->load->view("newback/editor");
        }
        if($this->uri->segment(3)=="manage"&&$this->uri->segment(4)==""){
            $this->load->view("newback/callhead");
            $this->load->view("newback/head");
            $this->load->model('background_model','background');
            $id=NULL;
            $data=$this->background->getdata($kind,$id);
            $convey=array(
                'data'=>$data
            );
            $this->load->view("newback/manage",$convey);
        }
        if($this->uri->segment(3)=="manage"&&$this->uri->segment(4)=="giveup"){
            $id=$this->input->post('id');
            $this->load->model('background_model','background');
            $this->background->giveup($kind,$id);
        }
        if($this->uri->segment(3)=="manage"&&$this->uri->segment(4)=="recover"){
            $id=$this->input->post('id');
            $this->load->model('background_model','background');
            $this->background->recover($kind,$id);
        }
        if($this->uri->segment(3)=="manage"&&$this->uri->segment(4)=="rewrite"){
            $id=$this->uri->segment(5);
            $this->load->model('background_model','background');
            $this->background->recover($kind,$id);
        }
        if($this->uri->segment(3)=="modify"&&$this->uri->segment(4)==""){
            $id=$_GET['id'];
            if($id!=null){
                $this->load->view("newback/callhead");
                $this->load->view("newback/head");
                $this->load->model('background_model','background');
                $data=$this->background->getdata($kind,$id);
                $convey=array(
                    'data'=>$data,
                    'id' => $id
                );
                $this->load->view("newback/modify",$convey);   
            }
        }
        if($this->uri->segment(3)=="modify"&&$this->uri->segment(4)=="submit"){
            $this->load->model('background_model','background');
            $this->background->modify($kind);
        }
    }
    public function website(){
        $this->load->view('background/editor');
    }

    //2017/1/30谭思危更改 
    public function pic(){//控制轮播图
        // $place=$this->uri->segment(3);
        // $id=$this->uri->segment(5);
        // $filename=$place.$id;

        $tem=$this->db->select('*')->from('home_pic')->where('filename !=','')->get();
        $data['data'] = $tem->result();

        $this->load->view("newback/callhead");
        $this->load->view("newback/head");
        $this->load->view("newback/pic", $data);
    }

    public function picMethod( $method = ''){
        $this->load->model("homePic_model",'homePic');

        if ( $method == '') {
            $message = 'false';
        }
        else if($method=="add"){//更改
            $message = $this->homePic->add();
        }
        else if($method=="delete"){//删除
            $message = $this->homePic->delete();
        }
        // echo " 'message' : ' " .$message. " ' ";
    }

    public function appManager(){
        $this->load->view("newback/callhead");
        $this->load->view("newback/head");
        if($this->uri->segment(3)=="actlist"){
            $this->load->view("newback/app/actlist");
        }
        if($this->uri->segment(3)=="start"){
            $this->load->view("newback/app/start");
        }
        //StartImage
        if($this->uri->segment(3)=="changeStartUrl"){
            $this->load->database();
            $url=$this->input->post('url');
            $this->db->query("update appStartImg set url='$url' where 1");
        }
        if($this->uri->segment(3)=="changeStartImg"){
            $config['upload_path'] = './static/appStartImg/';
            $config['allowed_types'] = 'jpg';
            $config['max_size'] = '0';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;
            $filename="appStartImg";
            $config['file_name'] =$filename;
            $this -> load -> library('upload', $config);
            $this -> upload -> do_upload('startImg');
            $this->load->database();
            header("location: ".site_url("admin/appManager/start"));
        }
        //ActList
        $id=$this->uri->segment(4);
        if($this->uri->segment(3)=="add"){//添加
            $this->db->query("INSERT INTO actlist(id) VALUES ($id)");
            header("location: ".site_url("admin/appManager/actlist"));
        }
        if($this->uri->segment(4)=="change"){//更改
            $config['upload_path'] = './static/image/';
            $config['allowed_types'] = 'jpg';
            $config['max_size'] = '0';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;
            $id = $this->uri->segment(5);
            $filename="actlist".$id;
            $config['file_name'] =$filename;
            $this -> load -> library('upload', $config); //调用CI的upload类
            $this -> upload -> do_upload($filename); //使用do_upload('上传框的name')方法进行上传
            $this->load->database();
            header("location: ".site_url("admin/appManager/actlist"));
        }
        if($this->uri->segment(3)=="delete"){//删除
            $this->load->database();
            $id=$this->uri->segment(4);
            $this->db->query("DELETE from actlist where id = $id");
            header("location: ".site_url("admin/appManager/actlist"));
        }
        if($this->uri->segment(3)=="addLocation"){//网址
            $this->load->database();
            $location=$this->input->post('location');
            $id=$this->uri->segment(4);
            $this->db->query("update actlist set location='$location' where id=$id");
        }
        if($this->uri->segment(3)=="addTitle"){
            $this->load->database();
            $title=$this->input->post('title');
            $id=$this->uri->segment(4);
            $this->db->query("update actlist set title='$title' where id=$id");
        }
        if($this->uri->segment(3)=="addTime"){
            $this->load->database();
            $time=$this->input->post('time');
            $id=$this->uri->segment(4);
            $this->db->query("update actlist set time='$time' where id=$id");
        }
        if($this->uri->segment(3)=="addUrl"){
            $this->load->database();
            $url=$this->input->post('url');
            $id=$this->uri->segment(4);
            $this->db->query("update actlist set url='$url' where id=$id");
        }
    }

}
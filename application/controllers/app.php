<?php
class App extends CI_Controller{
	public function parttime(){
        $str = urldecode($this->uri->segment(3));
        switch ($str) {
            case '0':
                $str = "家教";
                break;
            case '1':
                $str = "校内";
                break;
            case '2':
                $str = "校外";
                break;
            default:{
                $data=$this->db->select('id,type,title,summary,price,condition,visits,registerNum,creatAt')
            ->from('parttime')
            ->where('summary =',$str)
            ->order_by('id desc')
            ->get();
            $res=$data->result();
            $result = json_encode($res);  
            header('Content-Type: application/json');
            echo ($result);
            return;
                break;
            }

        }
            $this->load->database();
            if ($str=="家教") {
            $data=$this->db->select('id,type,title,summary,price,condition,visits,registerNum,creatAt')
            ->from('parttime')
            ->where('condition =','1')
            ->where('type =',$str)
            ->or_where('type =',"置顶")
            ->order_by('type desc')
            ->order_by('id desc')
            ->get();
            $res=$data->result();
            $result = json_encode($res);  
            header('Content-Type: application/json');
            echo ($result);
            return;
            }
            $data=$this->db->select('id,type,title,summary,price,condition,visits,registerNum,creatAt')
            ->from('parttime')
            ->where('condition =','1')
             ->where('type =',$str)
            ->order_by('id desc')
            ->get();
            $res=$data->result();
            $result = json_encode($res);  
            header('Content-Type: application/json');
            echo ($result);
            return;
        
    }
	public function activity(){
	   $this->load->database();
        $data=$this->db->select('id,appViewController,title,type,summary,location,year,month,day')
            ->from('news')
            ->where('kind =','活动')
            ->order_by('id desc')
            ->get();
        $res=$data->result();
        $result = json_encode($res);  
        header('Content-Type: application/json');
        echo ($result);
	}
	public function rmnd(){
	      $this->load->database();
        $data=$this->db->select('id,appViewController,title,type,summary,location,year,month,day')
            ->from('news')
            ->where('kind =','推文')
            ->order_by('id desc')
            ->get();
        $res=$data->result();
        $result = json_encode($res);  
        header('Content-Type: application/json');
        echo ($result);
	}
    public function fleamarket(){
       $this->load->database();
        $data=$this->db->select('id,title')
            ->from('news')
            ->where('kind =','线上跳市轮播图')
            ->order_by('id desc')
            ->get();
        $res=$data->result();
        $result = json_encode($res);  
        header('Content-Type: application/json');
        echo ($result);
    }
    public function banner(){
        $this->load->database();
        $data = $this->db->select('id,url')
            ->from('home_pic')
            ->get();
        $res = $data->result();
        $result = json_encode($res);
        header('Content-Type: application/json');
        echo ($result);
    }
    public function actlist(){
        $this->load->database();
        $data = $this->db->select('*')
            ->order_by('time asc')
            ->from('actlist')
            ->get();
        $res = $data->result();
        $result = json_encode($res);
        header('Content-Type: application/json');
        echo ($result);
    }
}


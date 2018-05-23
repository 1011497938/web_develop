<?php
class Mobilelist_model extends CI_Model{
    public function tweets(){
        $this->load->database();
        $data=$this->db->select('*')
            ->from('news')
            ->where('kind =','推文')
            ->order_by('id desc')
            ->get();
        $res=$data->result();
        return $res;
    }
    public function news(){
        $this->load->database();
        $data=$this->db->select('*')
            ->from('news')
            ->where('kind =','活动')
            ->order_by('id desc')
            ->get();
        $res=$data->result();
        return $res;
    }
    //校内兼职
    public function xnjianzhi(){
        $this->load->database();
        $data=$this->db->select('id,title,summary,year,month,day')
            ->from('parttime')
            ->where('type =','校内')
            ->where('condition =','1')
            ->order_by('id desc')
            ->get();
        $res=$data->result();
        return $res;
    }
    //校外兼职
    public function xwjianzhi(){
        $this->load->database();
        $data=$this->db->select('id,title,summary,year,month,day')
            ->from('parttime')
            ->where('type =','校外')
            ->where('condition =','1')
            ->order_by('id desc')
            ->get();
        $res=$data->result();
        return $res;
    }
    //家教
    public function jiajiao(){
        $this->load->database();
        $data=$this->db->select('id,title,summary,year,month,day')
            ->from('parttime')
            ->where('type =','家教')
            ->where('condition =','1')
            ->order_by('id desc')
            ->get();
        $res=$data->result();
        return $res;
    }
    //置顶
    public function top($kind){
        $this->load->database();
        $data=$this->db->select('id,title,summary,year,month,day')
            ->from($kind)
            ->where('type =','置顶')
            ->where('condition =','1')
            ->order_by('id desc')
            ->get();
        $res=$data->result();
        return $res;
    }
}
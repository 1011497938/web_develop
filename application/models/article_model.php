<?php
class Article_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function data($kind,$id){
        $res=$this->db->select('*')//标题，摘要，文章内容
            ->from($kind)
            ->where('id',$id)
            ->get();
        $data=$res->result();
        return $data;
    }

    public function former($kind,$id){
        if($id==1){
            return 0;
        }
        $res=$this->db->select('*')//标题，摘要，文章内容
        ->from($kind)
            ->where('id',$id-1)
            ->get();
        $data=$res->result();
        return $data;
    }

    public function later($kind,$id){
        $res=$this->db->query('SELECT COUNT(1) ROWS FROM '.$kind);
        foreach($res->result() as $item)//用循环输出数组内容
        {  $num=$item->ROWS;}
        if($id==$num){
            return 0;
        }
        $res=$this->db->select('*')//标题，摘要，文章内容
        ->from($kind)
            ->where('id',$id+1)
            ->get();
        $data=$res->result();
        return $data;
    }

    public function showSummary($kind,$page){
        $res=$this->db->query('SELECT COUNT(1) ROWS FROM '.$kind);
    }

}
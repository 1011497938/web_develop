<?php
class List_model extends CI_Model{

    function __construct(){
        // parent::Model();
        parent::__construct();
    }

    /*
    *获得表的内容
    *@param $num 每页显示多少项目
    *@param $offest 从数据选择的偏移量
    *@param $table_name 传递的表名
    */    
    public function get_List( $table_name, $num, $offset){

        $query = $this->db->select('*')//标题，摘要，文章内容
            ->from( $table_name )
            ->order_by('year desc, month desc, day desc')
            ->where('condition =',1)
            ->limit( $num, $offset)
            ->get();

        return $query;
    }

    public function activity_List($num, $offset){

        $query = $this->db->select('*')//标题，摘要，文章内容
            ->from( 'news' )
            ->order_by('year desc, month desc, day desc')
            ->where('condition = 1')
            ->where('kind =', '活动')
            ->limit( $num, $offset)
            ->get();

        return $query;
    }
      
}
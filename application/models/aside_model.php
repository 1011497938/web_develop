<?php
/**
 * Created by 谭思危.
 * Date: 16/12/2
 * Time: 下午10:44
 */
//显示右侧边栏的模型
class aside_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function common_aside(){
        $query = $this->db->select('id,title')//标题，摘要，文章内容
            ->from( 'news' )
            ->order_by('id desc')
            ->where('condition =',1)
            ->limit( 10, 0)
            ->get();

        return $query;
    }

    public function parttime_aside(){
        $query = $this->db->select('id,title')//标题，摘要，文章内容
            ->from( 'parttime' )
            ->order_by('id asc')
            ->where('condition =',1)
            ->limit( 10, 0)
            ->get();

        return $query;
    }

}
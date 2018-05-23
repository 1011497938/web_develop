<?php
/**
 * User: 谭思危
 * Date: 16/3/12
 * Time: 下午10:31
 */
class MY_Controller extends CI_Controller{
    public $pageviews;

    public function __construct(){
        parent::__construct();
        if($this->uri->segment(1)=="admin"){

        $this->load->library('session');
        $user=$this->session->userdata('user');
        $func=$this->uri->segment(2);//验证地址的第二节
        $res=$user['usergroup'];
        if(!$user){
            //验证失败
            show_404();
            exit;
        }
        elseif($func!="index"&&$func!=""){
            if($res=="jg"&&$func=="news"){
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        <script type="text/javascript">alert("无访问权限。");
                        history.back(-1);</script>';
                exit;
            }//兼管仅能访问兼职
            if($res=="bgs"&&$func=="parttime"){
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        <script type="text/javascript">alert("无访问权限。");
                        history.back(-1);</script>';
                exit;
            }//办公室仅能访问通知公告
            if(($res=="sc"||$res=="cz"||$res=="wt"||$res=="rz")&&($func!="home"&&$func!="material"&&$func!="result")){
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        <script type="text/javascript">alert("无访问权限。");
                        history.back(-1);</script>';
                exit;
            }
            if(($res=="sc"||$res=="cz"||$res=="wt"||$res=="rz"||$res=="jt")&&($func!="home"&&$func!="material"&&$func!="result")){
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        <script type="text/javascript">alert("无访问权限。");
                        history.back(-1);</script>';
                exit;
            }//其他部门仅能访问物资和报名结果查询
            if(($res!="bgs"&&$res!="admin")&&($func=="material"&&$this->uri->segment(3)=="manage")){
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        <script type="text/javascript">alert("无访问权限。");
                        history.back(-1);</script>';
                exit;
            }//其他部门不能访问物资管理
            }
        }
        else{
            if(empty($_COOKIE['qcw_visit'])){
                $this->load->helper('cookie');
                set_cookie("qcw_visit",md5(time() . mt_rand(0,1000)),10800);
                $this->load->database();
                $this->db->query('update surf set today=today+1');            }
        }

        $this->add_ageviews();
    }

    //获得该网页的访问量
    public function add_ageviews()
    {
        $current_url = current_url();

        $query = $this->db->select('*')
            ->from( "pageviews" )
            ->where('url =', $current_url )
            ->get();

        $row = $query->row();
        
        // echo $query->num_rows();
        if ( $query->num_rows() == 1 ) {

            $row->pageviews++;
            $query = "UPDATE `pageviews` SET `pageviews`=".$row->pageviews++." WHERE url = '". $row->url."'";
            $this->db->query($query);

            $this->pageviews = $row->pageviews;
        }else
        {
            $pageviews = 1;
            $data = array('pageviews' => $pageviews, 'url' => $current_url );
            $query=$this->db->insert('pageviews',$data);

            $this->pageviews = $pageviews;
        }
    }

}
<?php
/**
 * Created by 谭思危.
 * User: 监管
 * Date: 16/10/11
 * Time: 下午10:44
 */
//这个是兼职信息模块的控制器
class  Parttime extends MY_Controller{
    // 构造函数
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    //显示列表
    public function message(){   
        $table_name = 'parttime'; // 表名 

        // 加载CI中的pagination class（分页类）
        $this->load->library('pagination');
        $config['base_url'] = site_url('article/index');
        $config['per_page'] = 5;
        $config['total_rows'] = $this->db->count_all( $table_name)  ;
        $config['uri_segment'] = 3;  // 表示第 3 段 URL 为当前页数，如 index.php/控制器/方法/页数，如果表示当前页的 URL 段不是第 3 段，请修改成需要的数值。
     
        // $config['full_tag_open'] = '<p>';
        // $config['full_tag_close'] = '</p>';
     
        $this->pagination->initialize($config);

        // 加载模型
        $this->load->model('List_model');
        $data['results'] = $this->List_model->get_List( $table_name, $config['per_page'],($this->uri->segment(3,1)-1) * $config['per_page']);
        $data['page_num'] = $this->uri->segment(3,1);
        $data['end_page'] = ceil($config['total_rows'] / $config['per_page']);
        $this->load->view('common/callhead');
        $this->load->view('common/nav');
        $this->load->view('common/slider');

        $this->load->view('parttime_message',$data);

        // 右侧边框生成，存在'application/library'文件夹中
        $this->load->library('AsideClass');
        $this->asideclass->create_aside( 'parttime_aside' );
        
        $this->load->view('common/foot');
    }

    //显示详细内容
    public function contains( $id )
    {
        $this->load->view('common/callhead');
        $this->load->view('common/nav');
        $this->load->view('common/slider');

        $this->load->model('content_model');

        $data['article'] = $this->content_model->data( "parttime", $id);
        $data['type'] = "parttime";
        // 访问量
        $data['pageviews'] = $this->pageviews;

        $this->load->view('content',$data);

        // 右侧边框生成，存在'application/library'文件夹中
        $this->load->library('AsideClass');
        $this->asideclass->create_aside( 'parttime_aside' );

        $this->load->view('common/foot');
    }

    public function apply(){   
        $this->load->view('common/callhead');
        $this->load->view('common/nav');
        $this->load->view('parttime_apply');
        $this->load->view('common/foot');
    }

    public function submit(){

        $this->load->model('parttime_model');
        $this->parttime_model->submit();

    }
}

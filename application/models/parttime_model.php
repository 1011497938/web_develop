<?php
/**
 * Created by 谭思危.
 * Date: 16/12/15
 * Time: 下午7:32
 */
//显示新闻等文章的模型
class parttime_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

	public function submit(){

		if ($_POST) {


	        $name = $this -> input -> post('name');
	        $grade = $this -> input -> post('grade');
	        $sex = $this -> input -> post('sex');
	        $major = $this -> input -> post('major');
	        $section = $this -> input -> post('section');
	        $xh = $this -> input -> post('xh');
	        $intro = $this -> input -> post('intro');
	        $NO = $this -> input -> post('NO');
	        $phone = $this -> input -> post('phone');

			
		    $data = array(
		    	'name' => $name,
		    	'grade' => $grade, 
		    	'sex' => $sex, 
		    	'major' => $major, 
		    	'section' => $section, 
		    	'xh' => $xh, 
		    	'intro' => $intro, 
		    	'NO' => $NO,
		    	'phone' => $phone
		     );

		    // 防止xss攻击
			$data = $this->security->xss_clean($data);

		    $msg = $this->db->insert('register', $data);

		    //提交成功
		    if ( isset($msg) ) {
		    	echo "<script type='text/javascript'>alert('提交成功！我们一定会在最快时间内提醒您');history.back(-1);</script>";
		    }else{
		    	echo "<script type='text/javascript'>alert('提交失败！请重新填写');history.go(-1);</script>";
		    }

		}

    }  //function submit

}


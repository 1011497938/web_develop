<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/4/11
 * Time: 9:31
 */
class Registers_model extends CI_Model
{
    public function index(){
        $this->load->database();
        $NO = $this->input->post('NO');
        $name = $this->input->post('name');
        $sex = $this->input->post('sex');
        $section = $this->input->post('section');
        $grade = $this->input->post('grade');
        $major = $this->input->post('major');
        $phone = $this->input->post('phone');
        $xh = $this->input->post('xh');
        $intro = $this->input->post('intro');
        $data=array(
            'NO'=>$NO,
            'name'=>$name,
            'sex'=>$sex,
            'xh'=>$xh,
            'section'=>$section,
            'grade'=>$grade,
            'major'=>$major,
            'phone'=>$phone,
            'intro'=>$intro,
        );
        $this->db->insert('register',$data);
        $this->db->query("update parttime set registerNum=registerNum+1 where summary = '$NO'");
        if ($this->uri->segment(3) == "fromapp") {
            echo true;
        }else{
            echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
            echo '<script type="text/javascript">alert("报名成功！感谢您对勤创的支持！");';
            echo 'window.location.href = "http://qcw.zju.edu.cn";</script>';
        }

    }
}

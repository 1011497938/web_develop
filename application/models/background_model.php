<?php
class Background_model extends CI_Model{
    public function getusername(){
        $this->load->database();
        $username=$this->input->post('username',TRUE);
        return $username;
    }
    public function getpassword(){
        $this->load->database();
        $passwordtem=$this->input->post('password',TRUE);
        $password = $passwordtem;
        return $password;
    }
    public function check($username,$password){
        //检测用户名及密码是否正确
        $this->load->database();
        $check_query =$this->db->query("select username from login where username='$username' and password='$password' limit 1");
        $res=$check_query->result();
        $result=0;
        foreach($res as $item){
            if($item->username=="jt"){
                $result="jt";
            }
            if($item->username=="admin"){
                $result="admin";
            }
        }
        if($result){
            //登录成功
            $data=array(
                'username'=>$username,
                'password'=>$password,
                'usergroup'=>$result
            );
            $this->load->library('session');
            $this->session->set_userdata('user',$data);
            return 1;
        } else {
            return 0;
        }
    }
    public function logout(){
        $this->load->library('session');
        $this->session->unset_userdata('user');
    }
    public function submit($kind){
        $this->load->database();
        //获取记录数
        $res=$this->db->query("SELECT * FROM $kind");
        $num=1;
        foreach($res->result() as $item)$num++;
        $id=$num+1;
        $type=$this->input->post('type');
        $vc = $this -> input -> post('app_vc_kind');
        $title=$this->input->post('title');
        $summary=$this->input->post('summary');
        $location=$this->input->post('location');
        $kin=$this->input->post('kind');
        $content=$this->input->post('editor');
        $price = $this->input->post('price');
        $this->load->helper('date');
        $year =mdate("%Y", time());
        $month =mdate("%m",time());
        $day =mdate("%d",time());
        if ($kind=="home") {
            $config['upload_path'] = './static/titleimg/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '0';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;
            $config['file_name'] = $kind.$id;
            $this -> load -> library('upload', $config); //调用CI的upload类
            $this -> upload -> do_upload('imgupload'); //使用do_upload('上传框的name')方法进行上传
            // 以下代码为拓展的，非必要
            $data = $this->upload->data(); //将文件信息存入数组
            $filename=$data["file_name"];
            $this->db->query("INSERT INTO $kind(id,type,title,summary,content,year,month,day,filename) VALUES ('$id','$type','$title','$summary','$content','$year','$month','$day','$filename')");
        }
        else if ($kind=="news") {
            $config['upload_path'] = './static/titleimg/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '0';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;
            $config['file_name'] = $kind.$id;
            $this -> load -> library('upload', $config); //调用CI的upload类
            $this -> upload -> do_upload('imgupload'); //使用do_upload('上传框的name')方法进行上传
            // 以下代码为拓展的，非必要
            $data = $this->upload->data(); //将文件信息存入数组
            $filename=$data["file_name"];
            $this->db->query("INSERT INTO $kind(id,type,appViewController,title,summary,location,content,year,month,day,kind,filename) VALUES ('$id','$type','$vc','$title','$summary','$location','$content','$year','$month','$day','$kin','$filename')");
        }else if ($kind=="parttime") {
            $this->db->query("INSERT INTO $kind(type,title,summary,price,content) VALUES ($type','$title','$summary','$price','$content')");
        }
    }

    public function giveup($kind,$id){
        $this->load->database();
        $this->db->where('id', $id);
        $data=array(
            'condition'=>0
        );
        $this->db->update($kind, $data);    }
    public function recover($kind,$id){
        $this->load->database();
        $this->db->where('id', $id);
        $data=array(
            'condition'=>1
        );
        $this->db->update($kind, $data);
    }
    public function getdata($kind,$id){
        $this->load->database();//加载数据库
        if($id==null){
            $res=$this->db->select('*')//标题，摘要，文章内容
            ->from($kind)->get();
            $data=$res->result();
            return $data;
        }else{
            $res=$this->db->where('id',$id)
            ->from($kind)->get();
            $data=$res->result();
            return $data;
        }
    }
    public function modify($kind){
        $this->load->database();
        $id = $this->input->post('id');
        $type=$this->input->post('type');
        $vc = $this -> input -> post('app_vc_kind');
        $title=$this->input->post('title');
        $summary=$this->input->post('summary');
        $location=$this->input->post('location');
        $kin=$this->input->post('kind');
        $content=$this->input->post('editor');
        $price = $this->input->post('price');
        if($kind=="news"){
            $config['upload_path'] = './static/titleimg/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '0';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;
            $fileurl = './static/titleimg/'.$kind.$id.'.jpg';
            //unlink($fileurl);
            $config['file_name'] = $kind.$id;
            $this -> load -> library('upload', $config); //调用CI的upload类
            $this -> upload -> do_upload('imgupload'); //使用do_upload('上传框的name')方法进行上传
            // 以下代码为拓展的，非必要
            $Data = $this->upload->data(); //将文件信息存入数组
            $filename=preg_match("/(\w*).jpg/",$Data["file_name"])?$Data["file_name"]:$Data["file_name"];
            $data=array(
                'title' => $title,
                'type' => $type,
                'summary' => $summary,
                'content' => $content,
                'appViewController' => $vc,
                'kind' => $kin,
                'filename' => $filename
            );
            $this->db->where('id',$id);
            $this->db->update($kind,$data);
            //echo $this->db->affected_rows();
            //echo '<img src="http://localhost/htdocs/static/titleimg/news1.jpg">';
        }elseif($kind=="parttime"){
            $data=array(
                'title' => $title,
                'type' => $type,
                'summary' => $summary,
                'content' => $content,
                'price' => $price,
            );
            $this->db->where('id',$id);
            $this->db->update($kind,$data);
        }
        echo '<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';
        echo "<script>alert('修改成功！');window.location.href='".site_url('admin/news/modify/?id='.$id)."';;</script>";
    }
    public function getapplydata($no){
        $this->load->database();//加载数据库
        $res=$this->db->select('*')
        ->from('register')->where('NO',$no)->get();
        $data=$res->result();
        return $data;
    }
}
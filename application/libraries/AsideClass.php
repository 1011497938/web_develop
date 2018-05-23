<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AsideClass {

	// 构造函数
    function __construct() {
    	$CI =& get_instance();
        $CI->load->database();
    }

    /*
    *创建右侧边框的函数
    *parameter @string $aside_name 可选common_aside或者parttime_aside
    */
    public function create_aside( $aside_name )
    {
    	$CI =& get_instance();
    	
        $CI->load->model('aside_model');

        $data['recent_news'] = $CI->aside_model->common_aside();
        $data['recent_jobs'] = $CI->aside_model->parttime_aside();

        if ( $aside_name == 'common_aside') {
            $CI->load->view('aside/common_aside',$data);
        }else{
            $CI->load->view('aside/parttime_aside',$data);
        }
        
    }


}
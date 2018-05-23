<?php 
    class homePic_model extends CI_Model{

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function add(){

            $config['upload_path'] = './static/img/slider';
            $config['allowed_types'] = 'jpg';

            $this->load->library('upload', $config);

            $url = $this -> input -> post('url');

            //是更改 
            if ( !$this->upload->do_upload('pic'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else
            {
                // var_dump('C:\fakepath\qiuna-slider.jpg');
                $flieData = $this->upload->data();
                $data = array(
                    'filename' => $flieData['file_name'],
                    // 'filename' => 'Hi',
                    'url' => $url
                );
                $this->db->insert('home_pic', $data);
            }

            echo $this->db->insert_id();

        }

        public function delete(){
            $id = $this -> input -> post('id');
            
            $this->db->where('id = ',$id);
            $this->db->delete('home_pic');
        }

    }

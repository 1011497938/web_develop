<?php

class Material_model extends CI_Model
{
    public function count(){
        $res=$this->db->select('*')
        ->from('material')
        ->get(); 
        $count=0;
        foreach ($res->result() as $item)$count++;
        return $count; 
    }
     public function add(){
      $this->load->database();
      $res=$this->db->query('select * from material'); 
      $count=0;
      foreach ($res->result() as $item)$count++;
      $id = $count+1;
      $name = $this->input->post('name');
      $num = $this->input->post('num');
      $address = $this->input->post('address');
      $ps = $this->input->post('ps');
      $data = array('id'=>$id,
                    'name' => $name, 
                    'num' => $num,
                    'address' => $address,
                    'ps' => $ps);
      $this->db->insert('material',$data);
      $this->db->close();
    }

}

<?php

class Model_vermaks extends CI_Model {

    public function tampil(){
        return $this->db->get('vermaks');
    }
    public function hapus_barang($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);   
    
    }
    public function update_data($where, $table) {
          return  $this->db->get_where($table, $where);
    }
    public function update_product($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function get_keywords($keyword){
        $this->db->select('*');
        $this->db->from('vermaks');
        $this->db->like('name', $keyword);
        $this->db->or_like('jenis_vermak',$keyword);
    }
}
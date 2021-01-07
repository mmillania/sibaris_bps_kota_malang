<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

    public function tampil_data(){
        return $this->db->get('tb_ruang');
    }

    public function get_ruang_keyword($keyword){
        $this->db->select('*');
			$this->db->from('tb_ruang');
			$this->db->like('kode_ruang',$keyword);
			$this->db->or_like('uraian_ruang',$keyword);
			return $this->db->get()->result();
    }  

    public function data_food(){
        return $this->db->get_where("tb_barang", array('kategori' => 'Food'));
    }

    public function data_snack(){
        return $this->db->get_where("tb_barang", array('kategori' => 'Snack'));
    }

    public function data_kitchen(){
        return $this->db->get_where("tb_barang", array('kategori' => 'Kitchen'));
    }

    public function data_info(){
        return $this->db->get_where("tb_blog", array('kategori_blog' => 'Info'));
    }

    public function data_resep(){
        return $this->db->get_where("tb_blog", array('kategori_blog' => 'Resep'));
    }
}

?>
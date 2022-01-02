<?php 

class Model_kategori extends CI_Model{

	public function Agama(){
		return $this->db->get_where('tb_barang',array('kategori' => 'Agama'));

	}
	public function Perikanan(){
		return $this->db->get_where('tb_barang',array('kategori' => 'Perikanan dan Kelautan'));

	}
	public function Piskologi(){
		return $this->db->get_where('tb_barang',array('kategori' => 'Piskologi'));

	}
	public function Sosial(){
		return $this->db->get_where('tb_barang',array('kategori' => 'Sosial, Politik & Hukum'));

	}
	public function Umum(){
		return $this->db->get_where('tb_barang',array('kategori' => 'Umum'));

	}
}

 ?>

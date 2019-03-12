<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {
	var $table = "produk";

	function add($produk){
		$this->db->insert($this->table,$produk);

		if ($this->db->affected_rows()>0) {
			redirect('produk/index');
		}
	}

	public function update_produk($id_produk, $data)
	{
		$this->db->where('produkId',$id_produk);
		$this->db->update($this->table,$data);
		if ($this->db->affected_rows()>0) {
			redirect('produk/show_list_produk');
		}
	}

	public function get_produk()
	{
		$this->db->select('*')->from('produk');
		$res = $this->db->get();

		return $res->result();
	}

	public function hapus_produk($id_produk)
	{
		$this->db->where('produkId',$id_produk);
		$this->db->delete('produk');

		if ($this->db->affected_rows()>0) {
			redirect('produk/show_list_produk');
		}
	}

	public function get_produk_detail($id_produk)
	{
		$this->db->select('*')->from('produk');
		$this->db->where('produkId',$id_produk);
		$res = $this->db->get();

		return $res->result();
	}
}
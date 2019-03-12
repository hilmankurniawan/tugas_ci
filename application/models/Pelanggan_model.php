<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model 
{
	var $table = "pelanggan";

	function add($data){
		$this->db->insert($this->table,$data);

		if ($this->db->affected_rows()>0){
			redirect('pelanggan/index');
		}
	}
	public function update_pelanggan($id_pelanggan, $data)
	{
		$this->db->where('pelangganId', $id_pelanggan);
		$this->db->update($this->table, $data);
		// echo $this->db->last_query();die();
		if ($this->db->affected_rows()>0){
			redirect('pelanggan/show_list');
		}
	}
	public function get_pelanggan()
	{
		$this->db->select('*')->from('pelanggan');
		$res = $this->db->get();
		return $res->result();
	}
	public function delete_pelanggan($id_pelanggan)
	{
		$this->db->where('pelangganId',$id_pelanggan);
		$this->db->delete('pelanggan');

		if ($this->db->affected_rows()>0){
			redirect("pelanggan/show_list");
		}
	}

	public function get_pelanggan_detail($id_pelanggan)
	{
		$this->db->select('*')
		->from('pelanggan');
		$this->db->where('pelangganId', $id_pelanggan);
		$res = $this->db->get();

		return $res->result();
	}
}
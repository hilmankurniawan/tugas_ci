<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index(){
		$data['page'] = "pelanggan/form";
		$this->load->view('main',$data);
	}

	public function submit()
	{
		$this->load->model('Pelanggan_model');
		$this->load->helper('autoId');
		$table="pelanggan";
		$fields="pelangganId";
		$inisial="P";
		$id_pelanggan = $this->input->post('idpelanggan');
	if ($id_pelanggan ==''){

		$pelanggan = $this->input->post();
		$pelanggan['pelangganId']= get_id($fields, $table, $inisial);

		$this->Pelanggan_model->add($pelanggan);
	}else{
	$data = array(
		'namaPelanggan' => $this->input->post('namaPelanggan'),
		'email' => $this->input->post('email'),
		'telpon' => $this->input->post('telpon'),
		'alamat' => $this->input->post('alamat')
		);
	$this->Pelanggan_model->update_pelanggan($id_pelanggan, $data);
	}
	}
	public function show_list()
	{
		$data['page'] = "pelanggan/list_pelanggan";
		$this->load->model('Pelanggan_model');
		$data["pelanggan"] = $this->Pelanggan_model->get_pelanggan();
		// $this->load->view('pelanggan/list_pelanggan',$data);
		$this->load->view('main',$data);
	}

	public function hapus_pelanggan()
	{
		$this->load->model('Pelanggan_model');
		$id_pelanggan = $this->uri->segment(3);
		$this->Pelanggan_model->delete_pelanggan($id_pelanggan);
	}
	public function edit_pelanggan()
	{
		$id_pelanggan = $this->uri->segment(3);
		$this->load->model('Pelanggan_model');
		$data["data_pelanggan"] = $this->Pelanggan_model->get_pelanggan_detail($id_pelanggan);
		$data['page'] = "pelanggan/form";
		$this->load->view('main',$data);
	}
}
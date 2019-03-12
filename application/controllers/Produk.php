<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index(){

		$data['page'] = "Produk/form";
		$this->load->view('main',$data);
	}

	public function submit()
	{	
		$this->load->model('produk_model');
		$this->load->helper('autoId');
		$table = 'produk';
		$fields = 'produkId';
		$inisial = 'P';
	$id_produk = $this->input->post('idProduk');
	if ($id_produk =='') {
		$id_prod = get_id($fields, $table, $inisial);
		$produk = array (
			'produkId' => $id_prod,
			'nmProduk' => $this->input->post('nmProduk'),
			'harga' => $this->input->post('harga'),
			'satuan' => $this->input->post('satuan'),
			'qty' => $this->input->post('qty'),
			'image' => $this->input->post('image'),
			'deskripsi' => $this->input->post('deskripsi')
		);
		$this->produk_model->add($produk);
	} else {
		$data = array(
			'nmProduk' => $this->input->post('nmProduk'),
			'harga' => $this->input->post('harga'),
			'satuan' => $this->input->post('satuan'),
			'qty' => $this->input->post('qty'),
			'image' => $this->input->post('image'),
			'deskripsi' => $this->input->post('deskripsi')
		);

		$this->produk_model->update_produk($id_produk,$data);
		}
	}

	public function show_list_produk()
	{
		$data['page']= "produk/list_produk";
		$this->load->model('produk_model');
		$data["produk"] = $this->produk_model->get_produk();
		$this->load->view('main',$data);
	}

	public function hapus_produk()
	{
		$this->load->model('produk_model');
		$id_produk = $this->uri->segment(3);
		$this->produk_model->hapus_produk($id_produk);
	}

	public function edit_produk()
	{
		$id_produk = $this->uri->segment(3);
		$this->load->model('produk_model');
		$data["data_produk"] = $this->produk_model->get_produk_detail($id_produk);
		$data['page'] = "produk/form";
		$this->load->view('main',$data);
	}
}
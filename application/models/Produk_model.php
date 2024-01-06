<?php

class Produk_model extends CI_Model
{
	public function getAllProduk()
	{
		return  $this->db->get('produk')->result_array();
	}
	public function tambahDataProduk()
	{
		$data = [
			"nama_produk" => $this->input->post("nama_produk", true),
			"stok_produk" => $this->input->post("stok_produk", true),
			"harga_produk" => $this->input->post("harga_produk", true),
		];

		$this->db->insert('produk', $data);
	}
	public function hapusDataProduk($id)
	{

		// $this->db->where('id', $id);
		$this->db->delete('produk', ['id' => $id]);
	}
	public function getProduk($id)
	{

		return  $this->db->get_where('produk', ['id' => $id])->row_array();
	}
	public function ubahDataProduk($id)
	{
		$data = [
			"nama_produk" => $this->input->post("nama_produk", true),
			"stok_produk" => $this->input->post("stok_produk", true),
			"harga_produk" => $this->input->post("harga_produk", true),
		];

		$this->db->where('id', $id);
		$this->db->update('produk', $data);
	}
	public function cariProduk()
	{
		$cari = $this->input->post('cari', true);
		$this->db->where('nama_produk', $cari);
		return  $this->db->get('produk')->result_array();
	}
	public function countAllProduk()
	{

		return  $this->db->get('produk')->num_rows();
	}
	public function getPerProduk($limit, $start, $cari = null)
	{
		if ($cari) {
			$this->db->like('nama_produk', $cari);
			$this->db->or_like('harga_produk', $cari);
		}
		return  $this->db->get('produk', $limit, $start)->result_array();
	}
}
